<div class="w-[25%] pe-2 sidebar">
    <form action="{{ route('user.skincares') }}" method="GET" class="px-2 flex items-center justify-between">
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
        <a href="{{ route('user.skincares') }}" class="sub-menu all">
            @include('components.text-btn', [
                'label' => 'All',
                'type' => 'button',
                'color' => 'green',
            ])

        </a>

        <a href="{{ route('user.skincares', ['category' => 'facial-wash']) }}" class="sub-menu fw">
            @include('components.text-btn', [
                'label' => 'Facial Wash',
                'type' => 'button',
                'color' => 'green',
            ])
        </a>

        <a href="{{ route('user.skincares', ['category' => 'toner']) }}" class="sub-menu toner">
            @include('components.text-btn', [
                'label' => 'Toner',
                'type' => 'button',
                'color' => 'green',
            ])

        </a>

        <a href="{{ route('user.skincares', ['category' => 'serum']) }}" class="sub-menu serum">
            @include('components.text-btn', [
                'label' => 'Serum',
                'type' => 'button',
                'color' => 'green',
            ])

        </a>

        <a href="{{ route('user.skincares', ['category' => 'moisturizer']) }}" class="sub-menu moist">
            @include('components.text-btn', [
                'label' => 'Moisturizer',
                'type' => 'button',
                'color' => 'green',
            ])

        </a>

        <a href="{{ route('user.skincares', ['category' => 'sunscreen']) }}" class="sub-menu ss">
            @include('components.text-btn', [
                'label' => 'Sunscreen',
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
