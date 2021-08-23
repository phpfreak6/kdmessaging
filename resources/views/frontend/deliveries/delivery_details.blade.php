@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Delivery Details</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-striped table-responsive">
                <tr>
                    <td><span class="text-primary">Brand</span></td>
                    <td><?= $deliveryArr['brand']['brand_name'] ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Campaign</span></td>
                    <td><?= $deliveryArr['campaign']['campaign_name'] ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Phone Number</span></td>
                    <td><?= $deliveryArr['phone_number'] ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Message</span></td>
                    <td><?= $deliveryArr['message'] ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Time</span></td>
                    <td><?= $deliveryArr['delivery_time'] ?: 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Type</span></td>
                    <td><?= $deliveryArr['type'] == 'live' ? 'Live' : 'Test'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Status</span></td>
                    <td><?= $deliveryArr['status']; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Error Message</span></td>
                    <td><?= $deliveryArr['status_message'] ?? 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Message ID</span></td>
                    <td><?= $deliveryArr['message_id'] ?: 'N/A'; ?></td>
                </tr>
            </table>
            &nbsp;
            <div class="col-sm-12 text-center">
                <a href="<?= url('/deliveries/index') ?>" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>
    </div>
</section>
@endsection


