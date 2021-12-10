@extends('layouts/frontend_layout')
@section('content')
<section class="content-header">
    <h1>Message Details</h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered table-striped table-responsive">
                <tr>
                    <td><span class="text-primary">Message ID</span></td>
                    <td><?= $incomingMessageArr->message_id ?? 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Platform</span></td>
                    <td><?= $incomingMessageArr->platform ?? 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Segments</span></td>
                    <td><?= $incomingMessageArr->segments ?? 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">From</span></td>
                    <td><?= $incomingMessageArr->from_phone ?? 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">To</span></td>
                    <td><?= $incomingMessageArr->to_phone ?? 'N/A'; ?></td>
                </tr>
                <tr>
                    <td><span class="text-primary">Body</span></td>
                    <td>
                        <textarea style="resize: none;" readonly><?= $incomingMessageArr->body ?? ''; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td><span class="text-primary">File</span></td>
                    <td><?= !empty($incomingMessageArr->file_url) ?
                            '<a target="_blank" title="Download" class="btn btn-sm btn-primary" href="' . $incomingMessageArr->file_url . '">Download</a>'
                            :
                            'N/A'; ?></td>
                </tr>
            </table>
            &nbsp;
            <div class="col-sm-12 text-center">
                <a href="<?= url('incoming-messages/index') ?>" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>
    </div>
</section>
@endsection