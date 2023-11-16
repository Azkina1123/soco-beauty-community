<div class="flex justify-between">
    <a href="{{ route('user.profile', ['username' => $review['user']['username']]) }}"
        class="flex items-center hover:text-cool-blue-hover focus:text-cool-blue-click">

        @php
            $gambarProfile = $review['user']['gambar'];
        @endphp
        <div class="rounded-full bg-black w-10 h-10 me-5 bg-cover"
            style="background-image: url('{{ asset('assets/users/' . $gambarProfile) }}')"></div>
        <div class="flex flex-col">
            <p class="">{{ $review['user']['username'] }}</p>
            <p class="text-light-slate-grey text-xs">Created at
                {{ date('d M Y H.i', strtotime($review['created_at'])) }}</p>
        </div>

    </a>

    @if (Auth::user() !== null)
        @if ($review['user_id'] == Auth::user()->id || Auth::user()->admin)
            <a href="{{ route('user.reviews.delete.action', $review['id']) }}"
                onclick="return confirm('Are you sure you want to delete your review?')">
                <button class="rounded-md bg-danger p-2 w-10 h-fit">
                    <img src="{{ asset('assets/images/delete.svg') }}" alt="" class="">
                </button>
            </a>
        @endif
    @endif

</div>
