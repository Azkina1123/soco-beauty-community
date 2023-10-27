@extends('layouts.global')

@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        <div class="w-[25%] px-2">
            <form action="" class="px-2">
                @include('components.text-field', [
                    'type' => 'search',
                    'name' => 'search',
                    'placeholder' => 'Search',
                ])
            </form>

            <div class="mt-5 flex flex-col items-start">

                @include('components.text-btn', [
                    'label' => 'All',
                    'route' => route('skincares'),
                    'color' => 'green',
                ])
                @include('components.text-btn', [
                    'label' => 'Facial Wash',
                    'route' => route('skincares'),
                    'color' => 'green',
                ])
                @include('components.text-btn', [
                    'label' => 'Toner',
                    'route' => route('skincares'),
                    'color' => 'green',
                ])
                @include('components.text-btn', [
                    'label' => 'Serum',
                    'route' => route('skincares'),
                    'color' => 'green',
                ])
                @include('components.text-btn', [
                    'label' => 'Moisturizer',
                    'route' => route('skincares'),
                    'color' => 'green',
                ])
                @include('components.text-btn', [
                    'label' => 'Sunscreen',
                    'route' => route('skincares'),
                    'color' => 'green',
                ])

                <div class=" w-full p-3">
                    <hr class="border">

                </div>
                @include('components.text-btn', [
                    'label' => 'Logout',
                    'route' => route('landing'),
                    'color' => 'green',
                ])
            </div>
        </div>

        <div class="w-[75%] h-fit py-2 px-2 grid grid-cols-3 gap-5">
            <div class="bg-slate-400 h-[200px]"></div>
            <div class="bg-slate-400 h-[200px]"></div>
            <div class="bg-slate-400 h-[200px]"></div>
            <div class="bg-slate-400 h-[200px]"></div>
            <div class="bg-slate-400 h-[200px]"></div>
            <div class="bg-slate-400 h-[200px]"></div>
            <div class="bg-slate-400 h-[200px]"></div>

            {{-- skincares --}}

        </div>
    </div>

    @include('components.footer')
@endsection
