<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'AZUZ'))</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="min-h-screen bg-background text-foreground antialiased">
    <div class="min-h-screen flex flex-col">
        @includeIf('partials.header')

        <main class="flex-1">
            @yield('content')
        </main>

        @includeIf('partials.footer')
    </div>

    @stack('modals')
    @stack('scripts')
</body>
</html>
