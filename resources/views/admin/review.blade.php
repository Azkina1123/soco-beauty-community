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
            <p class="font-bold text-2xl  text-blue-500">REVIEW PAGE</p>

            <div class=" w-full p-3"></div>


            {{-- sess --}}
            @if (session('success'))
                @include('components.alert', [
                    'type' => 'success',
                    'title' => 'SUCCESS',
                    'content' => session('success'),
                ])
            @elseif (session('failed'))
                @include('components.alert', [
                    'type' => 'error',
                    'title' => 'FAILED',
                    'content' => session('failed'),
                ])
            @endif

            @foreach ($review as $rev)

                {{-- content --}}
                <div class="p-3 border border-medium-forest-green border-opacity-50 rounded-md">

                    {{-- akun yang melakukan review --}}
                    <div class="flex justify-between">
                        <div class="flex flex-col">
                            <h1>{{ $rev->user ? $rev->user->username : 'Unknown User' }}</h1>
                            <p class="text-light-slate-grey text-xs">Created at
                                {{ $rev->created_at }}</p>
                        </div>

                        <form action="{{route('admin.review.delete', $rev->id)}}" method="post">
                        @csrf
                        <a onclick="return confirm('Are you sure you want to delete your review?')">
                            <button class="rounded-md bg-danger p-2 w-10 h-fit">
                                <img src="{{ asset('assets/images/delete.svg') }}" alt="" class="">
                            </button>
                        </a>
                    </form>
                    </div>


                    {{-- banner product --}}
                    <div class="mt-3 flex flex-col">
                        <a class="border border-oasis bg-oasis bg-opacity-20 rounded-md mt-3 flex p-2 gap-3">
                            {{-- gambar skincare --}}
                            <div class="bg-light-slate-grey rounded-s-md w-[100px] h-[100px] bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/skincares/' . $rev->produk->gambar) }}')">
                            </div>
                            {{-- informasi produk --}}
                            <div class="py-2 text-ellipsis whitespace-nowrap w-[70%]">
                                <h2 class="text-xl mb-1 truncate">{{ $rev->produk->nama_produk }}</h2>
                                <p class="mb-1">{{ $rev->produk->merk }}</p>
                                <p class="text-light-slate-grey">{{ $rev->produk->jenis }}</p>
                            </div>
                        </a>

                        {{-- isi review skincare --}}
                        <div class="flex flex-col h-full justify-between">
                            <p class=" h-[100px] overflow-hidden text-ellipsis py-2">
                                {{ $rev->isi }}
                            </p>

                            <div class="flex flex-row justify-between items-center">
                                <p class="text-light-slate-grey w-[50%]">{{ count($rev->komentar) }} Comments</p>
                                {{-- <a href="{{ route('admin.review.comments', $rev->id) }}"> --}}
                                <a href="{{ route('admin.review.detail', $rev->id) }}">
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
            @endforeach

        </div>
    </div>

    @include('components.footer')
@endsection
