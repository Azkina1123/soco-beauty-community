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
                            <input type="text" id="nama_produk" name="nama_produk" value="{{ $products->nama_produk }}"
                                required class="w-full p-2 border border-gray-300 rounded">
                        </div>

                        <!-- Jenis -->
                        <div class="mb-4">
                            <label for="jenis" class="block text-gray-700 font-bold mb-2">Jenis:</label>
                            <select id="jenis" name="jenis" class="w-full p-2 border border-gray-300 rounded"
                                required>
                                <option
                                    value="Moisturizer"{{ strtolower($products->jenis) == 'moisturizer' ? 'selected' : '' }}>
                                    Moisturizer</option>
                                <option
                                    value="Facial Wash"{{ strtolower($products->jenis) == 'facial wash' ? 'selected' : '' }}>
                                    Facial Wash</option>
                                <option value="Serum" {{ strtolower($products->jenis) == 'serum' ? 'selected' : '' }}>Serum
                                </option>
                                <option value="Sunscreen"
                                    {{ strtolower($products->jenis) == 'sunscreen' ? 'selected' : '' }}> Sunscreen </option>
                                <option value="Toner" {{ strtolower($products->jenis) == 'toner' ? 'selected' : '' }}>Toner
                                </option>
                            </select>
                        </div>


                        <!-- Deskripsi -->
                        <div class="mb-4">
                            <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
                            <textarea id="deskripsi" name="deskripsi" rows="3" required class="w-full p-2 border border-gray-300 rounded">{{ $products->deskripsi }}</textarea>
                        </div>

                        <!-- Merk -->
                        <div class="mb-4">
                            <label for="merk" class="block text-gray-700 font-bold mb-2">Merk:</label>
                            <input type="text" id="merk" name="merk" value="{{ $products->merk }}" required
                                class="w-full p-2 border border-gray-300 rounded">
                        </div>

                        <!-- Gambar -->
                        <div class="mb-4">
                            <label for="gambar" class="block text-gray-700 font-bold mb-2">Gambar:</label>
                            <input type="file" id="gambar" name="gambar" value="{{ $products->gambar }}"
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

    @include('components.footer')
