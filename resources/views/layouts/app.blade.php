<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', config('app.name'))</title>

    {{-- Base CSS via Vite --}}
    @vite('resources/css/app.css')

    {{-- Page-specific CSS --}}
    @stack('styles')
</head>

<body class="bg-gray-100 text-gray-900 font-sans">
    {{-- Optional header/navbar --}}
    @include('partials.navbar')

    {{-- Optional banner/hero header --}}
    @yield('header')

    {{-- Main content area --}}
    <main class="min-h-screen py-8 px-4">
        @yield('content')
    </main>

    {{-- Optional footer --}}
    @include('partials.footer')

    {{-- Base JS via Vite --}}
    @vite('resources/js/app.js')

    {{-- Page-specific scripts --}}
    @stack('scripts')
</body>

</html>
