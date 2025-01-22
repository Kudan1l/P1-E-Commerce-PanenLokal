<nav x-data="{ menu: false }" class="bg-white fixed w-full">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Hamburger menu (Mobile) -->
        <button @click="menu = !menu" class="text-2xl lg:hidden order-1" aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>
        <span class="text-2xl font-semibold text-emerald-700 order-2">Panen Lokal</span>

        <!-- Nav Items (Desktop) -->
        <ul class="hidden lg:flex flex-row justify-center gap-4 order-2 font-medium text-gray-900">
            <li class="opacity-100">
                <a href="">Home</a>
            </li>
            <li class="opacity-60 hover:opacity-100">
                <a href="">Product</a>
            </li>
            <li class="opacity-60 hover:opacity-100">
                <a href="">About</a>
            </li>
            <li class="opacity-60 hover:opacity-100">
                <a href="">Contact</a>
            </li>
        </ul>

        <!-- Login & Cart (Desktop & Tablet) -->
        <div class="hidden md:flex flex-row gap-4 order-3 items-center">
            <i class="bi bi-cart2 text-2xl"></i>
            <a href="" class="border px-4 py-1 rounded-full bg-emerald-500 text-white font-medium">Login</a>
        </div>
    </div>

    <!-- Nav Items (Mobile & Tablet) -->
    <div x-show="menu" x-transition @click.away="menu = false" class="bg-emerald-500  px-4 py-4 rounded-2xl lg:hidden shadow-xl absolute w-full">
        <ul class="flex flex-col sm:flex-row justify-center sm:items-center gap-2 font-medium text-white">
            <li class="bg-emerald-700 px-4 py-2 w-fit rounded-md">
                <a href="" class="">Home</a>
            </li>
            <li class="hover:bg-emerald-700 px-4 py-2 w-fit rounded-md">
                <a href="" class="">Product</a>
            </li>
            <li class="hover:bg-emerald-700 px-4 py-2 w-fit rounded-md">
                <a href="" class="">About</a>
            </li>
            <li class="hover:bg-emerald-700 px-4 py-2 w-fit rounded-md">
                <a href="" class="">Contact</a>
            </li>
            <li class="flex flex-row gap-4 md:hidden">
                <a href="" class="border px-4 py-1 rounded-full bg-white text-emerald-700 font-medium">Login</a>
                <i class="bi bi-cart2 text-2xl"></i>
            </li>
        </ul>
    </div>
</nav>
