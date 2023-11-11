@extends('layouts.global')

@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-profile')

        {{-- detail profile --}}
        <div class="w-[75%] py-2 ps-3 ">
            <div class="grid grid-cols-4">
                <div class="flex justify-center items-center">
                    <div class="rounded-full bg-black w-24 h-24 me-5 bg-cover bg-center"
                        style="background-image: url('{{ asset('assets/users/' . $user['gambar']) }}')"></div>
                </div>

                <div class="col-span-3 h-[120px] flex flex-col justify-between">
                    <p class="text-2xl">{{ $user['username'] }}</p>
                    <p class="text-xl">{{ $user['nama_lengkap'] }}</p>

                    <div class="flex flex-col mt-5">
                        <p>{{ $countRev }} Reviews | {{ $countCom }} Comments</p>
                        <p class="text-light-slate-grey text-sm">Joined at
                            {{ date('d M Y H.i', strtotime($user['created_at'])) }}
                        </p>
                    </div>

                </div>

            </div>

            <hr class="border my-5">

            <div class="">
                <h2 class="font-bold text-xl mb-3">Recent Reviews</h2>

                <div class="grid grid-cols-2 gap-5">
                    @foreach ($user['review'] as $review)
                        @include('components.review-card')
                    @endforeach

                </div>

            </div>
        </div>



    </div>


    @include('components.footer')
@endsection
