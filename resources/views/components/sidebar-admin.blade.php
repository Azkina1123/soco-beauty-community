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

        <a href="{{ route('admin.home') }}">
            @include('components.text-btn', [
                'label' => 'Home',
                'type' => 'button',
                'color' => 'green',
            ])
        </a>
        <a href="{{ route('admin.account') }}">
            @include('components.text-btn', [
                'label' => 'Account',
                'type' => 'button',
                'color' => 'green',
            ])
        </a>
        <a href="{{ route('admin.product') }}">
            @include('components.text-btn', [
                'label' => 'Product',
                'type' => 'button',
                'color' => 'green',
            ])
        </a>
        <a href="{{ route('admin.review') }}">
            @include('components.text-btn', [
                'label' => 'Review',
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
