<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Victor Cardenas A. | Administrador</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div id="main" class="expand">
    <aside>
        @include('layout.administrator.partials.header')
        @include('layout.administrator.partials.nav')
    </aside>

    <section>
        <div id="title">
            <h1><i class="@yield('icon', 'fas fa-home') fa-fw"></i> @yield('title', 'Bienvenido')</h1>

            @hasSection('actions')
                <div id="actions">
                    @yield('actions')
                </div>
            @endif
        </div>
        <div id="content"></div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>