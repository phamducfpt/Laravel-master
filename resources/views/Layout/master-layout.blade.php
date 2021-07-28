<!doctype html>
<html class="no-js" lang="en">

@include('Layout.head')
<body>
<!-- Start Left menu area -->
@include('Layout.leftSidebar')
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
@include('Layout.header')
<!----------------Content------------------->
@yield('content')
<!-----------------End Content------------------>
    @include('Layout.footer')
</div>
@yield('js')
@include('Layout.scripts')
</body>

</html>
