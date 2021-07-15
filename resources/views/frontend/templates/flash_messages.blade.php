<!--Toastr JS-->
<script>
    toastr.options = {"closeButton": true, "timeOut": "0", "extendedTimeOut": "0"};
</script>

@if ($message = Session::get('success'))
<script>
    toastr.success("<?= $message; ?>");
</script>
@endif

@if ($message = Session::get('error'))
<script>
    toastr.error("<?= $message; ?>");
</script>
@endif

@if ($message = Session::get('warning'))
<script>
    toastr.warning("<?= $message; ?>");
</script>
@endif

@if ($message = Session::get('info'))
<script>
    toastr.info("<?= $message; ?>");
</script>
@endif

@if ($message = Session::get('toast_success'))
<script>
    toastr.success("<?= $message; ?>");
</script>
@endif

@if ($message = Session::get('toast_error'))
<script>
    toastr.error("<?= $message; ?>");
</script>
@endif

@if ($message = Session::get('toast_warning'))
<script>
    toastr.warning("<?= $message; ?>");
</script>
@endif

@if ($message = Session::get('toast_info'))
<script>
    toastr.info("<?= $message; ?>");
</script>
@endif


