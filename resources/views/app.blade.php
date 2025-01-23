@extends('layouts.main-page')

@section('main')
    {{-- Hero Section --}}
    <section id="hero-section" class="bg-emerald-50">
        <div class="container mx-auto px-4 lg:px-20 grid grid-cols-1 lg:grid-cols-2 items-center">
            <div>
                <h1 class="text-4xl font-bold mb-4 text-gray-800">
                    Sayuran Segar Langsung dari <span class="text-emerald-600 underline">Hidroponik</span>
                </h1>
                <p class="text-md text-gray-600 mb-6 text-justify">
                    Panen Lokal menyediakan sayuran hidroponik berkualitas tinggi, dipetik langsung dari kebun kami. Sehat, segar, dan ramah lingkungan.
                </p>
                <a href="" class="bg-emerald-600 text-white px-6 py-3 rounded hover:bg-emerald-700">Jelajahi Produk</a>
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('src/img/img-hero.png') }}" alt="Hero Image" class="w-1/2">
            </div>
        </div>
    </section>

    {{-- New Products Section --}}
    <section id="products-section" class="flex flex-col justify-center">
        <div class="container mx-auto px-4 py-20 lg:px-20">
            <h1 class="text-3xl font-bold mb-10 text-gray-800">New Products</h1>
            <div class="hidden lg:grid grid-cols-1 lg:grid-cols-3 gap-10 h-[472.2px]" x-data="{ btnAddCart: {} }">
                <template x-for="index in [1,2,3]" :key="index">
                    <div 
                        @mouseenter="btnAddCart[index] = true"  
                        @mouseleave="btnAddCart[index] = false" 
                        class="bg-white p-6 rounded-2xl border flex flex-col gap-4 hover:shadow-xl h-min">
                        
                        <img 
                            src="https://plus.unsplash.com/premium_photo-1702403157830-9df749dc6c1e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="Product Image" 
                            class="object-cover rounded-xl">
                        
                        <div class="flex flex-col gap-2">
                            <h3 class="text-xl font-bold text-gray-800">Lorem ipsum dolor sit amet</h3>
                            <span class="font-semibold text-gray-500">Rp 10.000</span>
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
                        
                        <a href="" 
                            class="bg-emerald-600 text-white text-center py-3 rounded-md hover:bg-emerald-500"
                            x-show="btnAddCart[index]" x-transition>
                            Add to Cart
                        </a>
                    </div>
                </template>
            </div>            
        </div>
    </section>

    {{-- About Section --}}
    <section id="about-section" class="bg-emerald-50 flex justify-center">
        <div class="container mx-auto px-4 py-20 lg:px-20 flex flex-col sm:flex-row items-center">
            <div class="flex justify-center items-center">
                <img src="{{ asset('src/img/img-about.png') }}" alt="" class="w-8/12">
            </div>
            <div>
                <h1 class="text-3xl lg:text-5xl font-bold mb-6 text-gray-700">About <span class="text-emerald-600 italic">Panen Lokal</span></h1>
                <p class="text-justify mb-3 text-gray-500">Panen Lokal adalah platform e-commerce yang menyediakan sayuran hidroponik segar langsung dari kebun ke meja Anda. Kami berkomitmen untuk menghadirkan produk berkualitas tinggi yang ditanam dengan sistem hidroponik modern, tanpa pestisida kimia, dan lebih ramah lingkungan.</p>
                <ul class="mb-3 text-gray-500 flex flex-col gap-2">
                    <li class="flex flex-row items-center gap-2">
                        <span class="text-2xl">🌱</span>
                        <p class="font-bold text-gray-700">Segar & Sehat</p>
                    </li>
                    <li class="flex flex-row items-center gap-2">
                        <span class="text-2xl">💧</span>
                        <p class="font-bold text-gray-700">Ramah Lingkungan</p>
                    </li>
                    <li class="flex flex-row items-center gap-2">
                        <span class="text-2xl">🚚</span>
                        <p class="font-bold text-gray-700">Dari Kebun ke Rumah</p>
                    </li>
                </ul>
                <p class="text-justify text-gray-500">Bersama Panen Lokal, mari wujudkan gaya hidup sehat dengan sayuran hidroponik yang lebih bersih dan bernutrisi!</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container mx-auto px-4 py-20 text-center">
        <h3 class="text-3xl font-bold mb-8 text-emerald-600">Hubungi Kami</h3>
        <div class="flex justify-center space-x-8">
            <div>
                <h4 class="font-bold mb-2">Email</h4>
                <p>info@panenlokal.com</p>
            </div>
            <div>
                <h4 class="font-bold mb-2">Telepon</h4>
                <p>+62 812-3456-7890</p>
            </div>
            <div>
                <h4 class="font-bold mb-2">Instagram</h4>
                <p>@panenlokal</p>
            </div>
            <div>
                <h4 class="font-bold mb-2">GitHub</h4>
                <p>panenlokal-dev</p>
            </div>
        </div>
    </section>
@endsection
