<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App</title>
</head>
<body>
    <div style="background: aqua"><h1>@yield('header')</h1></div>
    <div style="background: green"><h1>@yield('msg')</h1></div>
    <div style="background: red"><h1>@yield('content')</h1></div>
    <div style="background: yellow"><h1>@yield('footer')</h1></div>
</body>
</html>