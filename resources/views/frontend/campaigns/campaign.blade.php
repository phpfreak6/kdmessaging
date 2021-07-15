@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">  
    <h1>Add Campaign</h1>
</section><section class="content">  
    <div class="row">  
        <div class="col-sm-8">     
            <div class="box">     
                <div class="box-body">     
                    <?= Form::hidden('campaign_redirect_url', $brandArr['campaign_redirect_url'] . "/xxxxxxxxxx", ['id' => 'campaign_redirect_url']) ?>      
                    <?= Form::hidden('brand_code_name', $brand_code_name . '>', ['id' => 'brand_code_name']) ?>      
                    <?php echo Form::open(['id' => 'campaign_form', 'class' => 'form-horizontal', 'url' => url('/campaigns/campaign'), 'method' => 'post']); ?> 
                    <?php echo Form::hidden('campaign_hash', $campaignArr['campaign_hash'], ['id' => 'campaign_hash']); ?>     
                    <div class="form-group">     
                        <?php echo Form::label('campaign_name', 'Campaign Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?>      
                        <div class="col-sm-7">        
                            <?php echo Form::text('campaign_name', $campaignArr['campaign_name'], ['placeholder' => 'Campaign Name', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?> 
                        </div>      
                    </div>           
                    <div class="form-group">        
                        <?= Form::label('campaign_channel', 'Campaign Channel', ['class' => 'col-sm-3 control-label no-padding-right']); ?>  
                        <div class="col-sm-7">   
                            <?= Form::select('campaign_channel', ['SMS' => 'SMS', 'WHATSAPP' => 'WHATSAPP'], $campaignArr['campaign_channel'], ['required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']) ?>   
                        </div>       
                    </div>      
                    <div class="form-group">           
                        <?= Form::label('prefix_brand_code', 'Prefix Message With Brand Code Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?>     
                        <div class="col-sm-7">     
                            <?= Form::select('prefix_brand_code', [1 => 'YES', 0 => 'NO'], $campaignArr['prefix_brand_code'], ['required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']) ?>    
                        </div>      
                    </div>        
                    <div class="form-group">     
                        <?php echo Form::label('message', 'Campaign Message', ['class' => 'col-sm-3 control-label no-padding-right']); ?>  
                        <div class="col-sm-7">    
                            <?php echo Form::textarea('message', $campaignArr['message'], ['placeholder' => 'Message', 'required' => 'required', 'class' => 'input_element form-control col-xs-12 col-sm-12']); ?>      
                        </div>     
                    </div>     
                    <div class="form-group">   
                        <?php echo Form::label('call_to_action_url', 'Campaign Call To Action Webpage [Optional]', ['class' => 'col-sm-3 control-label no-padding-right']); ?>    
                        <div class="col-sm-7">       
                            <?php echo Form::text('call_to_action_url', $campaignArr['call_to_action_url'], ['placeholder' => 'Call To Action URL', 'class' => 'input_element form-control col-xs-12 col-sm-12']); ?> 
                        </div>   
                    </div>    
                    <div class="clearfix form-actions">  
                        <div class="col-sm-offset-4 col-sm-9">   
                            <?php echo Form::submit('Next', ['class' => 'btn btn-sm btn-primary']); ?>    
                            &nbsp; &nbsp; &nbsp;   
                            <a href="<?php echo url('/campaigns/index'); ?>" class="btn btn-sm btn-danger">Cancel</a>   
                        </div> 
                    </div>  
                </div>   
            </div>     
        </div>     
        <div class="col-sm-4">   
            <div class="callout callout-success">
                <h4>Here’s how your message will look when delivered:</h4>  
            </div>    
            <div class="box box-solid">     
                <div class="box-body">    
                    <p style="word-wrap:break-word;">    
                        <span id="brand_code_name_demonstration" class="text-muted"><?= !empty($campaignArr['campaign_hash']) ? $campaignArr['prefix_brand_code'] == 1 ? $brand_code_name . '>' : NULL : $brand_code_name . '>' ?></span>  
                        <span id="message_demonstration" class="text-muted"><?= !empty($campaignArr['campaign_hash']) ? $campaignArr['message'] : NULL ?></span>    
                        <span id="url_domenstration" class="text-muted"><?= !empty($brandArr['campaign_redirect_url']) ? $brandArr['campaign_redirect_url'] . "/xxxxxxxxxx" : NULL ?></span>  
                    </p>    
                </div>   
            </div>   
            <div>    
                <p>Your message is <span id="character_length">    
                        <?php
                        if (!empty($campaignArr['campaign_hash'])) {
                            echo $campaignArr['prefix_brand_code'] == 1 ? strlen($campaignArr['message'] . $brandArr['campaign_redirect_url'] . "/xxxxxxxxxx" . $brand_code_name . '>') : strlen($campaignArr['message'] . $brandArr['campaign_redirect_url'] . "/xxxxxxxxxx/xxxxxxxxxx");
                        } else {
                            echo strlen($brand_code_name . '>' . $brandArr['campaign_redirect_url'] . "/xxxxxxxxxx");
                        }
                        ?>                 
                    </span> characters long and will be delivered in <span id="message_count">     
                        <?php
                        if (!empty($campaignArr['campaign_hash'])) {
                            echo ceil($campaignArr['prefix_brand_code'] == 1 ? strlen($campaignArr['message'] . $brandArr['campaign_redirect_url'] . "/xxxxxxxxxx" . $brand_code_name . '>') / 160 : strlen($campaignArr['message'] . $brandArr['campaign_redirect_url'] . "/xxxxxxxxxx/xxxxxxxxxx") / 160);
                        } else {
                            echo ceil(strlen($brand_code_name . '>' . $brandArr['campaign_redirect_url'] . "/xxxxxxxxxx") / 160);
                        }
                        ?>     
                    </span> SMS message(s).</p> 
                <p>         
                    <strong>[1 SMS is 160 characters long.]</strong>      
                </p>   
            </div>   
        </div>   
    </div>
</section>
<?= Form::close(); ?>
<script>
    function validateCampaignForm() {
        $('#campaign_form').validate({
            errorClass: "help-block",
            errorElement: "label",
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            rules: {
                campaign_name: {
                    required: true,
                    remote: {
                        type: 'post',
                        url: site_url + '/campaigns/checkCampaignNameExists',
                        dataType: 'json',
                        data: {
                            '_token': csrf_token,
                            'campaign_hash': $('#campaign_hash').val()
                        }
                    }
                },
                campaign_channel: {
                    required: true,
                }, message: {
                    required: true,
                },
                call_to_action_url: {
                    url: true
                }
            }, messages: {
                campaign_name: {
                    required: 'Please Enter Campaign Name',
                    remote: 'Campaign Name Already Exists'
                },
                campaign_channel: {
                    required: 'Please Select Campaign Channel'
                },
                message: {
                    required: 'Please Enter Message'
                },
                call_to_action_url: {
                    url: 'Please Enter A Valid URL'
                }
            }, submitHandler: function (form) {
                blockScreen();
                form.submit();
            }});
    }

    function handleShowingMessageLookLike() {
        $('#message').on('input', function () {
            $('#message_demonstration').html($('#message').val());
        });
    }

    function handleMessageCount() {
        $('.input_element').on('input', function () {
            $('#character_length').html(($('#prefix_brand_code').val() == '1' ? $('#brand_code_name').val().length : 0) + $('#message').val().length + $('#campaign_redirect_url').val().length);
            $('#message_count').html(Math.ceil((($('#prefix_brand_code').val() == '1' ? $('#brand_code_name').val().length : 0) + $('#message').val().length + $('#campaign_redirect_url').val().length) / 160));
        });
        $('#prefix_brand_code').change(function () {
            if ($('#prefix_brand_code').val() == '1') {
                $('#brand_code_name_demonstration').html($('#brand_code_name').val());
                $('#character_length').html($('#brand_code_name').val().length + $('#message').val().length + $('#campaign_redirect_url').val().length);
                $('#message_count').html(Math.ceil(($('#brand_code_name').val().length + $('#message').val().length + $('#campaign_redirect_url').val().length) / 160));
            }
            if ($('#prefix_brand_code').val() == '0') {
                $('#brand_code_name_demonstration').html('');
                $('#character_length').html($('#message').val().length + $('#campaign_redirect_url').val().length);
                $('#message_count').html(Math.ceil(($('#message').val().length + $('#campaign_redirect_url').val().length) / 160));
            }
        });
    }
    $(document).ready(function () {
        handleShowingMessageLookLike();
        validateCampaignForm();
        handleMessageCount();
    });
</script>
@endsection