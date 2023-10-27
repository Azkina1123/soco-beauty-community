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
                    'route' => route('home'),
                    'color' => 'green',
                ])
                @include('components.text-btn', [
                    'label' => 'My Reviews',
                    'route' => route('home'),
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

        <div class="w-[75%] py-2 px-2 flex flex-col">
            @include('components.outlined-btn', ['label' => 'Add New Review +', 'route' => route('home')])

            {{-- reviews --}}
            @for ($i = 0; $i < 5; $i++)
                <div class="py-5">
                    <a href="" class="flex items-center  hover:text-cool-blue-hover focus:text-cool-blue-click">
                        <div class="rounded-full bg-black w-10 h-10 me-5"></div>
                        <div class="flex flex-col">
                            <p class="">Username</p>
                            <p class="text-light-slate-grey text-xs">Created at 27/10/2023</p>
                        </div>

                    </a>
                    <div class="mt-3 grid grid-cols-3 gap-5">

                        <div class="bg-light-slate-grey rounded-md h-[200px] sm:col-span-3 lg:col-auto">
                        </div>

                        <div class="lg:col-span-2 sm:col-span-3 flex flex-col h-full justify-between">
                            <p class="">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, quo exercitationem hic
                                magni,
                                iste quam vitae repudiandae odio ad praesentium explicabo veritatis neque fuga. Id velit
                                molestias
                                alias, nisi provident commodi blanditiis a placeat itaque earum aspernatur recusandae
                                explicabo
                                ducimus nemo laboriosam hic cupiditate vero nam officiis incidunt consectetur iusto!
                            </p>

                            <div class="w-full flex flex-row justify-end">
                                @include('components.text-btn', [
                                    'label' => 'See More',
                                    'route' => route('home'),
                                ])
                            </div>

                        </div>
                    </div>

                </div>

                @if ($i != 5 - 1)
                    <hr class="border ">
                @endif
            @endfor
        </div>
    </div>

    @include('components.footer')
@endsection
