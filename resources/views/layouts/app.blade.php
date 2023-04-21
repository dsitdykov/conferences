<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>{{ trans('app.project') }}</title>
</head>
<body>
<nav class="navbar py-2 px-5 navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('conferences.index') }}">{{ trans('app.home') }}</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ trans('app.login_btn') }}</a>
                @else
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ trans('app.logout_btn') }}
                        ({{ auth()->user()->name }})</a>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form" class="d-none">
                        @csrf
                    </form>
                @endguest
            </li>
        </ul>
    </div>
</nav>
@if(session('status'))
    <div class="message">{{ session('status') }}</div>
@endif
<div class="container py-3">
    @yield('content')
</div>
</body>
</html>
