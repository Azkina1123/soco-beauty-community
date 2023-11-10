<a href="{{ route('user.skincares') }}" class="border border-oasis bg-oasis bg-opacity-20 rounded-md mt-3 flex p-2 gap-3">
    {{-- gambar skincare --}}
    <div class="bg-light-slate-grey rounded-s-md w-[100px] h-[100px] bg-cover bg-center"
        style="background-image: url('{{ asset('assets/skincares/' . $gambar) }}')">
    </div>

    <div class="py-2 text-ellipsis whitespace-nowrap w-[70%]">
        <h2 class="text-xl mb-1 truncate">{{ $nama_produk }}</h2>
        <p class="mb-1">{{ $merk }}</p>
        <p class="text-light-slate-grey">{{ $jenis }}</p>
    </div>

</a>
