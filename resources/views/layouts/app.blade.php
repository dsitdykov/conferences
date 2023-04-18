<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <title>Laravel project - @yield('title')</title>
</head>
<body>
<div>
    <header class="m-10">
{{--        @guest--}}
{{--            <a href="{{ route('login') }}">Login</a>--}}
{{--        @else--}}
{{--            <a href="{{ route('logout') }}" id="logout-btn">Logout ({{ auth()->user()->name }})</a>--}}
{{--            <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">--}}
{{--                @csrf--}}
{{--            </form>--}}
{{--        @endguest--}}
        @guest
            <a href="{{ route('login') }}">Login</a>
        @else
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                ({{ auth()->user()->name }})</a>
            <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
                @csrf
            </form>
        @endguest
    </header>
    <main class="py-3">
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </main>
</div>
</body>
</html>
