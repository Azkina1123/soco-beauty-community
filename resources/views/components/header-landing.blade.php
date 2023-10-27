    <header class="w-full flex justify-between items-center px-14 py-5">

        <div class="lg:w-[20%] sm:w-[40%] flex justify-around text-lg">
            <a href="{{ route('landing') }}" class="hover:text-cyan-blue">Home</a>
            <a href="#" class="hover:text-cyan-blue">About</a>
        </div>

        <div class="sm:w-[20%] flex justify-center font-bold text-xl">
            <a href="{{ route('landing') }}"> SOCO </a>
        </div>

        <div class="lg:w-[20%] sm:w-[40%] flex justify-around text-lg">
            <a href="{{ route('login') }}" class="hover:text-cyan-blue">Login</a>
            <a href="{{ route('sign-up') }}" class="hover:text-cyan-blue">Sign Up</a>
        </div>

    </header>
