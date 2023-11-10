                    <div class="p-3 border border-medium-forest-green border-opacity-50 rounded-md">

                        {{-- akun yg me-review --}}
                        @include('components.review-account')

                        <div class="mt-3 flex flex-col">

                            @include('components.produk-banner', [
                                'nama_produk' => $review['produk']['nama_produk'],
                                'merk' => $review['produk']['merk'],
                                'jenis' => $review['produk']['jenis'],
                                'gambar' => $review['produk']['gambar'],
                            ])

                            {{-- penjelasan skincare --}}
                            <div class="flex flex-col h-full justify-between">
                                <p class=" h-[100px] overflow-hidden text-ellipsis py-2">
                                    {{ $review['isi'] }}
                                </p>

                                <div class="flex flex-row justify-between items-center">
                                    <p class="text-light-slate-grey w-[50%]">{{ count($review['komentar']) }} Comments
                                    </p>
                                    <a href="{{ route('user.reviews.details', $review['id']) }}">
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
