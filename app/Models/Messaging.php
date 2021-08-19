<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Twilio\Rest\Client;
use App\Delivery;
use App\MessageInfo;
use Carbon\Carbon;

class Messaging extends Model {

    public function formMessage($brandObj, $campaignObj, $numberObj) {
        $message = '';
        if ($campaignObj->prefix_brand_code == '1') {
            $message = $brandObj->brand_code_name . '>';
        }
        $message_info_id = MessageInfo::insertGetId(['brand_id' => $brandObj->id, 'campaign_id' => $campaignObj->id, 'list_number_id' => $numberObj->id, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        $message .= ' ' . str_replace('${FirstName}', $numberObj->first_name, $campaignObj->message);
        if (!empty($brandObj->campaign_redirect_url)) {
            $message .= ' ' . $brandObj->campaign_redirect_url . '/' . encodeId($message_info_id);
        }
        return $message;
    }

    public function formSingleMessage($brandObj, $campaignObj) {
        $message = '';
        if ($campaignObj->prefix_brand_code == '1') {
            $message = $brandObj->brand_code_name . '>';
        }
        $message .= ' ' . $campaignObj->message;
        if (!empty($brandObj->campaign_redirect_url)) {
            $message .= ' ' . $brandObj->campaign_redirect_url . '/xxxxxxxxxx';
        }
        return $message;
    }

    public function sendTwilioSmsMessage($message, $message_type, $type, $phone_number, $brandObj, $campaignObj) {
        $twilioMessageObj = new Client($brandObj->sub_account_id, $brandObj->sub_account_token);
        $result = $twilioMessageObj->messages->create($phone_number, ['from' => $brandObj->short_code, 'body' => $message, 'statusCallback' => url('api/webhooks/smsMessageStatusHook')]);
        Delivery::insert([
            'brand_id' => $brandObj->id,
            'campaign_id' => $campaignObj->id,
            'campaign_channel' => $campaignObj->campaign_channel,
            'phone_number' => $phone_number,
            'message' => $message,
            'message_id' => $result->sid ?? 'N/A',
            'price' => $result->price ?? 'N/A',
            'type' => $type,
            'status' => strtoupper($result->status) ?? 'N/A',
            'delivery_time' => $result->dateCreated->format('Y-m-d h:i:s'),
            'created_at' => date('Y-m-d h:i:s', time())]);
    }

    public function sendWhatsappMessage($message, $message_type, $type, $phone_number, $brandObj, $campaignObj) {
        $client = new Client($brandObj->sub_account_id, $brandObj->sub_account_token);
        $result = $client->messages->create("whatsapp:" . $phone_number, [
            'from' => 'whatsapp:' . $brandObj->whatsapp_phone_number,
            'body' => $message,
            'statusCallback' => url('api/webhooks/whatsappMessageStatusHook')
        ]);
        Delivery::insert(
                [
                    'brand_id' => $brandObj->id,
                    'campaign_id' => $campaignObj->id,
                    'campaign_channel' => $campaignObj->campaign_channel,
                    'phone_number' => $phone_number,
                    'message' => $message,
                    'message_id' => $result->sid,
                    'type' => $type,
                    'status' => strtoupper($result->status),
                    'delivery_time' => $result->dateCreated->format('Y-m-d h:i:s'),
                    'created_at' => date('Y-m-d h:i:s', time())
        ]);
    }

    public function sendException($message, $message_type, $type, $phone_number, $brandObj, $campaignObj, $error_msz) {
        Delivery::insert([
            'brand_id' => $brandObj->id,
            'campaign_id' => $campaignObj->id,
            'campaign_channel' => $campaignObj->campaign_channel,
            'phone_number' => $phone_number,
            'message' => $message,
            'type' => $type,
            'status' => "ERROR",
            'status_message' => $error_msz,
            'delivery_time' => date('Y-m-d h:i:s', time()),
            'created_at' => date('Y-m-d h:i:s', time())
        ]);
    }

}
