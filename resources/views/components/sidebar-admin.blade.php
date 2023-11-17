<div class="w-[25%] pe-2">

    <div class="mt-5 flex flex-col items-start">

        <div class= "flex flex-row px-4 items-center justify-between w-[45%]">
            <i class="fa-solid fa-user-secret fa-xl"></i>
            <h1 class="font-bold">ADMIN</h1>
        </div>


        <div class=" w-full p-3">
            <hr class="border">
        </div>



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
