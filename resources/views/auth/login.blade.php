<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
                <a class="nav-link" href="{{ route('login') }}">{{ trans('app.login_btn') }}</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container py-3">
    <h1 class="col-md-4 mx-auto py-3">{{ trans('app.login_tag') }}</h1>
    <form class="col-md-4 mx-auto" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group py-1">
            <label for="title-input">{{ trans('app.username_label') }}</label>
            <input class="form-control" type="text" id="title-input" name="username" value="{{ old('username') }}">
            @error('username')
            <small class="form-text text-muted">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group py-1">
            <label for="password-input">{{ trans('app.password_label') }}</label>
            <input type="password" class="form-control" id="password-input" name="password" value="{{ old('password') }}">
            @error('password')
            <small class="form-text text-muted">{{ $message }}</small>
            @enderror
        </div>
        <div class="py-3">
            <input type="submit" class="btn btn-dark" value={{ trans('app.login_btn') }}>
        </div>
    </form>
</div>
</body>
</html>
