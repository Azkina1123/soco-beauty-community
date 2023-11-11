@extends('layouts.global')

@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-skincare')

        <div class="w-[75%] py-2 ps-3 flex flex-col justify-between">
            <div>
                <div class="flex">
                    <div
                        class="bg-center bg-cover bg-light-slate-grey h-[150px] w-[170px]"style="background-image: url('{{ asset('assets/skincares/' . $produk['gambar']) }}')">
                    </div>

                    <div class="ms-5 flex flex-col justify-between items-end w-full">
                        <ul class="w-full">
                            <li class="font-bold text-2xl">{{ $produk['nama_produk'] }}</li>
                            <li class="text-xl">{{ $produk['merk'] }}</li>
                            <li class="text-light-slate-grey">{{ $produk['jenis'] }}</li>

                        </ul>
                        <p class="text-light-slate-grey">Reviewed {{ $count }} times by users.</p>

                    </div>
                </div>

                <div class="flex flex-col mt-3">
                    <p class="font-bold">Description:</p>
                    <p>{{ $produk['deskripsi'] }}</p>
                </div>

            </div>

            <div class="grid grid-cols-2 gap-3">
                <a href="{{ route('user.reviews.produk', $produk['id']) }}">
                    @include('components.outlined-btn', [
                        'label' => 'Show All Reviews',
                        'type' => 'button',
                    ])
                </a>
                <a href="{{ route('user.reviews.add', $produk['id']) }}">
                    @include('components.elevated-btn', [
                        'label' => 'Add Review',
                        'type' => 'button',
                    ])

                </a>
            </div>


        </div>
    </div>

    @include('components.footer')
@endsection
