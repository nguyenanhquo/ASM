<!DOCTYPE html>
<html lang="en-us">

<head>
    @include('client.layout.partials.head')
</head>

<body>
    <!-- navigation -->
    <header class="navigation fixed-top">
        @include('client.layout.partials.nav')
    </header>
    <!-- /navigation -->

    <!-- start of banner -->
    <div class="banner text-center">
        @include('client.layout.partials.banner')
    </div>
    <!-- end of banner -->
    @yield('content')

    <footer class="footer">
        @include('client.layout.partials.footer')
    </footer>


    <!-- JS Plugins -->
    @include('client.layout.partials.js')
</body>

</html>
