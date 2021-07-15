@extends('layouts/master_layout')
@section('content')
<section class="content-header">
    <h1>Add User</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <?php echo Form::open(['id' => 'user_form', 'class' => 'form-horizontal', 'url' => url('/admin/users/user'), 'method' => 'post']); ?>
            <?php echo Form::hidden('id', $userArr['id'], ['id' => 'id', 'name' => 'id']); ?>
            <div class="form-group">
                <?php echo Form::label('first_name', 'First Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                <div class="col-sm-7">
                    <?php echo Form::text('first_name', $userArr['first_name'], ['placeholder' => 'First Name', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>   
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('last_name', 'Last Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                <div class="col-sm-7">
                    <?php echo Form::text('last_name', $userArr['last_name'], ['placeholder' => 'Last Name', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>   
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('email', 'Email', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                <div class="col-sm-7">
                    <?php echo Form::email('email', $userArr['email'], ['placeholder' => 'Email', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>   
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('password', 'Password', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                <div class="col-sm-7">
                    <?php echo Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control col-xs-12 col-sm-12']); ?>   
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('brand_id', 'Brand', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                <div class="col-sm-7">
                    <?php echo Form::select('brand_id', $brandListArr, $userArr['brand_id'], ['disabled' => $userArr['admin'] == 1 ? TRUE : FALSE, 'id' => 'brand_id', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>   
                </div>
            </div>
            <div class="form-group">
                <?php echo Form::label('', '', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                <div class="col-sm-7">
                    <label>
                        <input id="admin_checkbox" name="admin" type="checkbox" class="" value="1" <?= !empty($userArr['admin']) ? 'checked' : '' ?>>
                        <span class="lbl"> Admin Access</span>
                    </label>
                </div>
            </div>
            <div class="clearfix form-actions">
                <div class="col-md-offset-5 col-md-9">
                    <?php echo Form::submit('Save', ['class' => 'btn btn-sm btn-primary']); ?>
                    &nbsp; &nbsp; &nbsp;
                    <a href="<?php echo url('/admin/users/index'); ?>" class="btn btn-sm btn-danger">Cancel</a>
                </div>
            </div>
            <?php echo Form::close(); ?>
        </div>
    </div>
</section>
<script>
    function validateUserForm() {
        $('#user_form').validate({
            errorClass: "help-block",
            errorElement: "label",
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            rules: {
                first_name: {
                    required: true,
                },
                last_name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                    remote: {
                        type: 'post',
                        url: site_url + '/admin/users/checkEmailExists',
                        dataType: 'json',
                        data: {
                            '_token': csrf_token,
                            'id': $('#id').val()
                        }
                    }
                },
                brand_id: {
                    required: true,
                }
            },
            messages: {
                first_name: {
                    required: 'Please Enter First Name',
                },
                last_name: {
                    required: 'Please Enter Last Name',
                },
                email: {
                    required: 'Please Enter Email',
                    email: 'Please Enter a Valid Email',
                    remote: 'Email Already Exists',

                },
                brand_id: {
                    required: 'Please Select Brand',
                }
            },
            submitHandler: function (form) {
                blockScreen();
                form.submit();
            }});
    }

    function onClickAdminAccess() {
        $('#admin_checkbox').change(function () {
            if ($('#admin_checkbox').prop('checked') == true) {
                $('#brand_id').attr('disabled', true);
            } else {
                $('#brand_id').attr('disabled', false);
            }
        });
    }
    $(document).ready(function () {
        validateUserForm();
        onClickAdminAccess();
    });
</script>
@endsection


