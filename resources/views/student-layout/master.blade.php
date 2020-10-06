<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- định nghĩa phần thay đổi để đưa style -->
    @yield('styles')
    <title>@yield('title')</title>
</head>

<body>
    <!-- header -->
    <header>
        <h1>@yield('header')</h1>
        </h1>
    </header>
    <!-- end header -->

    @yield('content')

    <!-- footer -->
    <footer>
        <h1>@yield('footer')</h1>
    </footer>
</body>

</html>