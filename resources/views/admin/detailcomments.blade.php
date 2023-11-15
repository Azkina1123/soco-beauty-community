@extends('layouts.global')

@section('content')
    @include('components.header-admin')

    <div class="px-14 flex mb-10">
        {{-- sidebar --}}
        @include('components.sidebar-admin')

        <div class="w-[75%] py-2 ps-3 flex flex-col">
            <div class=" w-full p-3">
                <hr class="border">
            </div>
            <p class="font-bold text-2xl  text-blue-500">COMMENT PAGE</p>

            <div class=" w-full p-3"></div>

            {{-- content --}}
            <div class="p-3 border border-medium-forest-green border-opacity-50 rounded-md">

                {{-- akun yang melakukan review --}}
                <div class="flex justify-between">
                        <div class="flex flex-col">
                            <h1>{{ $review->user ? $review->user->username : 'Unknown User' }}</h1>
                            <p class="text-light-slate-grey text-xs">Created at
                                {{ $review->created_at }}</p>
                        </div>

                        <a
                            onclick="return confirm('Are you sure you want to delete your review?')">
                            <button class="rounded-md bg-danger p-2 w-10 h-fit">
                                <img src="{{ asset('assets/images/delete.svg') }}" alt="" class="">
                            </button>
                        </a>
                </div>


                {{-- banner product --}}
                    <div class="mt-3 flex flex-col">
                        <a class="border border-oasis bg-oasis bg-opacity-20 rounded-md mt-3 flex p-2 gap-3">
                            {{-- gambar skincare --}}
                            <div class="bg-light-slate-grey rounded-s-md w-[100px] h-[100px] bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/skincares/' . $review->produk->gambar) }}')">
                            </div>
                            {{-- informasi produk --}}
                            <div class="py-2 text-ellipsis whitespace-nowrap w-[70%]">
                                <h2 class="text-xl mb-1 truncate">{{ $review->produk->nama_produk }}</h2>
                                <p class="mb-1">{{ $review->produk->merk }}</p>
                                <p class="text-light-slate-grey">{{ $review->produk->jenis }}</p>
                            </div>
                        </a>

                        {{-- isi review skincare --}}
                        <div class="flex flex-col h-full justify-between">
                            <p class=" h-[100px] overflow-hidden text-ellipsis py-2">
                                {{ $review->isi }}
                            </p>

                            <div class="flex flex-row justify-between items-center">
                                <p class="text-light-slate-grey w-[50%]">{{ count($review->komentar) }} Comments</p>
                                <a href="{{ route('user.reviews.details', $review->id) }}">
                                    @include('components.text-btn', [
                                        'label' => 'See All the Comment Here',
                                        'type' => 'button',
                                    ])
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-full p-4"></div>
        </div>

        </div>
    </div>

    @include('components.footer')
@endsection
