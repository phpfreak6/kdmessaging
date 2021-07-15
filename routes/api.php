<?php

use Illuminate\Http\Request;

Route::post('/setDeliveryReport', 'DeliveryClickController@setDeliveryReport');


/* Twilio SMS Messages Webhooks */
Route::post('/webhooks/smsMessageStatusHook', 'WebHookController@smsMessageStatusHook');



Route::post('/webhooks/whatsappMessageStatusHook', 'WebHookController@whatsappMessageStatusHook');
Route::post('/webhooks/receiveMessageWebhook', 'WebHookController@receiveMessageWebhook');

