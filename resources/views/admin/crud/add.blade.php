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
            <p class="font-bold text-2xl">ADD Products</p>

            {{-- contents --}}

            <div class="w-[100%] py-2 ps-3">
                <form action="{{ route('admin.store') }}" method="POST">
                    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
                        @csrf
                        @if (session('error'))
                            <div class="mb-6">
                                <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                                    <p class="text-red-500">
                                        {{ session('error') }}
                                    </p>
                                </div>
                            </div>
                        @endif
                        <!-- Pesan success -->
                        @if (session('success'))
                            <div class="mb-6">
                                <div class="p-2 rounded-sm bg-green-100 ring-1 text-center ring-green-500">
                                    <p class="text-green-500">
                                        {{ session('success') }}
                                    </p>
                                </div>
                            </div>
                        @endif

                        <!-- Nama Produk -->
                        <div class="mb-4">
                            <label for="nama_produk" class="block text-gray-700 font-bold mb-2">Nama Produk:</label>
                            <input type="text" id="nama_produk" name="nama_produk"
                                class="w-full p-2 border border-gray-300 rounded">
                        </div>

                        <!-- Jenis -->
                        <div class="mb-4">
                            <label for="jenis" class="block text-gray-700 font-bold mb-2">Jenis:</label>
                            <select id="jenis" name="jenis" class="w-full p-2 border border-gray-300 rounded">
                                <option value="Moisturizer">Moisturizer</option>
                                <option value="Facial Wash">Facial Wash</option>
                                <option value="Serum">Serum</option>
                                <option value="Sunscreen">Sunscreen</option>
                                <option value="Exfoliating Scrub">Exfoliating Scrub</option>
                            </select>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-4">
                            <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
                            <textarea id="deskripsi" name="deskripsi" rows="3" class="w-full p-2 border border-gray-300 rounded"></textarea>
                        </div>

                        <!-- Merk -->
                        <div class="mb-4">
                            <label for="merk" class="block text-gray-700 font-bold mb-2">Merk:</label>
                            <input type="text" id="merk" name="merk"
                                class="w-full p-2 border border-gray-300 rounded">
                        </div>

                        <!-- Gambar -->
                        <div class="mb-4">
                            <label for="gambar" class="block text-gray-700 font-bold mb-2">Gambar:</label>
                            <input type="file" id="gambar" name="gambar"
                                class="w-full p-2 border border-gray-300 rounded">
                        </div>

                        <!-- Tombol Add -->
                        <div class="mb-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
