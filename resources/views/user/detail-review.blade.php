@extends('layouts.global')
@section('content')
    @include('components.header-user')

    <div class="px-14 flex mb-10">
        @include('components.sidebar-reviews')

        <div class="w-[75%] py-2 ps-3 flex flex-col">
            @include('components.review-account')

            <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati itaque alias praesentium
                assumenda, iste
                odit corrupti ipsum voluptatibus. Sed maiores odit quaerat aliquid id dolorum culpa eveniet in quidem,
                reprehenderit dolor laboriosam quae excepturi facere porro, veritatis temporibus dolorem repudiandae atque
                molestias obcaecati ad! Esse doloribus, modi nobis fugiat nihil, beatae quas accusantium veritatis
                aspernatur reprehenderit pariatur mollitia, qui molestiae. Placeat sint eveniet aliquid hic dolores
                excepturi, fugiat amet reiciendis deserunt dolorem reprehenderit cum officiis ex nemo corrupti accusantium
                quaerat impedit voluptatem blanditiis. Tempore deleniti rerum aperiam maxime fuga beatae, sequi amet, odit
                voluptate soluta nostrum sit id molestias vero!</p>

            {{-- skincare yang direview --}}
            <a href="{{ route('user.skincares') }}"
                class="border border-medium-forest-green grid grid-cols-4 h-[150px] rounded-md gap-5 mt-3">
                {{-- gambar skincare --}}
                <div class="bg-light-slate-grey rounded-s-md">
                </div>

                <div class="col-span-3 py-2">
                    <h2 class="text-2xl">Nama Skincare</h2>
                    <p>Merk skincare</p>
                    <p class="text-light-slate-grey">Jenis skincare</p>
                </div>

            </a>

            {{-- kolom komentar --}}
            <h2 class="py-5 mt-5"> Comments (3)</h2>
            <div class="flex">

                <div class="w-24 flex justify-center">
                    <div class="rounded-full bg-black w-10 h-10"></div>
                </div>

                <div class="w-full">
                    <p class="text-sm text-light-slate-grey">Username</p>
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

            <hr class="border my-5">

            <div class="flex">

                <div class="w-24 flex justify-center">
                    <div class="rounded-full bg-black w-10 h-10"></div>
                </div>

                <div class="w-full">
                    <p class="text-sm text-light-slate-grey">Username</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem, enim! Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Ex, nobis itaque quasi quia id perferendis quo architecto facilis
                        inventore beatae?</p>
                </div>
            </div>

            <hr class="border my-5">
        </div>

    </div>
    @include('components.footer')

    <script src=></script>
@endsection
