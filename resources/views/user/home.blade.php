@extends('layouts.global')

@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-reviews')

        <div class="w-[75%] py-2 ps-3 flex flex-col">

            <a href="{{ route('user.reviews.add.select-skincare') }}" class="mb-5">
                @include('components.outlined-btn', [
                    'label' => 'Add New Review +',
                    'type' => 'button',
                ])
            </a>

            @if (session('success'))
                @include('components.alert', [
                    'title' => 'SUCCESS',
                    'content' => session('success'),
                    'type' => 'success',
                ])
            @elseif(session('failed'))
                @include('components.alert', [
                    'title' => 'Failed',
                    'content' => session('failed'),
                    'type' => 'error',
                ])
            @endif

            @if (isset($search))
                <p class="mb-3">Search results: {{ $search }}</p>
            @endif

            @if (empty($reviews['data']))
                <p class="text-center mt-16">No review has been added yet.</p>
            @endif


            {{-- reviews --}}
            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-5">

                @foreach ($reviews['data'] as $review)
                    @include('components.review-card', ['review' => $review])
                @endforeach
            </div>

        </div>
    </div>

    @include('components.footer')
@endsection
