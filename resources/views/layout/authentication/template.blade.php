<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Victor Cardenas A. | CRUD Laravel (5.5)</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<div id="container">
    <div id="login" class="form">
        <h1 class="title">@yield('title')</h1>
        @yield('content')
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>