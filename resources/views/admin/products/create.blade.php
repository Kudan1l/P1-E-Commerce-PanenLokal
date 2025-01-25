@extends('layouts.dashboard-page-admin')

@section('header-title')
Form Penambahan Produk
@endsection

@section('main')

    <div class="p-6 bg-white rounded-md shadow-md">
        <form action="{{ route('admin.products.store') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="name" class="text-gray-700">Nama</label>
                    <input class="w-full mt-2 p-2 border-2 border-gray-200 rounded-md focus:ring focus:ring-opacity-40 focus:ring-emerald-500 outline-none" type="text" name="name" id="name">
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="price" class="text-gray-700">Harga</label>
                    <input class="w-full mt-2 p-2 border-2 border-gray-200 rounded-md focus:ring focus:ring-opacity-40 focus:ring-emerald-500 outline-none" type="number" name="price" id="price">
                    @error('price')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="stock" class="text-gray-700">Stok</label>
                    <input class="w-full mt-2 p-2 border-2 border-gray-200 rounded-md focus:ring focus:ring-opacity-40 focus:ring-emerald-500 outline-none" type="number" name="stock" id="stock">
                    @error('stock')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="description" class="text-gray-700">Deskripsi</label>
                    <textarea class="w-full mt-2 p-2 border-2 border-gray-200 rounded-md focus:ring focus:ring-opacity-40 focus:ring-emerald-500 outline-none" name="description" id="description"></textarea>
                </div>
                <div>
                    <label for="image" class="text-gray-700">URL Foto</label>
                    <input class="w-full mt-2 p-2 border-2 border-gray-200 rounded-md focus:ring focus:ring-opacity-40 focus:ring-emerald-500 outline-none" type="url" name="image" id="image">
                </div>   
                <div class="flex justify-end space-x-2">
                    <a href="{{ route('admin.products.index') }}" class="p-3 bg-gray-600 hover:bg-gray-600/80 text-white rounded-md">Kembali</a>
                    <button type="submit" class="p-3 bg-indigo-600 hover:bg-indigo-600/80 text-white rounded-md">Save</button>
                </div>
            </div>
        </form>
    </div>

@endsection