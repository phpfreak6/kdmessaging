<?php if ($errors->any()) { ?>
    <script>toastr.options = {"closeButton": true, "timeOut": "0", "extendedTimeOut": "0"};</script>
    <?php foreach ($errors->all() as $error) { ?>
        <script>toastr.error('<?= $error ?>');</script>
        <?php
    }
}
?>















@if ($message = Session::get('success'))
<script>
    swal({
        toast: true,
        timer: 3000,
        showConfirmButton: false,
        type: 'success',
        position: 'top',
        title: '<?php echo $message; ?>',
        width: "400px"
    });
</script>
@endif


@if ($message = Session::get('error'))
<script>
    swal({
        toast: true,
        timer: 3000,
        showConfirmButton: false,
        type: 'error',
        position: 'top',
        title: '<?php echo $message; ?>'
    });
</script>
@endif


@if ($message = Session::get('warning'))
<script>
    swal({
        toast: true,
        timer: 3000,
        showConfirmButton: false,
        type: 'warning',
        position: 'top',
        title: '<?php echo $message; ?>'
    });
</script>
@endif


@if ($message = Session::get('info'))
<script>
    swal({
        toast: true,
        timer: 3000,
        showConfirmButton: false,
        type: 'info',
        position: 'top',
        title: '<?php echo $message; ?>'
    });
</script>
@endif

<!--Toastr JS-->
<script>
    toastr.options = {"closeButton": true, "timeOut": "0", "extendedTimeOut": "0"};
</script>

@if ($message = Session::get('toast_success'))
<script>
    toastr.success('<?= $message; ?>');
</script>
@endif


@if ($message = Session::get('toast_error'))
<script>
    toastr.error('<?= $message; ?>');
</script>
@endif


@if ($message = Session::get('toast_warning'))
<script>
    swal({
        toast: true,
        timer: 3000,
        showConfirmButton: false,
        type: 'warning',
        position: 'top',
        title: '<?php echo $message; ?>'
    });
</script>
@endif


@if ($message = Session::get('toast_info'))
<script>
    swal({
        toast: true,
        timer: 3000,
        showConfirmButton: false,
        type: 'info',
        position: 'top',
        title: '<?php echo $message; ?>'
    });
</script>
@endif


