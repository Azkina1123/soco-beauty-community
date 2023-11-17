@extends('layouts.global')

@section('content')
    @include('components.header-landing')

    {{-- banner --}}
    <div class="py-2">
        <div style="background-image: url({{ asset('assets/images/banner.jpg') }})"
            class="h-[500px] bg-cover bg-center flex flex-col items-center justify-center">

            <img src="{{ asset('assets/images/soco.png') }}" alt="logo-soco" class="w-12">
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
        <div
            class="flex flex-col justify-center items-center w-[34%] border-0 border-e-2 border-e-medium-forest-green px-2">
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
            <a href="{{ route('user.skincares.details', $produks[0]['id']) }}"
                style="background-image: url('{{ asset('assets/skincares/' . $produks[0]['gambar']) }}')"
                class="bg-white row-span-2 col-span-3 bg-contain bg-no-repeat bg-center flex items-end hover:brightness-95 border border-medium-forest-green border-opacity-50 rounded-md">

                <div class="bg-white bg-opacity-70 w-fit max-w-[80%] p-5 mb-10">
                    <p class="text-medium-forest-green text-2xl truncate">{{ $produks[0]['nama_produk'] }}</p>
                </div>
            </a>


            <a href="{{ route('user.skincares.details', $produks[1]['id']) }}"
                style="background-image: url('{{ asset('assets/skincares/' . $produks[1]['gambar']) }}')"
                class="bg-white col-span-3 bg-contain bg-no-repeat bg-center flex items-end hover:brightness-95 border border-medium-forest-green border-opacity-50 rounded-md">
                <div class="bg-white bg-opacity-70 w-fit max-w-[70%] p-5 mb-8">
                    <p class="text-medium-forest-green text-2xl truncate">{{ $produks[1]['nama_produk'] }}</p>
                </div>
            </a>

            <a href="{{ route('user.skincares.details', $produks[2]['id']) }}"
                style="background-image: url('{{ asset('assets/skincares/' . $produks[2]['gambar']) }}')"
                class="bg-white col-span-2 bg-contain bg-no-repeat bg-center flex items-end hover:brightness-95 border border-medium-forest-green border-opacity-50 rounded-md">
                <div class="bg-white bg-opacity-70 w-fit max-w-[70%] mb-5 p-5">
                    <p class="text-medium-forest-green text-2xl truncate">{{ $produks[2]['nama_produk'] }}</p>
                </div>
            </a>

            <a href="{{ route('user.skincares.details', $produks[3]['id']) }}"
                style="background-image: url('{{ asset('assets/skincares/' . $produks[3]['gambar']) }}')"
                class="bg-white bg-contain bg-no-repeat bg-center flex items-end hover:brightness-95 border border-medium-forest-green border-opacity-50 rounded-md">
                <div class="bg-white bg-opacity-70 w-fit max-w-[80%] mb-5 p-5">
                    <p class="text-medium-forest-green text-2xl truncate">{{ $produks[3]['nama_produk'] }}</p>
                </div>
            </a>
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
