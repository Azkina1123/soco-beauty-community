                    <div class="p-3 border border-medium-forest-green border-opacity-50 rounded-md">

                        @include('components.review-account')

                        <div class="mt-3 flex flex-col">

                            {{-- gambar skincare --}}
                            <div class="bg-light-slate-grey rounded-md h-[200px]">
                            </div>

                            {{-- penjelasan skincare --}}
                            <div class="flex flex-col h-full justify-between">
                                <p class="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius saepe quisquam
                                    voluptatum
                                    tempora illum perferendis magni, distinctio debitis totam ex.
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
