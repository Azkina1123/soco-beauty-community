<div class="w-[25%] px-2">

    <div class="mt-5 flex flex-col items-start">

        @include('components.text-btn', [
            'label' => 'My Profile',
            'route' => route('profile'),
            'color' => 'green',
        ])
        @include('components.text-btn', [
            'label' => 'Edit Profile',
            'route' => route('edit-profile'),
            'color' => 'green',
        ])

        <div class=" w-full p-3">
            <hr class="border">

        </div>
        @include('components.text-btn', [
            'label' => 'Logout',
            'route' => route('landing'),
            'color' => 'green',
        ])
    </div>
</div>
