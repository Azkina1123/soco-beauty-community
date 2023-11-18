@extends('layouts.global')

@section('content')
    @if (Auth::user()->admin)
        @include('components.header-admin')
    @else
        @include('components.header-user')
    @endif
    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-profile')

        <div class="flex flex-col justify-center py-2 ps-3 w-full mb-10">

            <form action="{{ route('user.profile.edit.action') }}" method="POST" enctype="multipart/form-data"
                class="w-[50%] self-center">
                @csrf

                @if (session('success'))
                    @include('components.alert', [
                        'title' => 'SUCCESS',
                        'content' => session('success'),
                        'type' => 'success',
                    ])
                @elseif(session('error'))
                    @include('components.alert', [
                        'title' => 'FAILED',
                        'content' => session('error'),
                        'type' => 'error',
                    ])
                @endif

                <div class="flex flex-col items-center justify-center mb-4">
                    <div class="rounded-full bg-cyan-blue bg-opacity-30 w-20 h-20 text-2xl flex justify-center items-center bg-cover bg-center"
                        style="background-image: url('{{ asset('assets/users/' . Auth::user()->gambar) }}')">

                    </div>
                    <input type="file" name="gambar" id="gambar" class="">

                </div>

                <div class="mb-4">
                    <label for="username" class="font-bold"> Username </label>
                    @include('components.input', [
                        'name' => 'username',
                        'placeholder' => 'Enter Username',
                        'type' => 'text',
                        'required' => true,
                        'value' => Auth::user()->username,
                    ])

                </div>
                <div class="mb-4">
                    <label for="nama_lengkap" class="font-bold"> Full Name </label>
                    @include('components.input', [
                        'name' => 'nama_lengkap',
                        'placeholder' => 'Enter Full Name',
                        'type' => 'text',
                        'required' => true,
                        'value' => Auth::user()->nama_lengkap,
                    ])

                </div>

                <div class="mb-4">
                    <label for="password" class="font-bold"> Password </label>
                    @include('components.input', [
                        'name' => 'password',
                        'placeholder' => 'Enter Password',
                        'type' => 'password',
                        'required' => true,
                        // 'value' => Auth::user()->password,
                    ])
                </div>

                <div class="mb-4">
                    <div class="flex items-baseline">
                        <label for="newPassword" class="font-bold me-2">
                            New Password (Optional)
                        </label>
                        <p class="text-light-slate-grey font-normal text-sm"> Fill in if you want to change your password.
                        </p>

                    </div>
                    @include('components.input', [
                        'name' => 'newPassword',
                        'placeholder' => 'Enter New Password',
                        'type' => 'password',
                        'required' => false,
                        // 'value' => Auth::user()->password,
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

                    <a href="{{ route('user.profile', Auth::user()->username) }}">
                        @include('components.outlined-btn', ['label' => 'Cancel', 'type' => 'button'])
                    </a>
                    @include('components.elevated-btn', [
                        'label' => 'Edit',
                        'type' => 'submit',
                    ])
                </div>


            </form>
        </div>
        {{-- detail profile --}}




    </div>
    @include('components.footer')
@endsection
