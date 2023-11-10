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

            @if (session('success'))
                @include('components.alert', [
                    'type' => 'success',
                    'title' => 'SUCCESS',
                    'content' => session('success'),
                ])
            @elseif (session('failed'))
                @include('components.alert', [
                    'type' => 'error',
                    'title' => 'FAILED',
                    'content' => session('failed'),
                ])
            @endif

            <div class="flex">

                <div class="w-24 flex justify-center">
                    <div class="rounded-full bg-black w-10 h-10 bg-cover bg-center"
                        style="background-image: url('{{ asset('assets/users/' . Auth::user()->gambar) }}')"></div>
                </div>

                <div class="w-full">
                    <p class="text-sm text-light-slate-grey">{{ Auth::user()->username }}</p>
                    <form action="{{ route('user.comments.addAction', $review['id']) }}" method="post"
                        class="flex flex-col">
                        @csrf
                        @include('components.textarea', [
                            'name' => 'isi',
                            'placeholder' => 'Insert your comment here',
                            'required' => true,
                        ])

                        <div class="w-[90px] self-end mt-2">
                            @include('components.elevated-btn', [
                                'label' => 'Submit',
                                'type' => 'submit',
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
                            {{ date('d M Y H.i', strtotime($komentar['created_at'])) }} </p>
                        <p>{{ $komentar['isi'] }}</p>
                    </div>

                    @if ($komentar['user_id'] == Auth::user()->id)
                        <a href="{{ route('user.comments.deleteAction', [
                            'idReview' => $review['id'],
                            'idComment' => $komentar['id'],
                        ]) }}"
                            onclick="return confirm('Are you sure you want to delete your comment?')">
                            <button class="rounded-md bg-danger p-2 w-10 h-fit">
                                <img src="{{ asset('assets/images/delete.svg') }}" alt="" class="">
                            </button>
                        </a>
                    @endif
                </div>
            @endforeach



        </div>

    </div>
    @include('components.footer')

    <script src=></script>
@endsection
