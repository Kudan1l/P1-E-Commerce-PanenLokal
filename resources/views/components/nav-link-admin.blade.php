<a {{ $attributes }} class="flex items-center px-6 py-2 mt-4 gap-2 text-gray-600 border-l-4 {{ $active ? 'text-gray-800 border-l-emerald-600' : 'hover:text-gray-800 gap-2 border-l-white hover:border-l-emerald-600' }}"
aria-current="{{ $active ? 'page' : false }}">
    <i class="{{ $icon }} text-xl"></i>
    <span href="">{{ $slot }}</span>
</a>