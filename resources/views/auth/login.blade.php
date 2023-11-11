@extends('layouts.global')

@section('content')
    <div class="flex">

        <div style="background-image: url({{ asset('assets/images/login.jpg') }})" class="w-[40%] h-screen bg-cover bg-right">
        </div>

        <div class="ps-24  w-[60%] flex flex-col justify-center">

            <form action="{{ route('login.action') }}" method="POST" enctype="multipart/form-data"
                class="sm:w-[70%] lg:w-[50%]">
                @csrf
                <h1 class="text-3xl mb-1">Welcome Back!</h1>
                <p class="">Access your latest skincare information.</p>

                <div class="mb-4 mt-10">
                    @if (session('success'))
                        @include('components.alert', [
                            'title' => 'SUCCESS',
                            'content' => session('success'),
                            'type' => 'success',
                        ])
                    @elseif (session('error'))
                        @include('components.alert', [
                            'title' => 'FAILED',
                            'content' => session('error'),
                            'type' => 'error',
                        ])
                    @endif

                    <label for="username" class="font-bold"> Username </label>
                    @include('components.input', [
                        'name' => 'username',
                        'placeholder' => 'Enter Username',
                        'type' => 'text',
                        'required' => true,
                    ])

                </div>

                <div class="mb-4">
                    <label for="password" class="font-bold"> Password </label>
                    @include('components.input', [
                        'name' => 'password',
                        'placeholder' => 'Enter Password',
                        'type' => 'password',
                        'required' => true,
                    ])
                </div>


                <div class="grid grid-cols-2 gap-3 mt-8">

                    @include('components.elevated-btn', ['label' => 'Login', 'type' => 'submit'])

                    <a href="{{ route('sign-up') }}">
                        @include('components.outlined-btn', [
                            'label' => 'Sign Up',
                            'type' => 'button',
                        ])
                    </a>
                </div>

                <div class="mt-4 text-center">
                    <a href="{{ route('landing') }}">
                        @include('components.text-btn', [
                            'label' => 'Back to Home',
                            'type' => 'button',
                        ])
                    </a>
                </div>


        </div>
        </form>

    </div>

    </div>
@endsection
