@extends('layouts.global')

@section('content')
    <div class="flex h-screen">

        <div style="background-image: url({{ asset('assets/images/login.jpg') }})" class="w-[40%] h-[100%] bg-cover bg-right">
        </div>

        <div class="ps-24  w-[60%] flex flex-col justify-center">

            <form action="" class="sm:w-[70%] lg:w-[50%]">
                <h1 class="text-3xl mb-1">Create an Account</h1>
                <p class="">Let's start your journey soon!</p>

                <div class="flex flex-col items-center justify-center mb-4 mt-12">
                    <div class="rounded-full bg-cyan-blue bg-opacity-30 w-20 h-20 text-2xl flex justify-center items-center">
                        +
                    </div>
                    <input type="file" name="gambar" id="gambar" class="w-full">

                </div>

                <div class="mb-4">
                    <label for="username" class="font-bold"> Username </label>
                    @include('components.text-btn', [
                        'name' => 'username',
                        'placeholder' => 'Enter Username',
                        'type' => 'text',
                    ])

                </div>
                <div class="mb-4">
                    <label for="fullname" class="font-bold"> Full Name </label>
                    @include('components.text-field', [
                        'name' => 'fullname',
                        'placeholder' => 'Enter Full Name',
                        'type' => 'text',
                    ])

                </div>

                <div class="mb-4">
                    <label for="password" class="font-bold"> Password </label>
                    @include('components.text-field', [
                        'name' => 'password',
                        'placeholder' => 'Enter Password',
                        'type' => 'password',
                    ])
                </div>

                <div class="mb-4">
                    <label for="confirm" class="font-bold"> Confirm Password </label>
                    @include('components.text-field', [
                        'name' => 'confirm',
                        'placeholder' => 'Enter Confirm Password',
                        'type' => 'password',
                    ])
                </div>


                <div class="grid grid-cols-2 gap-3 mt-8">

                    @include('components.outlined-btn', ['label' => 'Login', 'route' => route('login')])
                    @include('components.elevated-btn', ['label' => 'Sign Up', 'route' => '/'])
                </div>

                <div class="mt-4 text-center">
                    @include('components.text-button', [
                        'label' => 'Back to Home',
                        'route' => route('landing'),
                    ])
                </div>



        </div>
        </form>

    </div>

    </div>
@endsection
