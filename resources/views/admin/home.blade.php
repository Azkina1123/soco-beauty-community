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

            {{-- disini mau dibuat rencananya total akun, review, produk dll dehh --}}
            <div class="flex flex-row justify-between items-center">
                <div>
                    <p class="text-light-slate-grey w-[50%]">{{ count($user) }} Akun</p>
                </div>
                <div>
                  <p class="text-light-slate-grey w-[50%]">{{ count($produk) }} Produk</p>
                </div>

            </div>

            <div class=" w-full p-3"></div>

            <div class="flex flex-row justify-between items-center">
                <div>
                    <p class="text-light-slate-grey w-[50%]">{{ count($review) }} Review</p>
                </div>

                <div>
                    <p class="text-light-slate-grey w-[50%]">{{ count($komentar) }} Comments</p>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
