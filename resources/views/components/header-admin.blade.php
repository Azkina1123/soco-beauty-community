<header class="w-full flex justify-between items-center px-14 py-5">

    <div class="w-[25%] font-bold text-xl">
        <a href="{{ route('user.home') }}"> SOCO </a>
    </div>

    <div class="w-[50%] flex justify-end items-center">
        <a href="{{ route('admin.home') }}" class="menu-home me-5">
            @include('components.text-btn', ['label' => 'Home', 'type' => 'button'])
        </a>

        <a class="menu-skincares me-5">
            @include('components.text-btn', ['label' => 'Account', 'type' => 'button'])
        </a>

        <a class="menu-skincares me-5">
            @include('components.text-btn', ['label' => 'Produk', 'type' => 'button'])
        </a>

        <a class="menu-skincares me-5">
            @include('components.text-btn', ['label' => 'Review', 'type' => 'button'])
        </a>

        <a href="{{ route('user.profile') }}"
            class="menu-profile flex justify-end items-center text-light-slate-grey hover:text-cool-blue-hover focus:text-cool-blue-click">
            <p class="">{{ Auth::user()->username }}</p>
            <div class="rounded-full bg-black w-12 h-12 ms-5"></div>
        </a>
    </div>



</header>
