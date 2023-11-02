@extends('layouts.global')

@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-skincare')

        <div class="w-[75%] h-fit py-2 ps-3 grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5">
            <div class="bg-slate-400 h-[250px] rounded-md"></div>
            <div class="bg-slate-400 h-[250px] rounded-md"></div>
            <div class="bg-slate-400 h-[250px] rounded-md"></div>
            <div class="bg-slate-400 h-[250px] rounded-md"></div>
            <div class="bg-slate-400 h-[250px] rounded-md"></div>
            <div class="bg-slate-400 h-[250px] rounded-md"></div>
            <div class="bg-slate-400 h-[250px] rounded-md"></div>

            {{-- skincares --}}

        </div>
    </div>

    @include('components.footer')
@endsection
