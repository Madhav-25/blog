<!doctype html>
<html lang="en">
<head>
    @include('partials._head')
    @yield('styles')
</head>
    <body>
        @include('partials._nav')
        <div class="container">
            @yield('content')
            <hr>
            @include('partials._footer')
        </div>
        @include('partials._javascript')
        @yield('scripts')
    </body>
</html>