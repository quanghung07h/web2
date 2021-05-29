<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
        @include('header')
        
        <div class="container">
            @yield('content')
        </div>
        @include('footer')
    </body>
</html>