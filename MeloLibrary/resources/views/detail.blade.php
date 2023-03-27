@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-64 mt-20">
<div class="flex justify-between">
    <div class="flex flex-col items-center w-1/3">
    <div class="flex items-center jusify-between">
    <div>
        <img class=" w-48 rounded-full" src="{{asset('uploads')}}/{{$song->Image}}"/>
    <h5 class="py-4 font-bold text-red-700 text-lg text-center">{{$song->Titre}}</h5>
    <div class="flex justify-around items-center">
        <button onclick="playA({{$song->id}})" class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-current">
              <path fill="none" d="M0 0h48v48H0z"></path>
              <path width="40" height="40" d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-4 29V15l12 9-12 9z" fill="red"></path>
            </svg>
            <audio class="hidden" id="{{$song->id}}" src="{{ asset('uploads') }}/{{$song->audio}}"></audio>
        </button>
        @if($like == 1)
            <a href="{{route('like.song',$song->id)}}">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="red" class="text-red-700" xmlns="http://www.w3.org/2000/svg">
                    <g id="Interface / Heart_01">
                    <path id="Vector" d="M12 7.69431C10 2.99988 3 3.49988 3 9.49991C3 15.4999 12 20.5001 12 20.5001C12 20.5001 21 15.4999 21 9.49991C21 3.49988 14 2.99988 12 7.69431Z" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
            </a> {{$count_like}}
        @else
        <a href="{{route('like.song',$song->id)}}">
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" class="text-red-700" xmlns="http://www.w3.org/2000/svg">
                <g id="Interface / Heart_01">
                <path id="Vector" d="M12 7.69431C10 2.99988 3 3.49988 3 9.49991C3 15.4999 12 20.5001 12 20.5001C12 20.5001 21 15.4999 21 9.49991C21 3.49988 14 2.99988 12 7.69431Z" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
            </svg>
        </a>{{$count_like}}
        @endif
        @if($playlist == 1)
        <a href="{{route('playlist.song',$song->id)}}">
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="red" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 9C13 8.44772 12.5523 8 12 8C11.4477 8 11 8.44772 11 9V11H9C8.44772 11 8 11.4477 8 12C8 12.5523 8.44772 13 9 13H11V15C11 15.5523 11.4477 16 12 16C12.5523 16 13 15.5523 13 15V13H15C15.5523 13 16 12.5523 16 12C16 11.4477 15.5523 11 15 11H13V9ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12Z" fill="red"/>
            </svg></a>
        @else
        <a href="{{route('playlist.song',$song->id)}}">
            <svg width="40px" height="40px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                <path fill="red" fill-rule="evenodd" d="M10 3a7 7 0 100 14 7 7 0 000-14zm-9 7a9 9 0 1118 0 9 9 0 01-18 0zm14 .069a1 1 0 01-1 1h-2.931V14a1 1 0 11-2 0v-2.931H6a1 1 0 110-2h3.069V6a1 1 0 112 0v3.069H14a1 1 0 011 1z"/>
            </svg></a>
        @endif
    </div>
    </div>
    </div>
    <div class="flex flex-wrap">
    @if($artists)<div>
        
        <h1 class="font-extrabold text-2xl text-center">Artists</h1>
        <div class="flex flex-wrap">
        @foreach ($artists as $artist)
            <span class="px-4 py-2 text-red-900 font-bold text center">

                    <label>{{$artist->name}} </label>

            </span>
        @endforeach

        </div>
    </div> @endif      
    @if($bands) <div> 
            
        <h1 class="font-extrabold text-2xl text-center">Bands</h1>
        <div class="flex flex-wrap">
        
        @foreach ($bands as $band)
        <span class="px-4 py-2 text-red-900 font-bold text center">

                <label>{{$band->name}} </label>

        </span>
        @endforeach
        
        </div>
    </div>@endif
    @if($categories)
    <div>
        <h1 class="font-extrabold text-2xl text-center">Categories</h1>
        <div class="flex flex-wrap">
        
        @foreach ($categories as $categories)
            <span class="px-4 py-2 text-red-900 font-bold text center">

                    <label>{{$categories->name}} </label>

            </span>
        @endforeach
       
        </div>
    </div>
    @endif
    </div>
</div>
    <div class="flex flex-col w-2/3">
        <h1 class="font-extrabold text-2xl">Lyrics</h1>
        <p class="py-4 text-sm text-justify">{{$song->lyrics}}</p>
        <p class="font-light text-lg text-gray-600">{{$song->date}}</p>
    </div>

</div>
<div class="mt-8 flex justify-around items-center">     
</div>
</div>
@endsection