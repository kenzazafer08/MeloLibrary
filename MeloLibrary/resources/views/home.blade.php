@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-64 mt-20">
    <p class="font-bold text-xl px-4">New songs</p>
    <div class="grid sm:grid-cols-3 place-items-center grid-cols-1 gap-4 my-10 px-10 w-full justify-around"> 
      @foreach ($song as $song)
      <div class="w-56 h-64 bg-white border border-gray-200 rounded-lg shadow ">
        <div class="relative h-2/3">
            <img class="rounded-t-lg w-full h-full object-fit" src="{{asset('uploads')}}/{{$song->Image}}" alt="" />
            <button onclick="playA({{$song->id}})" class="absolute bottom-0 left-0 m-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-current text-white">
                <path fill="none" d="M0 0h48v48H0z"></path>
                <path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-4 29V15l12 9-12 9z"></path>
              </svg>
              <audio class="hidden" id="{{$song->id}}" src="{{ asset('uploads') }}/{{$song->audio}}"></audio>
            </button>
          </div>                  
        <div class="p-5">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">{{$song->Titre}}</h5>
            <a href="{{route('song',$song->id)}}" class="inline-flex items-center text-red-600 hover:underline">
              See 
              <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
          </a>
        </div>
    </div>
      @endforeach 
    </div>
    </div>
</div>
@endsection
