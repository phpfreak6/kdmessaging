<meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="icon" type="image/png" href="<?= url('img/favicon.png') ?>"/>
<script src="{{ url('admin/theme/jquery.js') }}"></script>
<script src="{{ url('admin/theme/sweet_alert/sweet_alert.js') }}"></script>
<script src="{{ url('admin/theme/sweet_alert/sweet_alert.css') }}"></script>

<!--Toastr Js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>

<link rel="stylesheet" href="<?= url('admin/theme/components/bootstrap/dist/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?= url('admin/theme/components/font-awesome/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?= url('admin/theme/components/Ionicons/css/ionicons.min.css'); ?>">
<link rel="stylesheet" href="<?= url('admin/theme/dist/css/AdminLTE.min.css'); ?>">
<link rel="stylesheet" href="<?= url('admin/theme/dist/css/skins/_all-skins.min.css'); ?>">
<link rel="stylesheet" href="<?= url('css/custom.css'); ?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<script>
var site_url = '<?php echo url('/'); ?>';
var assets = '<?php echo asset('/'); ?>';
var csrf_token = '<?php echo csrf_token() ?>';
</script>