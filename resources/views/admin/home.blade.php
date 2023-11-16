@extends('layouts.global')

@section('content')
    @include('components.header-admin')

    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-admin')

        <div class="w-[75%] py-2 ps-3 flex flex-col">
            <div class=" w-full p-3">
                <hr class="border">
            </div>
            <p class="font-bold text-2xl">HOME PAGE</p>

            <div class=" w-full p-3"></div>

            {{-- disini mau dibuat rencananya total akun, review, produk dll dehh --}}
            <div class="flex flex-row justify-between items-center">
                <div class="px-36 py-8 border border-medium-forest-green border-opacity-50 rounded-md">
                    <i class="fa-solid fa-list-ul"></i>
                    <p class="text-black text-xl">{{ count($user) }} Accounts</p>
                </div>
                <div class="px-36 py-8 border border-medium-forest-green border-opacity-50 rounded-md">
                    <i class="fa-solid fa-comments"></i>
                    <p class="text-black text-xl">{{ count($produk) }} Products..</p>
                </div>
            </div>

            <div class=" w-full p-3"></div>

            <div class="flex flex-row justify-between items-center">
                <div class="px-36 py-8 border border-medium-forest-green border-opacity-50 rounded-md">
                    <i class="fa-solid fa-list-ul"></i>
                    <p class="text-black text-xl">{{ count($review) }} Reviews</p>
                </div>
                <div class="px-36 py-8 border border-medium-forest-green border-opacity-50 rounded-md">
                    <i class="fa-solid fa-comments"></i>
                    <p class="text-black text-xl">{{ count($komentar) }} Comments</p>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
