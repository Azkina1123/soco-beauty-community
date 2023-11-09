                    <div class="p-3 border border-medium-forest-green border-opacity-50 rounded-md">

                        {{-- akun yg me-review --}}
                        @include('components.review-account')

                        <div class="mt-3 flex flex-col">
                            @php
                                $gambarSkincare = $review['produk']['gambar'];
                            @endphp

                            <a href="{{ route('user.skincares') }}"
                                class="border border-oasis bg-oasis bg-opacity-20 rounded-md mt-3 flex p-2 h-[120px] bg-">
                                {{-- gambar skincare --}}
                                <div class="bg-light-slate-grey rounded-md w-[30%] h-[100px] me-2 bg-cover"
                                    style="background-image: url('{{ asset('assets/skincares/' . $gambarSkincare) }}')">
                                </div>

                                <div class="py-2 w-[70%]">
                                    <h2 class="text-lg  overflow-hidden text-ellipsis whitespace-nowrap">
                                        {{ $review['produk']['nama_produk'] }}
                                    </h2>
                                    <p class="text-light-slate-grey text-md">Jenis skincare</p>
                                </div>

                            </a>

                            {{-- penjelasan skincare --}}
                            <div class="flex flex-col h-full justify-between">
                                <p class=" h-[100px] overflow-hidden text-ellipsis py-2">
                                    {{ $review['isi'] }}
                                </p>

                                <div class="flex flex-row justify-between items-center">
                                    <p class="text-light-slate-grey w-[50%]">12 Comments</p>
                                    <a href="{{ route('user.review', ['id' => 1]) }}">


                                        @include('components.text-btn', [
                                            'label' => 'See More',
                                            'type' => 'button',
                                            // 'route' => route('detail-review', ['id' => 1]),
                                        ])
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
