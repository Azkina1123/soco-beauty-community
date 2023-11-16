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
            <p class="font-bold text-2xl">EDIT Products</p>

            {{-- contents --}}

            <div class="w-[100%] py-2 ps-3">
                <form action="{{ route('admin.crud.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
                        @csrf

                        <!-- Nama Produk -->
                        <div class="mb-4">
                            <label for="nama_produk" class="block text-gray-700 font-bold mb-2">Nama Produk:</label>
                            <input type="text" id="nama_produk" name="nama_produk"  value="{{$products->nama_produk}}"
                                class="w-full p-2 border border-gray-300 rounded">
                        </div>

                        <!-- Jenis -->
                        <div class="mb-4">
                            <label for="jenis" class="block text-gray-700 font-bold mb-2">Jenis:</label>
                            <select id="jenis" name="jenis" class="w-full p-2 border border-gray-300 rounded">
                                <option value="Moisturizer">Moisturizer</option>
                                <option value="Facial Wash">Facial Wash</option>
                                <option value="Serum">Serum</option>
                                <option value="Toner">Toner</option>
                                <option value="Sunscreen">Sunscreen</option>
                            </select>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-4">
                            <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
                            <textarea id="deskripsi" name="deskripsi" rows="3" class="w-full p-2 border border-gray-300 rounded">
                                {{ $products->deskripsi }}
                            </textarea>
                        </div>

                        <!-- Merk -->
                        <div class="mb-4">
                            <label for="merk" class="block text-gray-700 font-bold mb-2">Merk:</label>
                            <input type="text" id="merk" name="merk" value="{{$products->merk}}"
                                class="w-full p-2 border border-gray-300 rounded">
                        </div>

                        <!-- Gambar -->
                        <div class="mb-4">
                            <label for="gambar" class="block text-gray-700 font-bold mb-2">Gambar:</label>
                            <input type="file" id="gambar" name="gambar" value="{{$products->gambar}}"
                                class="w-full p-2 border border-gray-300 rounded">
                        </div>

                        <!-- Tombol Add -->
                        <div class="mb-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                EDIT PRODUCTS
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
