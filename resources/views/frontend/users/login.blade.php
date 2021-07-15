@extends('layouts/frontend_login_layout')
@section('content')
<style>
    .help-block{
        color:#d16e6c !important;
    }
</style>
<div class="login-logo">
</div>
<div class="login-box-body">
    <p class="login-box-msg">
        <img src="<?= url('img/logo-login.png'); ?>" style="height: 60px;">
    </p>
    <?php echo Form::open(array('class' => '', 'url' => '/login', 'method' => 'post', 'id' => 'login_form', 'role' => 'form')); ?>
    <div class="form-group has-feedback">
        <?php echo Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'Email')); ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <?php echo Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')); ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
    </div>
    <?php echo Form::close(); ?>
</div>
<script>
    function validateLoginForm() {
        $('#login_form').validate({
            errorClass: "help-block",
            errorElement: "label",
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            submitHandler: function (form) {
                blockScreen();
                form.submit();
            },
            rules: {
                email: "required",
                password: "required"
            },
            messages: {
                email: "Please Enter Email",
                password: "Please Enter Password"
            }
        });
    }
    $(document).ready(function () {
        validateLoginForm();
    });
</script>
@endsection('content')