<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/user/base/layouts/base.css') }}">
    @include('user.base._shar.read_tags')
    <title>{{ config('app.name') }}</title>
</head>

<body>
    {{-- ヘッダー --}}
    @include('user.base.layouts.header')

    {{-- メイン --}}
    @yield('main')
</body>

</html>