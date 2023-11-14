@extends('layouts.global')
@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">
        @include('components.sidebar-reviews')

        <div class="w-[75%] py-2 ps-3 flex flex-col mb-5">
            @include('components.review-account')

            <p class="mt-3">{{ $review['isi'] }}</p>

            {{-- skincare yang direview --}}
            @include('components.produk-banner', [
                'id' => $review['produk']['id'],
                'nama_produk' => $review['produk']['nama_produk'],
                'merk' => $review['produk']['merk'],
                'jenis' => $review['produk']['jenis'],
                'gambar' => $review['produk']['gambar'],
            ])

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
                    <form action="{{ route('user.comments.add.action', $review['id']) }}" method="post"
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

                    @if ($komentar['user_id'] == Auth::user()->id || Auth::user()->admin)
                        <a href="{{ route('user.comments.delete.action', [
                            'idReview' => $review['id'],
                            'id' => $komentar['id'],
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
