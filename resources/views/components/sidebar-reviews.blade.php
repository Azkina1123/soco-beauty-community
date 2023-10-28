        <div class="w-[25%] px-2">
            <form action="" class="px-2">
                @include('components.input', [
                    'type' => 'search',
                    'name' => 'search',
                    'placeholder' => 'Search',
                ])
            </form>

            <div class="mt-5 flex flex-col items-start">

                @include('components.text-btn', [
                    'label' => 'All',
                    'route' => route('home'),
                    'color' => 'green',
                ])
                @include('components.text-btn', [
                    'label' => 'My Reviews',
                    'route' => route('home'),
                    'color' => 'green',
                ])
                <div class=" w-full p-3">
                    <hr class="border">

                </div>
                @include('components.text-btn', [
                    'label' => 'Logout',
                    'route' => route('landing'),
                    'color' => 'green',
                ])
            </div>
        </div>
