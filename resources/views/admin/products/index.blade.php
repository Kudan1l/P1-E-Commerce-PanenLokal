@extends('layouts.dashboard-page-admin')

@section('header-title')
Products
@endsection

@section('main')
   
    <a href="{{ route('admin.products.create') }}" class="bg-emerald-600 text-white p-3 rounded-md hover:bg-emerald-600/90">Tambah Product</a>

    <section class="mt-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-xs font-semibold leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            No
                        </th>
                        <th class="px-6 py-3 text-xs font-semibold leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Nama
                        </th>
                        <th class="px-6 py-3 text-xs font-semibold leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Harga
                        </th>
                        <th class="px-6 py-3 text-xs font-semibold leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Stok
                        </th>
                        <th class="px-6 py-3 text-xs font-semibold leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="px-6 py-4 text-gray-800 border-b border-gray-200 whitespace-nowrap">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 text-gray-800 border-b border-gray-200 whitespace-nowrap">
                                {{ $product->name }}
                            </td>
                            <td class="px-6 py-4 text-gray-800 border-b border-gray-200 whitespace-nowrap">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 text-gray-800 border-b border-gray-200 whitespace-nowrap">
                                {{ $product->stock }}
                            </td>
                            <td class="flex px-6 py-4 border-b border-gray-200 whitespace-nowrap space-x-2">
                                <a href="{{ route('admin.products.edit', $product->slug) }}" class="p-2 bg-yellow-500 hover:bg-yellow-500/80 rounded">Edit</a>
                                <form action="{{ route('admin.products.destroy', $product->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-white bg-red-500 hover:bg-red-500/80 rounded">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
