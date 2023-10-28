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
            'route' => route('skincares'),
            'color' => 'green',
        ])
        @include('components.text-btn', [
            'label' => 'Facial Wash',
            'route' => route('skincares'),
            'color' => 'green',
        ])
        @include('components.text-btn', [
            'label' => 'Toner',
            'route' => route('skincares'),
            'color' => 'green',
        ])
        @include('components.text-btn', [
            'label' => 'Serum',
            'route' => route('skincares'),
            'color' => 'green',
        ])
        @include('components.text-btn', [
            'label' => 'Moisturizer',
            'route' => route('skincares'),
            'color' => 'green',
        ])
        @include('components.text-btn', [
            'label' => 'Sunscreen',
            'route' => route('skincares'),
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
