@extends('layouts.dashboard')

@section('content')
<div class="p-4 sm:ml-64 mt-20">
    @if(session('success'))
        <span class="w-full flex justify-center"><div class="p-4 w-[40%] text-green-600 font-bold bg-green-100 rounded-lg">
            {{ session('success') }}
        </div> </span>
        @endif
<div class="flex justify-between items-center">
    <div class="flex flex-col w-1/3 justify-center items-center">
        <img class="h-24 w-24 rounded-full" src="{{asset('uploads')}}/{{$band->image}}"/>
        <h5 class="py-4 font-bold text-red-700 text-lg">{{$band->name}}</h5>
    </div>
    <form action="{{route('band.add',$band->id)}}" class="w-2/3 flex justify-around items-center">
        @csrf
        @method('POST')
        <div class="w-3/4">
            <div class="flex w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">
                <select
                  id="select-artist"
                  name="artist[]"
                  multiple
                  placeholder="Select Artists..."
                  autocomplete="off"
                  class="block w-full rounded-sm cursor-pointer focus:outline-none"
                  multiple
                >
                @foreach($singers as $singer)
                  @foreach ($artists as $artist)
                  @if($singer->id != $artist->id)
                     <option value="{{$singer->id}}">{{$singer->name}}</option> 
                  @endif
                  @endforeach
                @endforeach
                </select>
              </div>
            </div>
        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Add member</button>    
    </form>
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
                        <th scope="col" class="px-6 py-3">
                            Actions
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
                        <td class=" px-6 py-4 text-red-800">
                                <form class="px-4" action="{{route('band.remove',$band->id)}}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('POST')
                                    <input class="hidden" name="artist" value="{{$artist->id}}"/>
                                    <button type="submit" class="text-red-800">Remove</button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection