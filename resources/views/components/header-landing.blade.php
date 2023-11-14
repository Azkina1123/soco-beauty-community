    <header class="w-[full] flex justify-between items-center px-14 pt-4 pb-2">

        <div class="lg:w-[20%] flex justify-around text-lg">
            <a href="{{ route('landing') }}" class="hover:text-cyan-blue me-5">Home</a>
            <a href="{{ route('about') }}" class="hover:text-cyan-blue">About</a>
        </div>

        <div class="sm:w-[20%] font-bold text-lg flex flex-col justify-center items-center">
            <img src="{{ asset('assets/images/soco.png') }}" alt="logo-soco" class="w-7">
            <a href="{{ route('landing') }}"> SOCO </a>
        </div>

        <div class="lg:w-[20%] flex justify-around text-lg">
            <a href="{{ route('login') }}" class="hover:text-cyan-blue me-5">Login</a>
            <a href="{{ route('sign-up') }}" class="hover:text-cyan-blue">Sign Up</a>
        </div>

    </header>
