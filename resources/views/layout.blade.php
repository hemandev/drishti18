<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://use.fontawesome.com/71779d9902.js"></script>
    <link href="css/app.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    @section('header-scripts')
        <script src="js/app.js"></script>
    @show
</head>
<body>
    @yield('content')
</body>
</html>