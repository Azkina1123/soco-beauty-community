<header class="w-full flex justify-between items-center px-14 py-5 bg-blue-500">
    <div class="sm:w-[6%] font-bold text-lg flex flex-col items-center">
        <img src="{{ asset('assets/images/soco.png') }}" alt="logo-soco" class="w-7">
        <a href="{{ route('landing') }}"> SOCO </a>
    </div>

    <div class="w-[50%] flex justify-end items-center">
        <a href=" {{ route('user.profile', Auth::user()->username) }}"
            class="menu-profile flex justify-end items-center text-white font-medium hover:text-cool-blue-hover focus:text-cool-blue-click">
            <p class="username">{{ Auth::user()->username }}</p>
            <div class="rounded-full bg-black w-12 h-12 ms-5 bg-cover bg-center"
                style="background-image: url('{{ asset('assets/users/' . Auth::user()->gambar) }}')"></div>
        </a>
    </div>
</header>

<div class=" w-full p-3"></div>
