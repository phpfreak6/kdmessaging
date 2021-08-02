@extends('layouts/master_layout')
@section('content')
<?php echo Form::open(['id' => 'setting_form', 'class' => 'form-horizontal', 'url' => url('/admin/settings/index'), 'method' => 'post']); ?>
<div class="row">

    <div class="col-sm-12">
        <section class="content-header">
            <h1>Configure Setting Instructions (Whatsapp)</h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-body">
                    <p>On configure settings page, add your master twilio account credentials. You will find them in your twilio console as shown in the screenshot below.</p>
                    <p>
                        <img src="<?= url('img/screenshot.jpg') ?>">
                    </p>
                </div>
            </div>
        </section>
    </div>



    <div class="col-sm-12">
        <section class="content-header">
            <h1>Brand & Twilio Subaccount Setup Instructions (Whatsapp)</h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-body">
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td>
                                    <h5><strong>Step (1)</strong></h5>
                                    <p>
                                        Add brand through brand management module. While adding a brand, please check on the create twilio subaccount.
                                        It will automatically create a subaccount in your twilio account named same as your brand.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><strong>Step (2)</strong></h5>
                                    <p>Now, go to you <a class="btn btn-sm btn-primary" href="https://www.twilio.com/console">Twilio Console</a>
                                        <br>
                                        In the subaccounts section, you will find the subaccount named as of you brand in the app.
                                        Choose type of services you want to use with the subaccount. If you want to use the sandbox mode, choose the appropriate
                                        option there.
                                        <br>
                                        Add whatsapp number to it assigned to you by twilio. Also update your whatsapp phone number in your brand in kdmessaging admin panel. In sandbox mode, twilio by default provides you a whatsapp number to use.
                                        <br>
                                        Now, go to subaccount settings - <a class="btn btn-sm btn-primary" href="https://www.twilio.com/console/sms/whatsapp/sandbox">Subaccount Settings</a> and update
                                        the webhook URL'a as follows:
                                    </p>
                                    <p>
                                        <strong>WHEN A MESSAGE COMES IN</strong>
                                        <br>
                                        URL  - <?= url('/api/webhooks/receiveMessageWebhook') ?><br>
                                        TYPE - HTTP POST 
                                        <br>
                                        <br>
                                        <strong>STATUS CALLBACK URL</strong>
                                        <br>
                                        URL  - <?= url('/api/webhooks/whatsappMessageStatusHook') ?><br>
                                        TYPE - HTTP POST 
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5><strong>Step (3)</strong></h5>
                                    <p>
                                        Follow the instructions as shown in the twilio settings itself based on the mode want to work i.e Sandbox or Live.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>


    <div class="col-sm-12">
        <section class="content-header">
            <h1>PHP Script For Calculating Delivery Clicks</h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-body">
                    <p><code>
                            &lt;?php<br/>
                            $request = curl_init(&#39;<?= url('/api/setDeliveryReport') ?>&#39;);<br />
                            curl_setopt($request, CURLOPT_POSTFIELDS, [&#39;message_info_hash&#39; =&gt; $_GET[&#39;ENCRYPTED_KEY&#39;]]);<br />
                            curl_setopt($request, CURLOPT_RETURNTRANSFER, true);<br />
                            $result = json_decode(curl_exec($request));<br />
                            curl_close($request);<br/>
                            if (!empty($result-&gt;response-&gt;redirect_url)) {<br />
                            &nbsp; &nbsp; header(&quot;Location: &quot; . $result-&gt;response-&gt;redirect_url);<br />
                            &nbsp; &nbsp; die;<br/>
                            }<br/>
                            ?&gt;
                        </code>
                    </p>
                    <p>
                        Create .htaccess file in the same directory where you place the above script and enter following:<br>
                        <br>
                        <code>
                            Options +FollowSymLinks<br>
                            RewriteEngine on<br>
                            RewriteRule ^(.*)/(.*) $1.php?ENCRYPTED_KEY=$2<br>
                        </code>
                    </p>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection


