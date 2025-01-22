<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    {{-- Tailwind --}}
    @vite('resources/css/app.css')
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    @include('components.navbar-main')

    <section id="hero-section" class="bg-emerald-50">
        <div class="container mx-auto px-4 py-4 lg:px-20 min-h-screen grid grid-cols-1 lg:grid-cols-2 justify-center items-center">
            <div>
                <h1 class="text-4xl lg:text-6xl font-bold mb-10">Get The Fresh <span class="text-emerald-600 underline">Vegetables</span></h1>
                <p class="text-justify text-md text-gray-500 mb-10">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate fugit eum perspiciatis, architecto labore enim itaque odit praesentium. Id tenetur iure a esse optio hic eligendi libero, magni quibusdam quasi!</p>
                <a href="" class="bg-emerald-500 p-4 text-white rounded-md hover:bg-emerald-600">Shop Now</a>
            </div>
            <div class="flex justify-center items-center">
                <img src="{{ asset('src/img/img-hero.png') }}" alt="" class="w-9/12">
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto px-4 py-4 lg:px-20 min-h-screen flex flex-col justify-center items-between gap-14">
            <div>
                <h1 class="text-3xl font-bold">New Products</h1>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10  h-[480.8px]" x-data="{ btnAddCart: {} }">
                <template x-for="index in [1,2,3]" :key="index">
                    <div @mouseenter="btnAddCart[index] = true"  
                         @mouseleave="btnAddCart[index] = false" 
                         class="bg-emerald-50 p-6 rounded-2xl border flex flex-col justify-between gap-4 hover:shadow-xl h-fit hover:h-full">
                        
                        <img src="https://plus.unsplash.com/premium_photo-1702403157830-9df749dc6c1e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                             alt="" class="object-cover rounded-xl">
                        
                        <div class="flex flex-col gap-2">
                            <h3 class="text-xl font-bold">Lorem ipsum dolor sit amet</h3>
                            <span class="font-semibold text-gray-500">Rp. 10.000</span>
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
            
                        <!-- Pastikan tombol tetap ada dalam layout -->
                        <a href="" class="bg-emerald-600 text-white text-center py-4 rounded-md hover:bg-emerald-500"
                           x-show="btnAddCart[index]" x-transition>
                            Add to Cart
                        </a>
                    </div>
                </template>
            </div>            
            
        </div>
    </section>
</body>
</html>