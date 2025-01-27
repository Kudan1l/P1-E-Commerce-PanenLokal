<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title', 'Panen Lokal - Hidroponik Sayuran')</title>

    {{-- Tailwind --}}
    @vite('public/css/app.css')
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- External CSS --}}
    @yield('external-css')

</head>
<body>
    @include('components.navbar-main')

    <main class="pt-[72px] min-h-screen">
        @yield('main')
    </main>

    <!-- Footer -->
    <footer class="bg-emerald-600 text-white py-6 text-center">
        <p>&copy; 2024 Panen Lokal. All Rights Reserved.</p>
    </footer>
</body>
</html>