<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title', 'Panen Lokal - Hidroponik Sayuran')</title>

    {{-- Tailwind --}}
    @vite('resources/css/app.css')
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- External CSS --}}
    @yield('external-css')
</head>
<body>
    <div class="flex h-screen">
        @include('components.navbar-admin')
    
        <div class="w-5/6 bg-gray-100 flex flex-col">
            @include('components.header-admin')
            <main class="px-10 py-6 flex-1 overflow-y-auto">
                <h1 class="text-4xl font-medium text-gray-600">@yield('header-title', "Dashboard")</h1>

                <div class="mt-6"></div>

                @yield('main')
            </main>
        </div>
    </div>
</body>
</html>