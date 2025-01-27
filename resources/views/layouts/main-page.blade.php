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
<body class="flex flex-col h-screen">
    @include('components.navbar-main')

    <div class="flex flex-col min-h-screen">
        <main class="pt-[72px] flex-1 overflow-y-auto">
            @yield('main') 
        </main>
        <!-- Footer -->
        <footer class="bg-emerald-600 text-white mt-auto py-4 text-center">
            <p>&copy; 2024 Panen Lokal. All Rights Reserved.</p>
        </footer>
    </div>

    
</body>
</html>