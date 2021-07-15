<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CronRequest;
use App\Models\Messaging;
use App\Models\ExecutionException;
use App\Brand;
use App\Campaign;
use App\List_number;

class SendSMSMessages extends Command {

    protected $signature = 'pinpoint:sendsmsmessages';
    protected $description = 'Send SMS Messages Using Twilio SMS';
    protected $MessageModel;

    public function __construct() {
        parent::__construct();
        $this->MessageModel = new Messaging();
    }

    public function handle() {
        $complete_with_errors = FALSE;
        $cronJobObj = CronRequest::where('status', '=', CRON_JOB_QUEUED)->first();
        if (!empty($cronJobObj->cron_request_id)) {
            $cronJobObj->status = CRON_JOB_PROGRESSING;
            $cronJobObj->save();
            $brandObj = Brand::find($cronJobObj->brand_id);
            $campaignObj = Campaign::find($cronJobObj->campaign_id);
            $phoneNumberObj = List_number::where([['list_id', $cronJobObj->list_id], ['brand_id', $cronJobObj->brand_id]])->get();
            foreach ($phoneNumberObj as $numberObj) {
                $message = $this->MessageModel->formMessage($brandObj, $campaignObj, $numberObj);
                switch ($campaignObj->campaign_channel) {
                    case 'SMS':
                        try {
                            $this->MessageModel->sendTwilioSmsMessage($message, $cronJobObj->message_type, $cronJobObj->type, $numberObj->phone_number, $brandObj, $campaignObj);
                        } catch (TwilioException $e) {
                            $complete_with_errors = TRUE;
                            /* ~~ Exception handling for single message delivery */
                            $error_msz = $e->getMessage();
                            $this->MessageModel->sendException($message, $cronJobObj->message_type, $cronJobObj->type, $numberObj->phone_number, $brandObj, $campaignObj, $error_msz);
                        } catch (RestException $e) {
                            $complete_with_errors = TRUE;
                            /* ~~ Exception handling for single message delivery */
                            $error_msz = $e->getMessage();
                            $this->MessageModel->sendException($message, $cronJobObj->message_type, $cronJobObj->type, $numberObj->phone_number, $brandObj, $campaignObj, $error_msz);
                        }
                        sleep(1);
                        break;
                    case 'WHATSAPP':
                        try {
                            $this->MessageModel->sendWhatsappMessage($message, $cronJobObj->message_type, $cronJobObj->type, $numberObj->phone_number, $brandObj, $campaignObj);
                        } catch (TwilioException $e) {
                            $complete_with_errors = TRUE;
                            ExecutionException::insert(['exception_data' => $e]);
                        } catch (RestException $e) {
                            $complete_with_errors = TRUE;
                            ExecutionException::insert(['exception_data' => $e]);
                        }
                        sleep(1);
                        break;
                }
            }
            if ($complete_with_errors == TRUE) {
                CronRequest::where('cron_request_id', '=', $cronJobObj->cron_request_id)->update(['status' => CRON_JOB_COMPLETED_WITH_ERRORS]);
            } else {
                CronRequest::where('cron_request_id', '=', $cronJobObj->cron_request_id)->update(['status' => CRON_JOB_COMPLETED]);
            }
        }
    }

}
