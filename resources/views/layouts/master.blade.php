<html>
    <head>
        <title>User Management - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
        <a href="#">Home</a>
        <a href="#">Services</a>
        <a href="#">Contact Us</a>
        <a href="#">Help</a>
        <a href="auth/logout">Logout</a>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>