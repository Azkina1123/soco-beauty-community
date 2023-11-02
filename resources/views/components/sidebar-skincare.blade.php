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
        <a href="">
            @include('components.text-btn', [
                'label' => 'All',
                'type' => 'button',
                'color' => 'green',
            ])

        </a>

        <a href="">
            @include('components.text-btn', [
                'label' => 'Facial Wash',
                'type' => 'button',
                'color' => 'green',
            ])

        </a>
        <a href="">
            @include('components.text-btn', [
                'label' => 'Toner',
                'type' => 'button',
                'color' => 'green',
            ])

        </a>

        <a href="">
            @include('components.text-btn', [
                'label' => 'Serum',
                'type' => 'button',
                'color' => 'green',
            ])

        </a>

        <a href="">
            @include('components.text-btn', [
                'label' => 'Moisturizer',
                'type' => 'button',
                'color' => 'green',
            ])

        </a>

        <a href="">
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
