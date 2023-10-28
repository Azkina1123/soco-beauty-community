@extends('layouts.global')

@section('content')
    @include('components.header-user')
    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-profile')

        <div class="flex flex-col justify-center w-full mb-10">
            <form action="" class="w-[50%] self-center">
                <div class="flex flex-col items-center justify-center mb-4">
                    <div class="rounded-full bg-cyan-blue bg-opacity-30 w-20 h-20 text-2xl flex justify-center items-center">
                        +
                    </div>
                    <input type="file" name="gambar" id="gambar" class="">

                </div>

                <div class="mb-4">
                    <label for="username" class="font-bold"> Username </label>
                    @include('components.input', [
                        'name' => 'username',
                        'placeholder' => 'Enter Username',
                        'type' => 'text',
                    ])

                </div>
                <div class="mb-4">
                    <label for="fullname" class="font-bold"> Full Name </label>
                    @include('components.input', [
                        'name' => 'fullname',
                        'placeholder' => 'Enter Full Name',
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

                <div class="mb-4">
                    <label for="confirm" class="font-bold"> Confirm Password </label>
                    @include('components.input', [
                        'name' => 'confirm',
                        'placeholder' => 'Enter Confirm Password',
                        'type' => 'password',
                    ])
                </div>


                <div class="grid grid-cols-2 gap-3 mt-8">

                    @include('components.elevated-btn', ['label' => 'Cancel', 'route' => route('profile')])
                    @include('components.outlined-btn', [
                        'label' => 'Edit',
                        'route' => route('edit-profile'),
                    ])
                </div>


            </form>
        </div>
        {{-- detail profile --}}




    </div>
    @include('components.footer')
@endsection
