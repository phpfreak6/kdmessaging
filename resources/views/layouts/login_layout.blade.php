<!DOCTYPE html>
<html>
    <head>
        @include('admin/templates/header_includes')
        <title><?= $title ?? '' ?></title>
    </head>
    <body class="hold-transition login-page"  style="background:none;">
        <div class="login-box">
            @yield('content') 
        </div>
        @include('admin/templates/footer_includes')
        @include('admin/templates/flash_messages')
    </body>
</html>
