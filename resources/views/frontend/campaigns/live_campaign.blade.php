@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Live Campaign</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-body">
                    <?php if ($message = Session::get('live_messages_sent')) { ?>
                        <div class="form-group">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <i class="icon fa fa-check"></i> <?= $message; ?>
                            </div>
                        </div>
                    <?php }
                    ?>
                    <?php echo Form::open(['id' => 'live_campaign_form', 'class' => 'form-horizontal', 'url' => url('/campaigns/live_campaign/' . $campaign_hash), 'method' => 'post']); ?>
                    <?= Form::hidden('brand_code_name', $brandArr->brand_code_name); ?>
                    <div class="form-group">
                        <?php echo Form::label('campaign_name', 'Campaign Name', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                        <div class="col-sm-7">
                            <?= Form::text('', $campaignArr['campaign_name'], ['disabled' => TRUE, 'required' => 'required', 'class' => 'form-control col-xs-12 col-sm-12']); ?>   
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('list_hash', 'List', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                        <div class="col-sm-7">
                            <?= Form::select('list_hash', $campaignListDropdown, '', ['class' => 'form-control col-xs-12 col-sm-12']); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('message_type', 'Message Type', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                        <div class="col-sm-7">
                            <?= Form::select('message_type', ['PROMOTIONAL' => 'PROMOTIONAL', 'TRANSACTIONAL' => 'TRANSACTIONAL'], 'PROMOTIONAL', ['class' => 'form-control col-xs-12 col-sm-12']); ?>   
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo Form::label('', '', ['class' => 'col-sm-3 control-label no-padding-right']); ?>
                        <div class="col-sm-7 text-center">
                            <a href="<?= url('/campaigns/index') ?>" class="btn btn-danger btn-sm">Cancel</a>&nbsp;&nbsp;
                            <?= Form::submit('Send', ['class' => 'btn btn-primary btn-sm']); ?>
                        </div>
                    </div>
                    <?= Form::close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

    function validateLiveCampaignForm() {
        $('#live_campaign_form').validate({
            errorClass: "help-block",
            errorElement: "label",
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            rules: {
                list_hash: {
                    required: true
                }
            },
            messages: {
                list_hash: {
                    required: 'Please Select List To Proceed',
                }
            },
            submitHandler: function (form) {
                blockScreen();
                form.submit();
            }});
    }

    $(document).ready(function () {
        validateLiveCampaignForm();
    });
</script>

@endsection


