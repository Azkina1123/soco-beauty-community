        <div class="w-[25%] pe-2">
            <form action="" class="px-2">
                @include('components.input', [
                    'type' => 'search',
                    'name' => 'search',
                    'placeholder' => 'Search',
                    'required' => false,
                ])
            </form>

            <div class="mt-5 flex flex-col items-start">

                <a href="{{ route('user.home') }}" class="sub-menu all">
                    @include('components.text-btn', [
                        'label' => 'All',
                        'type' => 'button',
                        'color' => 'green',
                    ])

                </a>
                <a href="{{ route('user.my-reviews') }}" class="sub-menu my-reviews">
                    @include('components.text-btn', [
                        'label' => 'My Reviews',
                        'type' => 'button',
                        'color' => 'green',
                    ])
                </a>

                <div class=" w-full p-3">
                    <hr class="border">

                </div>

                <a href="{{ route('logout') }}">
                    @include('components.text-btn', [
                        'label' => 'Logout',
                        'type' => 'button',
                        'color' => 'green',
                    ])
                </a>
            </div>
        </div>
