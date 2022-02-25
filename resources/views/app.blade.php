<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlataWeb</title>
    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('scripts')
</head>

<body class="h-full">
    <div class="min-h-full">
        @yield('content')
    </div>
</body>

</html>
