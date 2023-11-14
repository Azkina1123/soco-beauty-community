@extends('layouts.global')

@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-profile')

        {{-- detail profile --}}
        <div class="w-[75%] py-2 ps-3 mb-36">
            <div class="grid grid-cols-4">
                <div class="flex justify-center items-center">
                    <div class="rounded-full bg-black w-24 h-24 me-5 bg-cover bg-center"
                        style="background-image: url('{{ asset('assets/users/' . $user['gambar']) }}')"></div>
                </div>

                <div class="col-span-3 h-[120px] flex flex-col {{ !Auth::user()->admin ? 'justify-between' : '' }}">
                    <p class="text-2xl">{{ $user['username'] }}
                        </b> </p>
                    <p class="text-xl">{{ $user['nama_lengkap'] }}</p>

                    @if (!Auth::user()->admin)
                        <div class="flex flex-col mt-5">
                            <p>{{ $countRev }} Reviews | {{ $countCom }} Comments</p>
                            <p class="text-light-slate-grey text-sm">Joined at
                                {{ date('d M Y H.i', strtotime($user['created_at'])) }}
                            </p>
                        </div>
                    @else
                        <p class="font-bold mt-6">Admin</p>
                    @endif

                </div>

            </div>

            @if (!Auth::user()->admin)
                <hr class="border my-5">

                <div class=" w-full ">
                    <h2 class="font-bold text-xl mb-3">Recent Reviews</h2>

                    <div class="grid grid-cols-2 gap-5 ">
                        @if (count($user['review']) == 0)
                            <p class="text-center col-span-2 py-3">You has not reviewed the product yet.</p>
                        @endif
                        @foreach ($user['review'] as $review)
                            @include('components.review-card')
                        @endforeach

                    </div>

                </div>
            @endif

        </div>



    </div>


    @include('components.footer')
@endsection
