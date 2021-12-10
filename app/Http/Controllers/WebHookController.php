<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\List_number;
use App\Delivery;
use App\Brand;
use App\Models\IncomingMessage;
use Log;

class WebHookController extends Controller
{

    public function __construct()
    {
    }

    public function whatsappMessageStatusHook(Request $request)
    {
        if ($request->isMethod('post')) {
            Delivery::where('message_id', '=', $request->MessageSid)->update([
                'status' => strtoupper($request->MessageStatus),
                'status_message' => (!empty($request->ErrorMessage)) ? $request->ErrorMessage : 'N/A'
            ]);
        }
    }

    public function receiveMessageWebhook(Request $request)
    {
        Log::info(json_encode($request->all()));
        $webhookArr = $request->all();

        ## Extract Phone & Platform
        $platform = explode(":", $webhookArr['From'])[0];
        $to_phone = explode(":", $webhookArr['To'])[1];
        $from_phone = explode(":", $webhookArr['From'])[1];

        $incomingMessageObj = new IncomingMessage();
        $incomingMessageObj->message_id = $webhookArr['MessageSid'];
        $incomingMessageObj->account_id = $webhookArr['AccountSid'];
        $incomingMessageObj->platform = strtoupper($platform);
        $incomingMessageObj->body = !empty($webhookArr['Body']) ? $webhookArr['Body'] : NULL;
        $incomingMessageObj->segments = $webhookArr['NumSegments'];
        $incomingMessageObj->from_phone = $from_phone;
        $incomingMessageObj->to_phone = $to_phone;
        $incomingMessageObj->file_url = !empty($webhookArr['MediaUrl0']) ? $webhookArr['MediaUrl0'] : NULL;
        $incomingMessageObj->save();

        $brandArr = Brand::where('sub_account_id', '=', $webhookArr['AccountSid'])->first();
        if (!empty($webhookArr['To']) && !empty($webhookArr['From'])) {
            if (strcasecmp(trim($webhookArr['Body']), 'OPT IN') == 0) {
                List_number::where(
                    [
                        ['brand_id', '=', $brandArr->id],
                        ['phone_number', '=', str_replace('whatsapp:', '', $webhookArr['From'])]
                    ]
                )
                    ->update(['whatsapp_opt' => 1]);
            }
            if (strcasecmp(trim($webhookArr['Body']), 'OPT OUT') == 0) {
                List_number::where(
                    [
                        ['brand_id', '=', $brandArr->id],
                        ['phone_number', '=', str_replace('whatsapp:', '', $webhookArr['From'])]
                    ]
                )
                    ->update(['whatsapp_opt' => 0]);
            }
        }
    }

    public function smsMessageStatusHook(Request $request)
    {
        if ($request->isMethod('post')) {
            Delivery::where('message_id', '=', $request->MessageSid)->update([
                'status' => strtoupper($request->MessageStatus),
                'status_message' => (!empty($request->ErrorMessage)) ? $request->ErrorMessage : 'N/A'
            ]);
        }
    }
}
