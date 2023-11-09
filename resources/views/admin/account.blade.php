@extends('layouts.global')

@section('content')
    @include('components.header-admin')

    <div class="px-14 flex mb-10">

        {{-- sidebar --}}
        @include('components.sidebar-admin')

        <div class="w-[75%] py-2 ps-3 flex flex-col">
            <div class=" w-full p-3">
                <hr class="border">
            </div>
            <p class="font-bold text-2xl text-blue-500">ACCOUNT PAGE</p>

            {{-- tabel akun --}}
            <div class="py-8">
                <div class="max-w-7xl mx-auto">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <table class="min-w-full divide-y divide-blue-500">
                            <thead class="bg-blue-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-white uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-white uppercase tracking-wider">
                                        USERNAME
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-white uppercase tracking-wider">
                                        FULL NAME
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($account as $acc)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $acc->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $acc->username }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $acc->nama_lengkap }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('components.footer')
@endsection
