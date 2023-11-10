@extends('layouts.global')

@section('content')
    @include('components.header-user')
    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-reviews')

        <div class="w-[75%] py-2 ps-3 flex flex-col">
            <div class="flex justify-between">
                <h1 class="text-2xl font-bold text-medium-forest-green mb-2">Select Skincare to Review</h1>

                <a href="" class="next-btn">
                    @include('components.elevated-btn', ['label' => 'Next', 'type' => 'button'])
                </a>
            </div>

            <form action="{{ route('user.reviews.add.select-skincare') }}" method="get" class="flex items-center mt-2 gap-2">
                @include('components.input', [
                    'name' => 'search',
                    'placeholder' => 'Enter skincare name here',
                    'type' => 'search',
                    'required' => false,
                    'value' => $search,
                ])

                <button class="flex justify-center items-center px-2 mt-2">
                    <img src="{{ asset('assets/images/search.svg') }}" alt="" class="w-8">
                </button>

            </form>

            {{-- pilihan skincare --}}
            <div class="mt-3">
                @if (isset($search))
                    <p class="mb-3">Search results: {{ $search }}</p>
                @endif

                @foreach ($produks as $produk)
                    {{-- produk skincare --}}
                    <div class="w-full flex mb-3">
                        <div class="w-[5%] flex justify-center">
                            <input type="radio" name="selected-skincare" id="selected-skincare"
                                value="{{ $produk['id'] }}">
                        </div>

                        {{-- gambar skincare --}}
                        <div class="w-[15%]  flex justify-center">
                            <div class="w-20 h-20 bg-light-slate-grey rounded-md bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/skincares/' . $produk['gambar']) }}')"></div>
                        </div>

                        <div class="w-[40%] ps-5 flex items-center">{{ $produk['nama_produk'] }}</div>
                        <p class="w-[20%] flex items-center">{{ $produk['merk'] }}</p>
                        <p class="w-[20%] flex items-center">{{ $produk['jenis'] }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    @include('components.footer')
@endsection
