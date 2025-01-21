<nav x-data="{ menu: false }">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Hamburger menu (Mobile) -->
        <button @click="menu = !menu" class="text-2xl lg:hidden order-1" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>
        <span class="text-2xl font-semibold text-emerald-700 order-2">Panen Lokal</span>

        <!-- Nav Items (Desktop) -->
        <ul class="hidden lg:flex flex-row justify-center gap-4 order-2 font-medium">
            <li class="text-gray-900">
                <a href="">Home</a>
            </li>
            <li class="text-gray-900 opacity-60">
                <a href="">Product</a>
            </li>
            <li class="text-gray-900 opacity-60">
                <a href="">About</a>
            </li>
            <li class="text-gray-900 opacity-60">
                <a href="">Contact</a>
            </li>
        </ul>

        <!-- Login & Cart (Desktop & Tablet) -->
        <div class="hidden md:flex flex-row gap-4 order-3 items-center">
            <i class="bi bi-cart2"></i>
            <a href="" class="border px-4 py-1 rounded-full bg-emerald-500 text-white font-medium">Login</a>
        </div>
    </div>

    <!-- Nav Items (Mobile & Tablet) -->
    <div x-show="menu" x-transition @click.away="menu = false" class="bg-emerald-500 text-white px-4 py-4 rounded-2xl lg:hidden">
        <ul class="flex flex-col sm:flex-row justify-center sm:items-center gap-4">
            <li class="font-semibold">
                <a href="">Home</a>
            </li>
            <li class="hover:font-semibold">
                <a href="">Product</a>
            </li>
            <li class="hover:font-semibold">
                <a href="">About</a>
            </li>
            <li class="hover:font-semibold">
                <a href="">Contact</a>
            </li>
            <li class="flex flex-row gap-4 md:hidden">
                <a href="" class="border px-4 py-1 rounded-full bg-white text-emerald-700 font-medium">Login</a>
                <i class="bi bi-cart2"></i>
            </li>
        </ul>
    </div>
</nav>
