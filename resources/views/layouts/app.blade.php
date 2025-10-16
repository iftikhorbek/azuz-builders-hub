<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Azuz</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="min-h-screen bg-background text-foreground antialiased m-0 p-0">
    <div class="min-h-screen flex flex-col">
        @includeIf('partials.header')

        <main class="flex-1 m-0 p-0">
            @yield('content')
        </main>

        @includeIf('partials.footer')
    </div>

    @stack('modals')
    @stack('scripts')
</body>
</html>
