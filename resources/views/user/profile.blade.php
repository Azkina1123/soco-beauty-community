@extends('layouts.global')

@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10 h-[300px]">

        {{-- sidebar --}}
        @include('components.sidebar-profile')

        {{-- detail profile --}}
        <div class="w-[75%] h-fit py-2 px-2 grid grid-cols-4">
            <div class="flex justify-center items-center">
                <div class="rounded-full bg-black w-24 h-24 me-5"></div>
            </div>

            <div class="col-span-3 h-[120px] flex flex-col justify-between">
                <p class="text-2xl">Username</p>
                <p class="text-xl">Nama Lengkap 123456</p>

                <div class="flex flex-col mt-5">
                    <p>14 Reviews | 23 Comments</p>
                    <p class="text-light-slate-grey text-sm">Joined at 28 Oct 2023</p>
                </div>

            </div>
        </div>



    </div>


    @include('components.footer')
@endsection
