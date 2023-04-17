<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
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
<script>
    $(function () {
        $('#datetime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
        });
    });
</script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</body>
</html>
