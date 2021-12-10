<?php

Route::get('/test_message', 'UserController@test_message');
Route::get('/test', 'CampaignController@test');


Route::get('run-command', function () {
    \Artisan::call('pinpoint:sendsmsmessages');
    exit("Command executed successfully");
});


/* ADMIN ROUTES */

Route::match(['get', 'post'], '/admin', 'admin\UserController@login');
Route::get('/admin', 'admin\UserController@login');
Route::post('/admin', 'admin\UserController@checkUserlogin');

Route::group(['middleware' => 'admin'], function () {
    ## Manage Cron Requests
    Route::get('admin/cron-requests/index', 'admin\CronRequestController@index');
    Route::post('admin/cron-requests/getCronRequestsDatatable', 'admin\CronRequestController@getCronRequestsDatatable');

    ## Manage Brands
    Route::get('/admin/brands/index', 'admin\BrandController@index');
    Route::post('/admin/brands/getBrandsDatatable', 'admin\BrandController@getBrandsDatatable');
    Route::match(['get', 'post'], '/admin/brands/brand/{brand_id?}', 'admin\BrandController@brand');
    Route::post('/admin/brands/deleteBrand', 'admin\BrandController@deleteBrand');
    Route::post('/admin/brands/checkBrandTitleExists', 'admin\BrandController@checkBrandTitleExists');
    Route::get('/admin/brands/brand-details/{brand_id}', 'admin\BrandController@brandDetails');

    ## Manage Users
    Route::get('/admin/users/index', 'admin\UserController@index');
    Route::match(['get', 'post'], '/admin/users/user/{user_id?}', 'admin\UserController@user');
    Route::post('/admin/users/deleteUser', 'admin\UserController@deleteUser');
    Route::post('/admin/users/getUsersDatatable', 'admin\UserController@getUsersDatatable');
    Route::post('/admin/users/checkEmailExists', 'admin\UserController@checkEmailExists');
    Route::get('/admin/dashboard', 'admin\UserController@dashboard');
    Route::get('/admin/users/logout', 'admin\UserController@logout');
    Route::match(['get', 'post'], '/admin/users/change_password', 'admin\UserController@changePassword');

    ## Manage Settings
    Route::match(['get', 'post'], '/admin/settings/index', 'admin\SettingController@index');

    ## Important Instructions
    Route::get('/admin/important-instructions', 'admin\SettingController@importantInstructions');
});

/* USER ROUTES */

Route::match(['get', 'post'], '/login', 'UserController@login');

Route::group(['middleware' => 'user'], function () {

    ## User Routes
    Route::get('/dashboard', 'UserController@dashboard');
    Route::get('/', 'UserController@dashboard');
    Route::get('/logout', 'UserController@logout');
    Route::match(['get', 'post'], '/change_password', 'UserController@changePassword');
    Route::post('/users/changeBrand', 'UserController@changeBrand');

    ## Manage Lists
    Route::get('/lists/index', 'ListController@index');
    Route::post('/lists/getListsDatatable', 'ListController@getListsDatatable');
    Route::post('/lists/checkListNameExists', 'ListController@checkListNameExists');
    Route::match(['get', 'post'], '/lists/list/{list_id?}', 'ListController@modify_list');
    Route::post('/lists/deleteList', 'ListController@deleteList');

    ## Manage List Numbers
    Route::get('/lists/manage_list_numbers/{encrypted_list_id}', 'ListController@manage_list_numbers');
    Route::post('/lists/getListNumbersDatatable', 'ListController@getListNumbersDatatable');
    Route::post('/lists/checkPhoneNumberExistsInList', 'ListController@checkPhoneNumberExistsInList');
    Route::post('/lists/deleteListPhoneNumber', 'ListController@deleteListPhoneNumber');
    Route::post('/lists/uploadExcelFile', 'ListController@uploadExcelFile');
    Route::match(['get', 'post'], '/lists/list_number/{list_hash}/{list_number_hash?}', 'ListController@list_number');

    ## Manage Campaigns
    Route::get('/campaigns/index', 'CampaignController@index');
    Route::get('campaigns/duplicate_campaign/{campaign_hash}', 'CampaignController@duplicateCampaign');
    Route::post('/campaigns/getCampaignsDatatable', 'CampaignController@getCampaignsDatatable');
    Route::post('/campaigns/deleteCampaign', 'CampaignController@deleteCampaign');
    Route::post('/campaigns/checkCampaignNameExists', 'CampaignController@checkCampaignNameExists');
    Route::match(['get', 'post'], '/campaigns/campaign/{campaign_hash?}', 'CampaignController@campaign');
    Route::match(['get', 'post'], '/campaigns/test_campaign/{campaign_hash}', 'CampaignController@test_campaign');
    Route::match(['get', 'post'], '/campaigns/live_campaign/{campaign_hash}', 'CampaignController@live_campaign');

    ## Manage Deliveries
    Route::get('/deliveries/index', 'DeliveryController@index');
    Route::post('/deliveries/getDeliveriesDatatable', 'DeliveryController@getDeliveriesDatatable');
    Route::get('/deliveries/delivery_details/{delivery_hash}', 'DeliveryController@delivery_details');
    Route::post('/deliveries/deleteDelivery', 'DeliveryController@deleteDelivery');

    ## Manage Delivery Clicks
    Route::get('/delivery_clicks/index', 'DeliveryClickController@index');
    Route::post('/delivery_clicks/getDeliveryClicksDatatable', 'DeliveryClickController@getDeliveryClicksDatatable');
    Route::post('/delivery_clicks/deleteDeliveryClick', 'DeliveryClickController@deleteDeliveryClick');

    ## Incoming Messages Listing
    Route::get('incoming-messages/index', 'IncomingMessageController@index');
    Route::post('incoming-messages/getIncomingMessagesDatatable', 'IncomingMessageController@getIncomingMessagesDatatable');
    Route::get('incoming-messages/incoming-message-detail/{incoming_message_id}', 'IncomingMessageController@viewMessageDetail');
});

Route::get('/testing_whatsapp', 'CampaignController@testing_whatsapp');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
