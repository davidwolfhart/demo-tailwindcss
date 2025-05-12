<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', config('app.name'))</title>

    @stack('links')

    {{-- Base CSS via Vite --}}
    @vite('resources/css/app.css')

    {{-- Page-specific CSS --}}
    @stack('styles')
</head>

<body class="dark:bg-slate-900">

    @yield('content')

    {{-- Base JS via Vite --}}
    @vite('resources/js/app.js')

    {{-- Page-specific scripts --}}
    @stack('scripts')
</body>

</html>
