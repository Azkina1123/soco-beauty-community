@extends('layouts.global')
@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">
        @include('components.sidebar-reviews')

        <div class="w-[75%] py-2 ps-3 flex flex-col">
            @include('components.review-account')

            <p class="mt-3">{{ $review['isi'] }}</p>

            {{-- skincare yang direview --}}
            <a href="{{ route('user.skincares') }}"
                class="border border-oasis bg-oasis bg-opacity-20 rounded-md mt-3 flex p-2 h-[120px] gap-3 overflow-hidden text-ellipsis whitespace-nowrap">
                {{-- gambar skincare --}}
                <div class="bg-light-slate-grey rounded-s-md w-[100px] h-[100px] bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/skincares/' . $review['produk']['gambar']) }}')">
                </div>

                <div class="py-2">
                    <h2 class="text-xl mb-1">{{ $review['produk']['nama_produk'] }}</h2>
                    <p class="mb-1">{{ $review['produk']['merk'] }}</p>
                    <p class="text-light-slate-grey">{{ $review['produk']['jenis'] }}</p>
                </div>

            </a>

            {{-- kolom komentar --}}
            <h2 class="py-5 mt-5"> Comments ({{ count($review['komentar']) }})</h2>
            <div class="flex">

                <div class="w-24 flex justify-center">
                    <div class="rounded-full bg-black w-10 h-10 bg-cover bg-center"
                        style="background-image: url('{{ asset('assets/users/' . Auth::user()->gambar) }}')"></div>
                </div>

                <div class="w-full">
                    <p class="text-sm text-light-slate-grey">{{ Auth::user()->username }}</p>
                    <form action="" class="flex flex-col">
                        @include('components.textarea', [
                            'name' => 'comment',
                            'placeholder' => 'Insert your comment here',
                        ])

                        <div class="w-[90px] self-end mt-2">
                            @include('components.elevated-btn', [
                                'label' => 'Submit',
                                'type' => 'button',
                            ])
                        </div>
                    </form>
                </div>
            </div>



            {{-- daftar komentar --}}
            @foreach ($review['komentar'] as $komentar)
                <hr class="border my-5">
                <div class="flex">

                    <div class="w-24 flex justify-center">
                        <div class="rounded-full bg-black w-10 h-10 bg-cover bg-center"
                            style="background-image: url('{{ asset('assets/users/' . $komentar['user']['gambar']) }}')">
                        </div>
                    </div>

                    <div class="w-full">
                        <p class="text-sm text-light-slate-grey">{{ $komentar['user']['username'] }} •
                            {{ date('d M Y h.i', strtotime($komentar['created_at'])) }} </p>
                        <p>{{ $komentar['isi'] }}</p>
                    </div>
                </div>
            @endforeach



        </div>

    </div>
    @include('components.footer')

    <script src=></script>
@endsection
