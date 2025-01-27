@extends('layouts.main-page')

@section('page-title')
    Product: Panen Lokal - Hidroponik Sayuran
@endsection

@section('main')
    {{-- Filter --}}
    <section class="mt-6">
        <div class="container mx-auto px-4 lg:px-20">

            <span>Sort by:</span>
        </div>
    </section>

    <section class="mt-6">
        <div class="container mx-auto px-4 lg:px-20 grid grid-cols-1 lg:grid-cols-4 gap-4">
            @foreach ($products as $product)
                {{-- Card --}}
                <div class="p-4 space-y-4 rounded-xl border-2 border-gray-200 hover:shadow-xl">
                    <img src="{{ $product->image }}" alt="{{ $product->slug }}"
                    class="object-cover rounded-xl aspect-square h-60 w-full">
                    <div class="flex flex-col gap-2">
                        <h3 class="font-bold text-gray-800">{{ $product->name }}</h3>
                        <span class="text-gray-500 font-semibold">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <div class="flex gap-2">
                            <div class="text-orange-500">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="font-semibold text-gray-500">10 Reviews</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection