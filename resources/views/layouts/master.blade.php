<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3dliga - @yield('title')</title>
    @section('styles')
        <link rel="stylesheet" href="/css/main.css">
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