<!DOCTYPE html>
<html>
    <head>
        @include('frontend/templates/header_includes')
        <title><?= $title ?? '' ?></title>
    </head>
    <body class="hold-transition login-page" style="background:none;">
        <div class="login-box">
            @yield('content') 
        </div>
        @include('frontend/templates/footer_includes')
        @include('frontend/templates/flash_messages')
    </body>
</html>
