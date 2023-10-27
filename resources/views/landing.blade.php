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
        <div class="flex flex-col items-center w-[30%] border-0 border-e-2 border-e-medium-forest-green">
            <img src="" alt="">
            <h2 class="font-bold text-medium-forest-green">Trusted Information</h2>
            <p class="text-light-slate-grey">Real product information from official store</p>

        </div>

        <div class="flex flex-col items-center w-[30%] border-0 border-e-2 border-e-medium-forest-green">
            <img src="" alt="">
            <h2 class="font-bold text-medium-forest-green">Honest Review</h2>
            <p class="text-light-slate-grey">Given directly by product users</p>
        </div>

        <div class="flex flex-col items-center w-[30%]">
            <img src="" alt="">
            <h2 class="font-bold text-medium-forest-green">Share your Experience</h2>
            <p class="text-light-slate-grey">Share your skincare experience to others</p>
        </div>
    </div>

    {{-- popular products --}}
    <div class="px-14">
        <h1 class="font-bold text-2xl">Popular Products</h1>
        <p class="text-light-slate-grey">The most reviewed products by users today. </p>

        <div class="grid grid-cols-6 gap-5 h-[500px] py-5">
            <div style="background-image: url('')" class="bg-slate-500 row-span-2 col-span-3">
            </div>

            <div style="background-image: url('')" class="bg-slate-500 col-span-3">
            </div>

            <div style="background-image: url('')" class="bg-slate-500 col-span-2">
            </div>
            <div style="background-image: url('')" class="bg-slate-500">
            </div>
        </div>
    </div>

    {{-- recent review --}}
    <div class="px-14 py-10">
        <h1 class="font-bold text-2xl">Recent Reviews</h1>
        <p class="text-light-slate-grey">The most reviewed products by users today. </p>

        <div class="grid grid-cols-3 gap-5 h-[300px] py-5">
            <div style="background-image: url('')" class="bg-slate-500">
            </div>

            <div style="background-image: url('')" class="bg-slate-500">
            </div>

            <div style="background-image: url('')" class="bg-slate-500">
            </div>
        </div>
    </div>


    {{-- join us --}}
    <div class="px-14 pt-5 pb-24 h-[350px] flex flex-col justify-center items-center ">
        <h1 class="font-bold text-3xl mb-1 text-medium-forest-green"> Join us now! </h1>
        <p class="text-xl text-light-slate-grey">Let's do your skincare routine with us.</p>
    </div>

    @include('components.footer')
@endsection
