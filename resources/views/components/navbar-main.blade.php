<!-- Navbar -->
<nav class="fixed top-0 left-0 right-0 bg-white shadow-md z-50" x-data="{ hamburgerMenu: false }">
    <div class="container mx-auto px-4 lg:px-20 py-3 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-emerald-600 order-2 sm:order-1">Panen Lokal</h1>
        <button class="sm:hidden order-1"  @click="hamburgerMenu = !hamburgerMenu"><i class="bi bi-list text-2xl"></i></button>
        <div class="hidden md:flex space-x-4 order-2">
            <a href="" class="hover:text-emerald-600">Home</a>
            <a href="" class="text-gray-600 hover:text-emerald-600">Products</a>
            <a href="" class="text-gray-600 hover:text-emerald-600">About</a>
            <a href="" class="text-gray-600 hover:text-emerald-600">Contact</a>
        </div>
        <div class="flex space-x-4 order-3">
            <button class="text-emerald-600 hover:bg-emerald-100 hover:text-gray-800 px-3 py-2 rounded">
                <i class="bi bi-cart2 text-2xl"></i>
            </button>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-600/90 hidden sm:block">
                Login
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="fixed left-0 right-0 bg-emerald-200 shadow-md z-40 md:hidden rounded-xl" x-show="hamburgerMenu" x-transition>
        <div class="container mx-auto px-4 py-3 flex flex-col space-y-3">
            {{-- Menu Active --}}
            <a href="" class="text-white bg-emerald-600 px-4 py-2 w-fit rounded-md">Home</a>
            <a href="" class="text-gray-800 hover:text-white hover:bg-emerald-600 px-4 py-2 w-fit rounded-md">Products</a>
            <a href="" class="text-gray-800 hover:text-white hover:bg-emerald-600 px-4 py-2 w-fit rounded-md">About</a>
            <a href="" class="text-gray-800 hover:text-white hover:bg-emerald-600 px-4 py-2 w-fit rounded-md">Contact</a>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-600/90 w-fit">
                Login
            </button>
        </div>
    </div>
</nav>


