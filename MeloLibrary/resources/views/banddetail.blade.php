@extends('layouts.app')

@section('content')
<div class="p-4 sm:ml-64 mt-20">
<div class="flex justify-between items-center">
    <div class="flex flex-col w-full justify-center items-center">
        <img class="h-24 w-24 rounded-full" src="{{asset('uploads')}}/{{$band->image}}"/>
        <h5 class="py-4 font-bold text-red-700 text-lg">{{$band->name}}</h5>
    </div>
</div>  
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Country
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Birth date
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artists as $artist)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="object-cover h-24 w-24 rounded-full" src="{{asset('uploads')}}/{{$artist->image}}"/>
                        </th>
                        <td class="px-6 py-4">
                            {{ $artist->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $artist->country }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $artist->birthday }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection