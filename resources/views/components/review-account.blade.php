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
            {{ date('d M Y h.i', strtotime($review['created_at'])) }}</p>
    </div>

</a>
