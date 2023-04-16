<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Laravel project - @yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
