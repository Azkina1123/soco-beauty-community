@extends('layouts.global')

@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-skincare')

        <div class="w-[75%] h-fit py-2 ps-3 ">
            @if (!empty($search))
                <p class="mb-3">Search results: {{ $search }}</p>
            @endif

            @if (empty($produks['data']))
                <p class="text-center mt-16">No skincare has been added yet.</p>
            @endif

            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5">
                @foreach ($produks['data'] as $produk)
                    <a href="{{ route('user.skincares.details', $produk['id']) }}"
                        class="h-[300px] border border-light-slate-grey border-opacity-50 rounded-md hover:shadow-md shadow-light-slate-grey flex flex-col items-center">

                        <div class="w-full h-[70%] p-2">
                            <div class="bg-center bg-contain bg-no-repeat h-full"
                                style="background-image: url('{{ asset('assets/skincares/' . $produk['gambar']) }}')">

                            </div>
                        </div>

                        <div
                            class="bg-cyan-blue w-full h-[30%] bg-cover bg-center bg-opacity-20 flex flex-col justify-center items-center p-3">
                            <p class="text-center">{{ $produk['nama_produk'] }}</p>
                            <p class="text-center text-light-slate-grey">{{ $produk['jenis'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </div>

    @include('components.footer')
@endsection
