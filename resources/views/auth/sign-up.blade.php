@extends('layouts.global')

@section('content')
    <div class="flex h-[100%]">

        <div style="background-image: url({{ asset('assets/images/login.jpg') }})" class="w-[40%] bg-cover bg-right">
        </div>

        <div class="ps-24 p-10 w-[60%] flex flex-col justify-center">

            <form action="{{ route('sign-up.action') }}" method="post" enctype="multipart/form-data"
                class="sm:w-[70%] lg:w-[50%]">
                @csrf
                <h1 class="text-3xl mb-1">Create an Account</h1>
                <p class="">Let's start your journey soon!</p>

                {{-- alerts berhasil atau tidak --}}

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

                <div class=" mb-4 mt-12">
                    <label for="gambar" class="font-bold"> Photo </label>
                    <input type="file" name="gambar" id="gambar" required accept="image/png, image/jpeg"
                        class="outline-0 rounded-md mt-2 px-3 py-2 w-full bg-transparent ring-1 ring-light-slate-grey focus:ring-2 focus:ring-cyan-blue">
                </div>

                <div class="mb-4">
                    <label for="username" class="font-bold"> Username </label>
                    @include('components.input', [
                        'name' => 'username',
                        'placeholder' => 'Enter Username',
                        'type' => 'text',
                        'required' => true,
                    ])
                </div>
                <div class="mb-4">
                    <label for="nama_lengkap" class="font-bold"> Full Name </label>
                    @include('components.input', [
                        'name' => 'nama_lengkap',
                        'placeholder' => 'Enter Full Name',
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

                <div class="mb-4">
                    <label for="confirm" class="font-bold"> Confirm Password </label>
                    @include('components.input', [
                        'name' => 'confirm',
                        'placeholder' => 'Enter Confirm Password',
                        'type' => 'password',
                        'required' => true,
                    ])
                </div>


                <div class="grid grid-cols-2 gap-3 mt-8">

                    <a href="{{ route('login') }}">
                        @include('components.outlined-btn', ['label' => 'Login', 'type' => 'button'])
                    </a>

                    @include('components.elevated-btn', ['label' => 'Sign Up', 'type' => 'submit'])
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
