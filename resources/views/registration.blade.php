<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tasksman</title>

        <!-- Fonts -->
{{--        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Регистрация</h1>
        <form class="col-3 offset-4 border rounded" method="POST" action="{{ route('user.registration') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="col-form-label-lg">Ваш email</label>
                <input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="col-form-label-lg">Пароль</label>
                <input class="form-control" id="password" name="password" type="password" value="" placeholder="Пароль:">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-primary" type="submit" name="sendMe" value="1">Войти</button>
            </div>
        </form>
    </body>
</html>
