<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-DOCUMENT
        {{ Request::is('login') ? 'LOGIN' : '' }}
        {{ Request::is('register') ? 'REGISTER' : '' }}
        {{ Request::is('password.request') ? 'RESET' : '' }}
    </title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('auth.layouts.navbar')

    @yield('container')
    
    @include('auth.layouts.footer')

    @vite('resources/js/app.js')
</body>
</html>
