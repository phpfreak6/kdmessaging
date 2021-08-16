@extends('layouts/master_layout')@section('content')

<section class="content-header"> 
    <h1>Add Brand</h1>
</section>
<section class="content">  
    <div class="box">   
        <div class="box-body">     
            <?php echo Form::open(['files' => TRUE, 'id' => 'brand_form', 'class' => 'form-horizontal', 'url' => url('/admin/brands/brand'), 'method' => 'post']); ?>   
            <?php echo Form::hidden('id', $brandArr['id'], ['id' => 'id', 'name' => 'id']); ?>   
            <div class="form-group">   
                <?php echo Form::label('brand_name', 'Brand Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?>   
                <div class="col-sm-7">         
                    <?php echo Form::text('brand_name', $brandArr['brand_name'], ['placeholder' => 'Brand Name', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>  
                </div>    
            </div>     
            <div class="form-group">    
                <?php echo Form::label('brand_code_name', 'Brand Code Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?>     
                <div class="col-sm-7">       
                    <?php echo Form::text('brand_code_name', $brandArr['brand_code_name'], ['placeholder' => 'Brand Code Name', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>     
                </div>      
            </div>      
            <div class="form-group">    
                <?php echo Form::label('short_code', 'Short/Long Code', ['class' => 'col-sm-3 control-label no-padding-right']); ?>       
                <div class="col-sm-7">   
                    <?php echo Form::text('short_code', $brandArr['short_code'], ['placeholder' => 'Short/Long Code', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?> 
                </div>      
            </div>      
            <div class="form-group">   
                <?php echo Form::label('daily_sending_limit', 'Daily Sending Limit', ['class' => 'col-sm-3 control-label no-padding-right']); ?>   
                <div class="col-sm-7">     
                    <?php echo Form::text('daily_sending_limit', $brandArr['daily_sending_limit'], ['placeholder' => 'Daily Sending Limit', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>   
                </div>    
            </div>    
            <div class="form-group">   
                <?php echo Form::label('monthly_sending_limit', 'Monthly Sending Limit', ['class' => 'col-sm-3 control-label no-padding-right']); ?> 
                <div class="col-sm-7"> 
                    <?php echo Form::text('monthly_sending_limit', $brandArr['monthly_sending_limit'], ['placeholder' => 'Monthly Sending Limit', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>     
                </div>   
            </div>  
            <div class="form-group">     
                <?php echo Form::label('campaign_redirect_url', 'Campaign Redirect PHP Webpage', ['class' => 'col-sm-3 control-label no-padding-right']); ?>  
                <div class="col-sm-7">     
                    <?php echo Form::text('campaign_redirect_url', $brandArr['campaign_redirect_url'], ['placeholder' => 'Campaign Redirect PHP Webpage', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>    
                </div> 
            </div>       
            <div class="form-group">      
                <?php echo Form::label('brand_logo_file', 'Brand Logo', ['class' => 'col-sm-3 control-label no-padding-right']); ?>      
                <div class="col-sm-7">    
                    <?= Form::file('brand_logo_file', ['class' => 'col-xs-12 col-sm-12 form-control-file btn btn-primary btn-sm']) ?> 
                    <?php if (!empty($brandArr['brand_logo_file'])) { ?>        
                        <a style="margin-top:10px;" target="_blank" href="<?= url("uploads/brands/logos/" . $brandArr['id'] . '/' . $brandArr['brand_logo_file']) ?>" class="text-warning">[Click Here To View Present Logo]</a>  
                    <?php }
                    ?>      
                </div>      
            </div>


            <div class="form-group">     
                <?= Form::label('', '', ['class' => 'col-sm-3 control-label no-padding-right']); ?>  
                <div class="col-sm-7">
                    <h4 class="col-xs-12 col-sm-12 text-center"><strong>Whatsapp Settings</strong></h4>   
                </div> 
            </div> 

            <div class="form-group">     
                <?= Form::label('whatsapp_phone_number', 'Whatsapp Phone Number', ['class' => 'col-sm-3 control-label no-padding-right']); ?>  
                <div class="col-sm-7">     
                    <?= Form::text('whatsapp_phone_number', $brandArr['whatsapp_phone_number'], ['placeholder' => 'Whatsapp Phone Number', 'class' => 'form-control col-xs-12 col-sm-12']); ?>    
                </div> 
            </div>


            <div class="form-group">     
                <?= Form::label('whatsapp_optin_message', 'Whatsapp Opt In Message (First Message Before Opt In)', ['class' => 'col-sm-3 control-label no-padding-right']); ?>  
                <div class="col-sm-7">     
                    <?= Form::textarea('whatsapp_optin_message', $brandArr['whatsapp_optin_message'] ?? "send 'OPT IN' for receiving message", ['rows' => 5, 'placeholder' => 'Whatsapp Opt In Message', 'class' => 'form-control col-xs-12 col-sm-12']); ?>    
                </div> 
            </div>  
            <div class="form-group">     
                <?= Form::label('whatsapp_optout_message', 'Whatsapp Opt Out Message (Last Message After Opting Out)', ['class' => 'col-sm-3 control-label no-padding-right']); ?>  
                <div class="col-sm-7">     
                    <?= Form::textarea('whatsapp_optout_message', $brandArr['whatsapp_optout_message'] ?? "send 'OPT OUT' for stop receiving message", ['rows' => 5, 'placeholder' => 'Whatsapp Opt Out Message', 'class' => 'form-control col-xs-12 col-sm-12']); ?>    
                </div> 
            </div>


            <div class="form-group">      
                <?php echo Form::label('', '', ['class' => 'col-sm-3 control-label no-padding-right']); ?>      
                <div class="col-sm-7">    
                    <label>
                        <input name="twilio_sub_account" value="1" type="checkbox" <?= !empty($brandArr['sub_account_id']) ? 'disabled' : ''; ?>> Create Twilio Sub-Account
                    </label>      
                </div>      
            </div>
            <div class="clearfix form-actions">      
                <div class="col-md-offset-5 col-md-9">       
                    <?php echo Form::submit('Save', ['class' => 'btn btn-sm btn-primary']); ?>  
                    &nbsp; &nbsp; &nbsp;             
                    <a href="<?php echo url('/admin/brands/index'); ?>" class="btn btn-sm btn-danger">Cancel</a>        
                </div>       
            </div>     
        </div>   
    </div>
</section>
<?php echo Form::close(); ?>
<script>
    function validateBrandForm() {
        $('#brand_form').validate({
            errorClass: "help-block",
            errorElement: "label",
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            rules: {
                campaign_redirect_url: {
                    required: true,
                    url: true
                }, brand_name: {
                    required: true,
                    remote: {
                        type: 'post',
                        url: site_url + '/admin/brands/checkBrandTitleExists',
                        dataType: 'json',
                        data: {
                            '_token': csrf_token,
                            'id': $('#id').val()
                        }
                    }
                }, brand_code_name: {
                    required: true,
                },
                short_code: {
                    required: true,
                },
                daily_sending_limit: {
                    required: true,
                    digits: true
                },
                monthly_sending_limit: {
                    required: true,
                    digits: true
                }
            }, messages: {
                campaign_redirect_url: {
                    required: 'Please Enter Redirect URL',
                    url: 'Please Enter Valid URL'
                },
                brand_name: {
                    required: 'Please Enter Brand Name',
                    remote: 'Brand Name Already Exists'
                },
                brand_code_name: {
                    required: 'Please Enter Brand Code Name',
                },
                short_code: {
                    required: 'Please Enter Short Code',
                },
                daily_sending_limit: {
                    required: 'Please Enter Daily Sending Limit',
                    digits: 'Please Enter Valid Values'
                },
                monthly_sending_limit: {
                    required: 'Please Enter Monthly Sending Limit',
                    digits: 'Please Enter Valid Values'
                }
            }, submitHandler: function (form) {
                blockScreen();
                form.submit();
            }});
    }

    $(document).ready(function () {
        validateBrandForm();
    });
</script>
@endsection