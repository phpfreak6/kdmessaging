@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">  
    <h1><?= !empty($listNumberArr['list_number_hash']) ? 'Edit List Phone Number' : 'Add List Phone Number' ?></h1> 
    <h5>LIST - <?= $listArr['list_name']; ?></h5>
</section>
<section class="content">   
    <div class="box">       
        <div class="box-body">    
            <?php echo Form::open(['id' => 'list_number_form', 'class' => 'form-horizontal', 'url' => url('/lists/list_number/' . $list_hash), 'method' => 'post']); ?>   
            <?php echo Form::hidden('list_hash', $list_hash, ['id' => 'list_hash']); ?> 
            <?php echo Form::hidden('list_number_hash', $listNumberArr['list_number_hash'], ['id' => 'list_number_hash']); ?> 
            <div class="form-group"> 
                <?php echo Form::label('first_name', 'First Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?> 
                <div class="col-sm-7">   
                    <?php echo Form::text('first_name', $listNumberArr['first_name'], ['placeholder' => 'First Name', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>          
                </div> 
            </div>      
            <div class="form-group">      
                <?php echo Form::label('last_name', 'Last Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?>     
                <div class="col-sm-7">      
                    <?php echo Form::text('last_name', $listNumberArr['last_name'], ['placeholder' => 'Last Name', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?> 
                </div>   
            </div>      
            <div class="form-group">    
                <?php echo Form::label('phone_number', 'Phone Number', ['class' => 'col-sm-3 control-label no-padding-right']); ?>    
                <div class="col-sm-7">           
                    <?php echo Form::tel('phone_number', $listNumberArr['phone_number'], ['placeholder' => 'Phone Number', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?> 
                </div>    
            </div>
            <div class="form-group">      
                <?php echo Form::label('', '', ['class' => 'col-sm-3 control-label no-padding-right']); ?>      
                <div class="col-sm-7">    
                    <label>
                        <input name="send_whatsapp_optin" value="1" type="checkbox"> Send Whatsapp Opt In Notification
                    </label>      
                </div>      
            </div>
            <div class="clearfix form-actions">      
                <div class="col-md-offset-5 col-md-9">     
                    <?php echo Form::submit('Save', ['class' => 'btn btn-sm btn-primary']); ?>  
                    &nbsp; &nbsp; &nbsp;      
                    <a href="<?php echo url('/lists/manage_list_numbers/' . $list_hash); ?>" class="btn btn-sm btn-danger">Cancel</a>    
                </div>     
            </div>    
        </div>
    </div>
</section>
<?php echo Form::close(); ?>
<script>
    function validateListNumberForm() {
        $.validator.addMethod("phoneno", function (phone_number, element) {
            phone_number = phone_number.replace(/\s+/g, "");
            return phone_number.length > 9;
        },
                "Please specify a valid phone number");
        $('#list_number_form').validate({
            errorClass: "help-block",
            errorElement: "label",
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            }, unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            }, rules: {first_name: {
                    required: true,
                },
                last_name: {required: true, },
                phone_number: {required: true, phoneno: true, minlength: 10,
                    remote: {
                        type: 'post',
                        url: site_url + '/lists/checkPhoneNumberExistsInList',
                        dataType: 'json',
                        data: {'_token': csrf_token, 'list_hash': $('#list_hash').val(), 'list_number_hash': $('#list_number_hash').val()
                        }
                    }
                }
            },
            messages: {
                first_name: {required: 'Please Enter First Name', },
                last_name: {required: 'Please Enter Last Name', },
                phone_number: {required: 'Please Enter Phone Number',
                    remote: 'Phone Number Already Exists In This List'}},
            submitHandler: function (form) {
                blockScreen();
                form.submit();
            }});
    }
    $(document).ready(function () {
        validateListNumberForm();
    });</script>
@endsection