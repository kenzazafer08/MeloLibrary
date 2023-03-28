@extends('layouts.app')
@section('content')
    <div class="p-4 lg:ml-64 mt-20">
            <form action="{{route('search')}}" method="GET">
                @csrf
                @method('GET')
                <div class="flex">     
                    <div class="relative w-full">
                        <input type="search" name="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-red-500" placeholder="What would you like to listen to?" required>
                        <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-red-700 rounded-r-lg border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>          
            <div class="grid sm:grid-cols-4 grid-cols-1 place-items-center gap-4 my-10 px-10 w-full justify-around "> 
                @foreach ($categorie as $item)
               <a href="{{route('categorie',$item->id)}}"><div class="flex justify-center items-center mb-4 bg-red-800 h-32 w-48 border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="text-center p-4 text-xl font-semibold tracking-tight text-white">{{$item->name}}</h5>
                </div></a>
                @endforeach
                    
            </div>        
    </div>    
@endsection