<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

@include('admin.partials._head')

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">

    @include('admin.partials._header')

    <div class="page-container">

        @include('admin.partials._sidebar')

        <div class="page-content-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
    </div>

    @include('admin.partials._footer')
    @include('admin.partials._javascript')
    @yield('javascript')
    @include ('admin.partials._modalNotification')

</body>

</html>