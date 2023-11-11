@extends('layouts.global')

@section('content')
    @include('components.header-landing')

    {{-- banner --}}
    <div class="py-2">
        <div style="background-image: url({{ asset('assets/images/banner.jpg') }})"
            class="h-[500px] bg-cover bg-center flex flex-col items-center justify-center">

            <h1 class="text-4xl font-semibold">SOCO</h1>
            <p class="text-2xl mb-5 ">Beauty Community</p>
            <p class="text-center">
                Unlock the Secret to Radiant Skin at Soco! <br>
                Your Ultimate Destination for the Latest Skincare <br>
                Reviews.
            </p>
        </div>

    </div>

    {{-- intro --}}
    <div class="flex justify-around px-14 py-28">
        <div class="flex flex-col justify-center items-center w-[34%] border-0 border-e-2 border-e-medium-forest-green px-2">
            <img src="" alt="">
            <h2 class="font-bold text-medium-forest-green text-center">Trusted Information</h2>
            <p class="text-light-slate-grey text-center">Real product information from official store</p>

        </div>

        <div
            class="flex flex-col justify-center items-center w-[42%] border-0 border-e-2 border-e-medium-forest-green px-2">
            <img src="" alt="">
            <h2 class="font-bold text-medium-forest-green text-center">Honest Review</h2>
            <p class="text-light-slate-grey  text-center">Given directly by product users</p>
        </div>

        <div class="flex flex-col justify-center items-center w-[34%] px-2">
            <img src="" alt="">
            <h2 class="font-bold text-medium-forest-green text-center">Share your Experience</h2>
            <p class="text-light-slate-grey  text-center">Share your skincare experience to others</p>
        </div>
    </div>

    {{-- popular products --}}
    <div class="px-14">
        <h1 class="font-bold text-2xl text-medium-forest-green">Popular Products</h1>
        <p class="text-light-slate-grey">The most reviewed products by users today. </p>

        <div class="grid grid-cols-6 gap-5 h-[500px] py-5">
            <a style="background-image: url('{{ asset('assets/skincares/' . $produks[0]['gambar']) }}')"
                class="bg-slate-500 row-span-2 col-span-3 bg-cover bg-center flex items-end hover:brightness-95 border border-light-slate-grey border-opacity-25 rounded-md">

                <div class="bg-cyan-blue bg-opacity-40 w-[80%] p-5">
                    <p class="text-2xl font-bold truncate">{{ $produks[0]['nama_produk'] }}</p>
                </div>
            </a>

            <div style="background-image: url('{{ asset('assets/skincares/' . $produks[1]['gambar']) }}')"
                class="bg-slate-500 col-span-3 bg-cover bg-center flex items-end hover:brightness-95 border border-light-slate-grey border-opacity-25 rounded-md">
                <div class="bg-cyan-blue bg-opacity-40 w-[80%] p-5">
                    <p class="text-2xl font-bold truncate">{{ $produks[1]['nama_produk'] }}</p>
                </div>
            </div>

            <div style="background-image: url('{{ asset('assets/skincares/' . $produks[2]['gambar']) }}')"
                class="bg-slate-500 col-span-2 bg-cover bg-center flex items-end hover:brightness-95 border border-light-slate-grey border-opacity-25 rounded-md">
                <div class="bg-cyan-blue bg-opacity-40 w-[80%] p-5">
                    <p class="text-lg font-bold truncate">{{ $produks[2]['nama_produk'] }}</p>
                </div>
            </div>
            <div style="background-image: url('{{ asset('assets/skincares/' . $produks[3]['gambar']) }}')"
                class="bg-slate-500 bg-cover bg-center flex items-end hover:brightness-95 border border-light-slate-grey border-opacity-25 rounded-md">
                <div class="bg-cyan-blue bg-opacity-40 w-[80%] p-5">
                    <p class="text-md font-bold truncate">{{ $produks[3]['nama_produk'] }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- recent review --}}
    <div class="px-14 py-10">
        <h1 class="font-bold text-2xl text-medium-forest-green">Recent Reviews</h1>
        <p class="text-light-slate-grey">Recent reviews made by users. </p>

        <div class="grid grid-cols-3 gap-5 h-[300px] py-5">
            @foreach ($reviews as $review)
                @include('components.review-card')
            @endforeach
        </div>

    </div>


    {{-- join us --}}
    <div class="px-14 pt-20 pb-24 h-[350px] flex flex-col justify-center items-center ">
        <h1 class="font-bold text-3xl mb-1 text-medium-forest-green"> Join us now! </h1>
        <p class="text-xl text-light-slate-grey">Let's do your skincare routine with us.</p>
    </div>

    @include('components.footer')
@endsection
