<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/base/layouts/base.css') }}">
    @include('base._shar.read_tags')
    <title>{{ config('app.name') }}</title>
</head>

<body>
    {{-- ヘッダー --}}
    @include('base.layouts.header')

    {{-- メイン --}}
    @yield('main')
</body>

</html>