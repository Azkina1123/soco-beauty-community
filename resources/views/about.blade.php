@extends('layouts.global')

@section('content')
    @include('components.header-landing')

    <div class="flex flex-col justify-center items-center py-16">
        <img src="{{ asset('assets/images/soco.png') }}" alt="logo-soco" class="w-12">
        <h1 class="text-4xl font-semibold">SOCO</h1>
        <p class="text-2xl mb-10 ">Beauty Community</p>

        <div class="w-[70%] mb-20">
            <p class="text-center">Soco - Beauty Community is your go-to hub for all things skincare reviews! Here, we come
                together to explore,
                dissect, and review a myriad of skincare products. From tried-and-tested serums to the latest moisturizers,
                our community shares comprehensive insights, personal experiences, and honest feedback. Dive into our
                discussions, discover top-notch skincare recommendations, and connect with fellow skincare enthusiasts who
                share a passion for nurturing and enhancing skin health. Join Soco - Beauty Community to embark on a journey
                of informed skincare choices and collective beauty empowerment!</p>
        </div>
    </div>

    @include('components.footer')
@endsection
