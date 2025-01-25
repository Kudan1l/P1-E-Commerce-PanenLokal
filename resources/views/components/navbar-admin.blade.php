<aside class="bg-white w-1/6 min-h-screen text-center">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-emerald-600 order-2 sm:order-1">Panen Lokal</h1>
        <div class="space-y-4">
            {{-- active: "border-l-4 border-l-emerald-600", default: "hover:text-gray-800 gap-2 border-l-4 border-l-white hover:border-l-emerald-600" --}}
            <x-nav-link-admin href="{{ route('admin.dashboard') }}" icon="bi bi-house-door" :active="request()->is('admin/dashboard*')">Dashboard</x-nav-link-admin>
            <x-nav-link-admin href="{{ route('admin.products.index') }}" icon="bi bi-box-seam" :active="request()->is('admin/products*')">Products</x-nav-link-admin>
            <x-nav-link-admin href="" icon="bi bi-basket2" :active="request()->is('admin/orders*')">Orders</x-nav-link-admin>
            <x-nav-link-admin href="" icon="bi bi-person" :active="request()->is('admin/users*')">Users</x-nav-link-admin>
        </div>
    </div>
</aside>