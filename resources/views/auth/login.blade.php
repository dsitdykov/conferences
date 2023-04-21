<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ trans('app.project') }}</title>
</head>
<body>
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="title-input">{{ trans('app.username_label') }}</label>
        <input type="text" id="title-input" name="username" value="{{ old('username') }}">
        @error('username')
        <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="password-input">{{ trans('app.password_label') }}</label>
        <input type="password" id="password-input" name="password" value="{{ old('password') }}">
        @error('password')
        <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <input type="submit" value={{ trans('app.login_btn') }}>
    </div>
</form>
</body>
</html>
