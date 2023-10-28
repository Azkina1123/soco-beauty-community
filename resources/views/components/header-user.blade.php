<header class="w-full flex justify-between items-center px-14 py-5">

    <div class="w-[25%] font-bold text-xl">
        <a href="{{ route('home') }}"> SOCO </a>
    </div>

    <div class="w-[50%] flex justify-end items-center">
        <div class="me-5">

            @include('components.text-btn', ['label' => 'Home', 'route' => route('home')])

        </div>
        <div class="me-5">
            @include('components.text-btn', ['label' => 'Skincares', 'route' => route('skincares')])
        </div>

        <a href="{{ route('profile') }}"
            class="flex justify-end items-center text-light-slate-grey hover:text-cool-blue-hover focus:text-cool-blue-click">
            <p class="">Username</p>
            <div class="rounded-full bg-black w-12 h-12 ms-5"></div>
        </a>
    </div>



</header>
