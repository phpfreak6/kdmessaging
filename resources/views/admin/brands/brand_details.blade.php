@extends('layouts/master_layout')
@section('content')
<section class="content-header">
    <h1>Brand Details</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-striped table-responsive">
                <tr>
                    <td><span class="text-primary">Name</span></td>
                    <td><?= $brandArr->brand_name ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Code Name</span></td>
                    <td><?= $brandArr->brand_code_name ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">AWS Long/Short Code</span></td>
                    <td><?= $brandArr->short_code ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Daily Sending Limit</span></td>
                    <td><?= $brandArr->daily_sending_limit ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Monthly Sending Limit</span></td>
                    <td><?= $brandArr->monthly_sending_limit ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Campaign Redirect Url</span></td>
                    <td><?= $brandArr->campaign_redirect_url ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Account ID</span></td>
                    <td><?= $brandArr->sub_account_id; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Authentication Token</span></td>
                    <td><?= $brandArr->sub_account_token; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Phone Number</span></td>
                    <td><?= $brandArr->whatsapp_phone_number; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Whatsapp OPT IN Message</span></td>
                    <td><?= $brandArr->whatsapp_optin_message; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Whatsapp OPT OUT Message</span></td>
                    <td><?= $brandArr->whatsapp_optout_message ?: 'N/A'; ?></td>
                </tr>
            </table>
            &nbsp;
            <div class="col-sm-12 text-center">
                <a href="<?= url('admin/brands/index') ?>" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>
    </div>
</section>
@endsection


