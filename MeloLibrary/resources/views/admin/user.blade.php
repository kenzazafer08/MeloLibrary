@extends('layouts.dashboard')

@section('content')
<div class="p-4 sm:ml-64 mt-20">
<div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Number of playlists
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Number of likes
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->email }}
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                    <td class="px-6 py-4">
                        0
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

</div>
@endsection