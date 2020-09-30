<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper">
        <header class="row">

            <div class="col-12 text-center">
                <h1>@yield('header')</h1>
            </div>
        </header>
        <nav class="col-12 text-center">
            @yield('navbar')
        </nav>
        <div class="row">
            <div class="col-4 offset-4">

                @yield('content')

            </div>
        </div>
        <footer class="col-12 text-center">

            <h1>@yield('footer')</h1>
        </footer>
    </div>
</body>

</html>