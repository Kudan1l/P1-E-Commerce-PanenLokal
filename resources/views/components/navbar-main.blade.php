<!-- Navbar -->
<nav class="fixed top-0 left-0 right-0 bg-white border-b-4 border-emerald-600 z-50" x-data="{ hamburgerMenu: false }">
    <div class="container mx-auto px-4 lg:px-20 py-3 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-emerald-600 order-2 sm:order-1">Panen Lokal</h1>
        
        <button class="sm:hidden order-1"  @click="hamburgerMenu = !hamburgerMenu">
            <i class="bi bi-list text-2xl" x-show="!hamburgerMenu"></i>
            <i class="bi bi bi-x-lg text-2xl" x-show="hamburgerMenu"></i>
        </button>
        <div class="hidden md:flex space-x-4 order-2">
            <a href="" class="text-orange-500">Home</a>
            <a href="" class="text-gray-500 hover:text-emerald-600">Products</a>
            <a href="" class="text-gray-500 hover:text-emerald-600">About</a>
            <a href="" class="text-gray-500 hover:text-emerald-600">Contact</a>
        </div>
        <div class="flex space-x-4 order-3">
            <button class="text-emerald-600 hover:bg-emerald-100 hover:text-gray-800 px-3 py-2 rounded">
                <i class="bi bi-cart2 text-2xl"></i>
            </button>
            <button class="bg-emerald-600 text-white px-4 py-2 rounded-md hover:bg-emerald-600/90 hidden sm:block">
                Login
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="fixed left-0 right-0 bg-white shadow-md z-40 md:hidden rounded-bl-xl rounded-br-xl" x-show="hamburgerMenu" x-transition>
        <div class="container mx-auto px-4 py-6 flex flex-col space-y-6">
            {{-- Menu Active --}}
            <a href="" class="font-semibold text-gray-500 hover:text-orange-500">Home</a>
            <a href="" class="font-semibold text-gray-500 hover:text-orange-500">Products</a>
            <a href="" class="font-semibold text-gray-500 hover:text-orange-500">About</a>
            <a href="" class="font-semibold text-gray-500 hover:text-orange-500">Contact</a>
            <button class="bg-emerald-600 text-white px-4 py-2 rounded-md hover:bg-emerald-600/90 w-fit">
                Login
            </button>
        </div>
    </div>
</nav>


