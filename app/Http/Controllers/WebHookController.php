<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\List_number;
use App\Delivery;
use App\Brand;

class WebHookController extends Controller {

    public function __construct() {
        
    }

    public function whatsappMessageStatusHook(Request $request) {
        if ($request->isMethod('post')) {
            Delivery::where('message_id', '=', $request->MessageSid)->update(['status' => strtoupper($request->MessageStatus)]);
        }
    }

    public function receiveMessageWebhook(Request $request) {
        $webhookArr = $request->all();
        $brandArr = Brand::where('sub_account_id', '=', $webhookArr['AccountSid'])->first();
        if (!empty($webhookArr['To']) && !empty($webhookArr['From'])) {
            if (strcasecmp(trim($webhookArr['Body']), 'OPT IN') == 0) {
                List_number::where(
                                [
                                    ['brand_id', '=', $brandArr->id],
                                    ['phone_number', '=', str_replace('whatsapp:', '', $webhookArr['From'])]
                        ])
                        ->update(['whatsapp_opt' => 1]);
            }
            if (strcasecmp(trim($webhookArr['Body']), 'OPT OUT') == 0) {
                List_number::where(
                                [
                                    ['brand_id', '=', $brandArr->id],
                                    ['phone_number', '=', str_replace('whatsapp:', '', $webhookArr['From'])]
                        ])
                        ->update(['whatsapp_opt' => 0]);
            }
        }
    }

    public function smsMessageStatusHook(Request $request) {
        if ($request->isMethod('post')) {
            Delivery::where('message_id', '=', $request->MessageSid)->update(['status' => strtoupper($request->MessageStatus)]);
        }
    }

}
