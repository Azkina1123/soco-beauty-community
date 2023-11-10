        <div class="w-[25%] pe-2">
            <form action="{{ route('user.reviews.search') }}" method="GET"
                class="px-2 flex items-center justify-between">
                <div class="me-2 w-full">

                    @include('components.input', [
                        'type' => 'search',
                        'name' => 'search',
                        'placeholder' => 'Search',
                        'required' => false,
                    ])
                </div>
                <button class="flex justify-center items-center px-2">
                    <img src="{{ asset('assets/images/search.svg') }}" alt="" class="w-8">
                </button>
            </form>

            <div class="mt-5 flex flex-col items-start">

                <a href="{{ route('user.home') }}" class="sub-menu all">
                    @include('components.text-btn', [
                        'label' => 'All',
                        'type' => 'button',
                        'color' => 'green',
                    ])

                </a>
                <a href="{{ route('user.reviews.my', Auth::user()->username) }}" class="sub-menu my-reviews">
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
