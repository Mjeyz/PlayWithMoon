<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon-logo.png" type="image/x-icon">
    <title>{{ config('app.name', 'Pay With Moon') }}</title>
    <script async="" src="https://embed.tawk.to/5c04c74c40105007f37aaf1b/default" charset="UTF-8" crossorigin="*"></script>
    <script async="" crossorigin="anonymous" src="https://edge.fullstory.com/s/fs.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Serif|Open+Sans:300,400,600,700,800">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" typle="text/css" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <x-header></x-header>
        @yield('content')
    <x-footer></x-footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>