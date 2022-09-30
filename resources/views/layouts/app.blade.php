<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('heads/defaultHead')
<body>
    <div id="app">
        @include('navbars/defaultNavbar')
        <main class="py-4">@yield('content')</main>
    </div>
</body>
</html>
