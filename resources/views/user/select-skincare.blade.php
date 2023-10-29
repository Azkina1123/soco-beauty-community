@extends('layouts.global')

@section('content')
    @include('components.header-user')
    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-reviews')

        <div class="w-[75%] px-2 flex flex-col">
            <div class="flex justify-between">
                <h1 class="text-2xl font-bold text-medium-forest-green mb-2">Select Skincare to Review</h1>
                @include('components.elevated-btn', ['label' => 'Next', 'route' => '#'])
            </div>

            @include('components.input', [
                'name' => 'searchSkincare',
                'placeholder' => 'Enter skincare name here',
                'type' => 'search',
            ])

            {{-- pilihan skincare --}}
            <div class="mt-5">

                {{-- produk skincare --}}
                @for ($i = 0; $i < 5; $i++)
                    <div class="w-full flex mb-3">
                        <div class="w-[5%] flex justify-center">
                            <input type="radio" name="selected-skincare" id="selected-skincare">
                        </div>

                        {{-- gambar skincare --}}
                        <div class="w-[15%]  flex justify-center">
                            <div class="w-20 h-20 bg-light-slate-grey rounded-md"></div>
                        </div>

                        <div class="w-[40%] ps-5 flex items-center">Nama Skincare</div>
                        <p class="w-[20%] flex items-center">Merk Skincare</p>
                        <p class="w-[20%] flex items-center">Jenis Skincare</p>
                    </div>
                @endfor
            </div>

        </div>
    </div>
    @include('components.footer')
@endsection
