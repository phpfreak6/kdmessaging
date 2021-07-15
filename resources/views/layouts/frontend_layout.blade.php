<!DOCTYPE html>
<html>
    <head>
        @include('frontend/templates/header_includes')
        <title>
            @yield('title')
        </title>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('frontend/templates/header')
            @include('frontend/templates/sidebar_menu')
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('frontend/templates/footer')
        </div>
        @include('frontend/templates/footer_includes')
        @include('frontend/templates/flash_messages')
    </body>
</html>
