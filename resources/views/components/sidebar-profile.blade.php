<div class="w-[25%] pe-2">

    <div class="mt-5 flex flex-col items-start">

        @if (Auth::user()->admin)
            <a href="{{ route('admin.home') }}">
                @include('components.text-btn', [
                    'label' => 'Home',
                    'type' => 'button',
                    'color' => 'green',
                ])
            </a>
        @endif
        <a href="{{ route('user.profile', Auth::user()->username) }}" class="sub-menu profile">
            @include('components.text-btn', [
                'label' => 'My Profile',
                'type' => 'button',
                'color' => 'green',
            ])
        </a>

        <a href="{{ route('user.profile.edit') }}" class="sub-menu edit">
            @include('components.text-btn', [
                'label' => 'Edit Profile',
                'type' => 'button',
                'color' => 'green',
            ])
        </a>

        <div class=" w-full p-3">
            <hr class="border">

        </div>
        <a href="{{ route('logout') }}">
            @include('components.text-btn', [
                'label' => 'Logout',
                'type' => 'button',
                'color' => 'green',
            ])
        </a>
    </div>
</div>
