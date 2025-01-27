<a {{ $attributes }} class=" border-b-4 {{ $active ? 'text-gray-800 border-b-emerald-600' : 'text-gray-600 border-b-white hover:text-gray-800' }}"
aria-current="{{ $active ? 'page' : false }}">
{{ $slot }}
</a>