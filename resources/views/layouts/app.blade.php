<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('heads/defaultHead')
<body>
    <header>
        @include('navbars/defaultNavbar')
    </header>
    <div id="app">
        <main class="py-4">@yield('content')</main>
    </div>
</body>
</html>
