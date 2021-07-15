@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Manage List</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <?php echo Form::open(['id' => 'list_form', 'class' => 'form-horizontal', 'url' => url('/lists/list'), 'method' => 'post']); ?>
            <?php echo Form::hidden('list_hash', $listArr['list_hash'], ['id' => 'list_hash']); ?>
            <div class="form-group">
                <?php echo Form::label('list_name', 'List Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                <div class="col-sm-7">
                    <?php echo Form::text('list_name', $listArr['list_name'], ['placeholder' => 'List Name', 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>   
                </div>
            </div>
            <div class="clearfix form-actions">
                <div class="col-md-offset-5 col-md-9">
                    <?php echo Form::submit('Save', ['class' => 'btn btn-sm btn-primary']); ?>
                    &nbsp; &nbsp; &nbsp;
                    <a href="<?php echo url('/lists/index'); ?>" class="btn btn-sm btn-danger">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo Form::close(); ?>
<script>
    function validateListForm() {
        $('#list_form').validate({
            errorClass: "help-block",
            errorElement: "label",
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            rules: {
                list_name: {
                    required: true,
                    remote: {
                        type: 'post',
                        url: site_url + '/lists/checkListNameExists',
                        dataType: 'json',
                        data: {
                            '_token': csrf_token,
                            'list_hash': $('#list_hash').val()
                        }
                    }
                }
            },
            messages: {
                list_name: {
                    required: 'Please Enter List Name',
                    remote: 'List Name Already Exists'
                }
            },
            submitHandler: function (form) {
                blockScreen();
                form.submit();
            }});
    }
    $(document).ready(function () {
        validateListForm();
    });
</script>
@endsection


