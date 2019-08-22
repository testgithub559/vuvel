<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.css')
    @yield('css')
</head>

<body class="">
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    @include('layouts.partials.topbar')
</nav>
<div class="main-content">
    <!-- Navbar -->
@include('layouts.partials.navbar')
<!-- End Navbar -->
    <!-- Header -->
    @include('layouts.partials.header')
    <div class="container-fluid mt--7">
    @yield('content')
    <!-- Footer -->
        @include('layouts.partials.footer')
    </div>
</div>
@include('layouts.partials.script')
@yield('js')
</body>

</html>
