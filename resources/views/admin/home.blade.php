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
                <a href="{{ route('admin.account')}}" class="px-4">
                    <div class="px-36 py-16 border border-medium-forest-green border-opacity-50 rounded-md">
                    <i class="fa-solid fa-users fa-2xl"></i>
                    <p class="text-black text-xl">{{ count($user) }} Accounts</p>
                </div>
                </a>

                <a href="{{ route('admin.product')}}">
                    <div class="px-36 py-16 border border-medium-forest-green border-opacity-50 rounded-md">
                        <i class="fa-solid fa-boxes-stacked fa-2xl"></i>
                        <p class="text-black text-xl">{{ count($produk) }} Products..</p>
                    </div>
                 </a>
            </div>

            <div class=" w-full p-3"></div>

            <div class="flex flex-row justify-between items-center px-4">
                <a href="{{ route('admin.review')}}">
                    <div class="px-36 py-16 border border-medium-forest-green border-opacity-50 rounded-md">
                        <i class="fa-solid fa-list-ul fa-2xl"></i>
                        <p class="text-black text-xl">{{ count($review) }} Reviews</p>
                    </div>
                </a>

                <a href="{{ route('admin.review')}}">
                    <div class="px-36 py-16 border border-medium-forest-green border-opacity-50 rounded-md">
                        <i class="fa-solid fa-comments fa-2xl"></i>
                        <p class="text-black text-xl">{{ count($komentar) }} Comments</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
