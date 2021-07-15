@extends('layouts/master_layout')
@section('content')
<?php echo Form::open(['id' => 'setting_form', 'class' => 'form-horizontal', 'url' => url('admin/settings/index'), 'method' => 'post']); ?>
<div class="row">

    <div class="col-sm-12">
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <strong>Twilio Configuration</strong>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <?php echo Form::label('company_name', 'Company Name', ['class' => 'col-sm-4 control-label no-padding-right']); ?>
                                <div class="col-sm-7">
                                    <?php echo Form::text('company_name', $settingArr['company_name'], ['placeholder' => 'Company Name', 'class' => 'form-control col-xs-12 col-sm-12 ']); ?>   
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('account_id', 'Account ID', ['class' => 'col-sm-4 control-label no-padding-right']); ?>
                                <div class="col-sm-7">
                                    <?php echo Form::text('account_id', $settingArr['account_id'], ['placeholder' => 'Account ID', 'class' => 'form-control col-xs-12 col-sm-12 ']); ?>   
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('authentication_token', 'Authentication Token', ['class' => 'col-sm-4 control-label no-padding-right']); ?>
                                <div class="col-sm-7">
                                    <?php echo Form::text('authentication_token', $settingArr['authentication_token'], ['placeholder' => 'Authentication Token', 'class' => 'form-control col-xs-12 col-sm-12 ']); ?>   
                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('whatsapp_phone_number', 'Phone Number', ['class' => 'col-sm-4 control-label no-padding-right']); ?>
                                <div class="col-sm-7">
                                    <?php echo Form::text('whatsapp_phone_number', $settingArr['whatsapp_phone_number'], ['placeholder' => 'e.g. +14155238886', 'class' => 'form-control col-xs-12 col-sm-12 ']); ?>   
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label"></label>
                                <div class="col-sm-7 text-center">
                                    <a href="<?= url('admin/dashboard') ?>" class="btn btn-danger">Back</a>
                                    &nbsp;&nbsp;
                                    <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>
                                </div>
                            </div> 
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php echo Form::close(); ?>
<script>
    function validateSettingForm() {
        $('#setting_form').validate({
            errorClass: "help-block",
            errorElement: "label",
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            rules: {
                company_name: {
                    required: true,
                },
                account_id: {
                    required: true,
                },
                authentication_token: {
                    required: true,
                },
                whatsapp_phone_number: {
                    required: true,
                },

            },
            messages: {
                company_name: {
                    required: 'Please Enter Company Name',
                }
            },
            submitHandler: function (form) {
                blockScreen();
                form.submit();
            }});
    }
    $(document).ready(function () {
        validateSettingForm();
    });
</script>
@endsection


