@extends('layouts.global')

@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-reviews')

        <div class="w-[75%] py-2 px-2 flex flex-col">
            @include('components.outlined-btn', [
                'label' => 'Add New Review +',
                'route' => route('select-skincare'),
            ])

            {{-- reviews --}}
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 mt-5">

                @for ($i = 0; $i < 5; $i++)
                    @include('components.review')
                @endfor
            </div>

        </div>
    </div>

    @include('components.footer')
@endsection
