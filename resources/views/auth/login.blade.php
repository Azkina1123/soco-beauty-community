@extends('layouts.global')

@section('content')
    <div class="flex">

        <div style="background-image: url({{ asset('assets/images/login.jpg') }})" class="w-[40%] h-screen bg-cover bg-right">
        </div>

        <div class="ps-24  w-[60%] flex flex-col justify-center">

            <form action="" class="sm:w-[70%] lg:w-[50%]">
                <h1 class="text-3xl mb-1">Welcome Back!</h1>
                <p class="">Access your latest skincare information.</p>

                <div class="mb-4 mt-12">
                    <label for="username" class="font-bold"> Username </label>
                    @include('components.input', [
                        'name' => 'username',
                        'placeholder' => 'Enter Username',
                        'type' => 'text',
                    ])

                </div>

                <div class="mb-4">
                    <label for="password" class="font-bold"> Password </label>
                    @include('components.input', [
                        'name' => 'password',
                        'placeholder' => 'Enter Password',
                        'type' => 'password',
                    ])
                </div>


                <div class="grid grid-cols-2 gap-3 mt-8">

                    @include('components.elevated-btn', ['label' => 'Login', 'route' => route('home')])
                    @include('components.outlined-btn', [
                        'label' => 'Sign Up',
                        'route' => route('sign-up'),
                    ])
                </div>

                <div class="mt-4 text-center">
                    @include('components.text-btn', [
                        'label' => 'Back to Home',
                        'route' => route('landing'),
                    ])
                </div>


        </div>
        </form>

    </div>

    </div>
@endsection
