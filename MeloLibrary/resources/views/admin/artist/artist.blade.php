@extends('layouts.dashboard')

@section('content')
<div class="p-4 sm:ml-64 mt-20">
<div class="flex justify-end w-full"> 
    <a href="{{ url('/artist/create')}}" class="focus:outline-none text-red-800 bg-white hover:bg-red-800 hover:text-white focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2  border border-red-700">Add New Song</a>
</div>
        @if(session('success'))
        <span class="w-full flex justify-center"><div class="p-4 w-[40%] text-green-600 font-bold bg-green-100 rounded-lg">
            {{ session('success') }}
        </div> </span>
        @endif
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
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artists as $artist)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="h-24 w-24 rounded-full" src="{{asset('uploads')}}/{{$artist->image}}"/>
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
                        <td class=" px-6 py-4 text-red-800">
                                <a href="{{ route('artist.edit', $artist->id) }}">Edit</a>
                                <form class="px-4" action="{{ route('artist.destroy', $artist->id) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-800">Delete</button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection