<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Blog made with laravel.">
    <meta name="author" content="Donny van Walsem">

    <title>Aurorus</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
<div id="container">
    <header>
        @include('layouts.nav')

        @if($flash = session('message'))
            <div id="flash-message" class="alert alert-success" role="alert">
                {{ $flash }}
            </div>
        @endif
    </header>

    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-12 blog-main">
                @yield('content')
            </div>
        </div>
    </main>
</div>

@include('layouts.footer')

</body>
</html>