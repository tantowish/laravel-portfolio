<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/build/assets/app-735a6205.css') }}">
</head>
<body>
    @include('components.navbar')

    @yield('content')

    <script src="{{ asset('/build/assets/app-422dbcc3.js ') }}"></script>
</body>
</html>