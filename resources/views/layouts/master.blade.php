<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            @yield('title', 'Scrabble Calculator')
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        @stack('head')
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1 style="text-align: center;">
                    @yield('title', 'Scrabble Calculator')
                </h1>
            </div>

            <hr />

            <div class="page-header">
                @yield('content')
            <hr />
        </div>
    </body>
</html>
