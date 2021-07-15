<!DOCTYPE html>
<html>
    <head>
        @include('admin/templates/header_includes')
        <title><?= $title ?? '' ?></title>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('admin/templates/header')
            @include('admin/templates/admin_menu')
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('admin/templates/footer')
        </div>
        @include('admin/templates/footer_includes')
        @include('admin/templates/flash_messages')
    </body>
</html>
