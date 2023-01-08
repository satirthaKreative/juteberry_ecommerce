<!DOCTYPE html>
<html lang="en">

@include('admin.include.head')

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->

    <div class="page-wrapper compact-wrapper" id="pageWrapper">

        @include('admin.include.header')

        <div class="page-body-wrapper sidebar-icon">

            @include('admin.include.sidebar')

            @yield('content')

            @include('admin.include.footer')

        </div>
    </div>

    @include('admin.include.footer-js')

    @yield('jsContent')
</body>

</html>
