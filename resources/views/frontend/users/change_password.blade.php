@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Change Password</h1>
</section>

<section class="content">
    <div class="box">
        <div class="box-body">
            <?php echo Form::open(array('id' => 'change_password_form', 'class' => 'form-horizontal', 'url' => '/change_password', 'method' => 'post')); ?>
            <div class="form-group">
                <?php echo Form::label('new_password', 'New Password', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-6">
                    <?php echo Form::password('new_password', array('minlength' => '6', 'required' => 'required', 'class' => 'form-control col-sm-12', 'placeholder' => 'New Password', 'id' => 'new_password')); ?>
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('confirm_password', 'Confirm Password', array('class' => 'col-sm-3 control-label')); ?>
                <div class="col-sm-6">
                    <?php echo Form::password('confirm_password', array('minlength' => '6', 'required' => 'required', 'class' => 'form-control col-sm-12', 'placeholder' => 'Confirm Password', 'id' => 'confirm_password')); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-5">
                    <center>
                        <a href="<?php echo url('/dashboard'); ?>" class="btn btn-sm btn-danger">Cancel</a>
                        <?php echo Form::submit('Update', ['class' => 'btn btn-sm btn-primary']); ?>
                    </center>
                </div>
            </div>
            <?php echo Form::close(); ?>
        </div>
    </div>
</section>
<script>
    function validateChangePasswordForm() {
        $('#change_password_form').validate({
            errorClass: "help-block",
            errorElement: "label",
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            rules: {
                new_password: "required",
                confirm_password: {
                    equalTo: "#new_password"
                }
            }, messages: {
                new_password: "Enter new password",
                confirm_password: {
                    required: "Please confirm your new password",
                    equalTo: "Password did not match"
                }
            }});
    }

    $(document).ready(function () {
        validateChangePasswordForm();
    });
</script>
@endsection('content')