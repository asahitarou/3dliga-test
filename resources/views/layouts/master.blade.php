<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3dliga - @yield('title')</title>
    @section('styles')
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    @show
</head>
<body>
    @yield('content')
    @section('scripts')
        <script src="/js/common.js"></script>
        <script src="/js/main.js"></script>
    @show
</body>
</html>