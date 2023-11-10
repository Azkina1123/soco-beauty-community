@extends('layouts.global')

@section('content')
    @include('components.header-user')
    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-reviews')

        <div class="w-[75%] py-2 ps-3 flex flex-col">
            <h1 class="text-2xl font-bold text-medium-forest-green mb-2">Write your Review</h1>

            @include('components.produk-banner', [
                'nama_produk' => $produk['nama_produk'],
                'merk' => $produk['merk'],
                'jenis' => $produk['jenis'],
                'gambar' => $produk['gambar'],
            ])

            <form action="{{ route('user.reviews.add.action', $produk['id']) }}" method="post"
                class="flex flex-col gap-2 mt-2">
                @csrf
                @include('components.textarea', [
                    'name' => 'isi',
                    'placeholder' => 'Insert your review here',
                    'required' => true,
                ])

                <div class="flex justify-end">
                    <div class="w-20">
                        @include('components.elevated-btn', [
                            'label' => 'Submit',
                            'type' => 'submit',
                        ])
                    </div>

                </div>

            </form>


        </div>
    </div>
    @include('components.footer')
@endsection
