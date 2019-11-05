<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="container">
    <nav class="flex items-center justify-between">
        <h1><a href="/">Jigsaw</a></h1>
        <div class="flex items-center">
        <div class="mr-4"> <a href="/about"></a>About</div>
        <div class="mr-4"> <a href="/team"></a>Team</div>
        </div>
    </nav>
        @yield('body')
    </body>
</html>
