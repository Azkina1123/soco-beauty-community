
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
            <p class="font-bold text-2xl">PRODUCT PAGE</p>

            <div class=" w-full p-3"></div>

            @foreach($product as $pro)
            {{-- produk --}}
            <div class="p-3 border border-medium-forest-green border-opacity-50 rounded-md">
                <div class="flex items-center space-x-2">
                    <a href="">
                        <i class="fas fa-edit text-blue-500 text-xl"></i>
                    </a>
                    <a href="">
                        <i class="fas fa-trash text-red-500 text-xl"></i>
                    </a>
                </div>

                <h1 class="text-lg font-bold"> {{ $pro->nama_produk }}</h1>

                <div class="mt-3 flex flex-col">

                    {{-- gambar product --}}
                    <div class="bg-light-slate-grey rounded-md h-[200px]">
                        <img src="{{ asset('public/assets/skincares/' . $pro->gambar) }}" alt="Product Image">
                    </div>

                    <div class=" w-full p-2"></div>


                    <div class="flex flex-col h-full justify-between">
                        <table class="w-full border-collapse border border-medium-forest-green border-opacity-50">
                            <thead>
                                <tr class="bg-slate-200">
                                    <th class="border border-medium-forest-green border-opacity-50 p-2">Merk</th>
                                    <th class="border border-medium-forest-green border-opacity-50 p-2">Jenis</th>
                                    <th class="border border-medium-forest-green border-opacity-50 p-2">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="border border-medium-forest-green border-opacity-50 p-2">{{ $pro->merk }}</td>
                                    <td class="border border-medium-forest-green border-opacity-50 p-2">{{ $pro->jenis }}</td>
                                    <td class="border border-medium-forest-green border-opacity-50 p-2">{{ $pro->deskripsi }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <div class=" w-full p-4"></div>
            @endforeach

        </div>
    </div>

    @include('components.footer')
@endsection
