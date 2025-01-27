@extends('layouts.dashboard-page-admin')

@section('main')

    <section>
        <div class="grid grid-cols-3 space-x-8">
            <div class="flex justify-start space-x-8 items-center bg-white p-4 rounded-xl border-2 border-gray-200">
                <div class="bg-emerald-600/75 text-white p-4 text-4xl rounded-full w-fit">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
                <div class="flex flex-col gap-1 text-gray-700">
                    <span class="text-2xl font-semibold">10</span>
                    <span class="text-gray-500">Available Products</span>
                </div>
            </div>
            <div class="flex justify-start space-x-8 items-center bg-white p-4 rounded-xl border-2 border-gray-200">
                <div class="bg-indigo-600/75 text-white p-4 text-4xl rounded-full w-fit">
                    <i class="bi bi-basket-fill"></i>
                </div>
                <div class="flex flex-col gap-1 text-gray-700">
                    <span class="text-2xl font-semibold">120,000</span>
                    <span class="text-gray-500 text-md">Total Orders</span>
                </div>
            </div>
            <div class="flex justify-start space-x-8 items-center bg-white p-4 rounded-xl border-2 border-gray-200">
                <div class="bg-fuchsia-600/75 text-white p-4 text-4xl rounded-full w-fit">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="flex flex-col gap-1 text-gray-700">
                    <span class="text-2xl font-semibold">5</span>
                    <span class="text-gray-500 text-md">New Users</span>
                </div>
            </div>
        </div>
    </section>

    <div class="mt-6"></div>

    <section>
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <td class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Order ID</td>
                        <td class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">Nama</td>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr>
                        <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">12837182</td>
                        <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">Agung Laksono Putra</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection