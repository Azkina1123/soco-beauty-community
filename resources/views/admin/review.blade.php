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
            <p class="font-bold text-2xl">REVIEW PAGE</p>

            {{-- disini mau dibuat rencananya total akun, review, produk dll dehh --}}

        </div>
    </div>

    @include('components.footer')
@endsection
