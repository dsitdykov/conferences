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
<div class="container">
    <header class="m-10">
        @guest
            <a href="{{ route('login') }}">{{ trans('app.login_btn') }}</a>
        @else
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ trans('app.logout_btn') }}
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
