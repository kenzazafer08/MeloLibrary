@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-64 mt-20">
<div class="flex sm:flex-row flex-col justify-between items-center">
    <div class="flex flex-col items-center sm:w-1/3 w-full">
    <div class="flex items-center jusify-between">
    <div>
    <div class="flex flex-col items-center">
        <img class=" w-48 rounded-full" src="{{asset('uploads')}}/{{$song->Image}}"/>
    <h5 class="py-4 font-bold text-red-700 text-lg text-center">{{$song->Titre}}</h5>
    {{-- <audio class="" id="{{$song->id}}" src="{{ asset('uploads') }}/{{$song->audio}}"></audio> --}}
    <audio controls>
        <source src="{{ asset('uploads') }}/{{$song->audio}}" type="audio/mpeg">
      </audio>
    </div>
    <div class="flex justify-center items-center mt-4">
        @if($like == 1)
            <p class="flex justify-center items-center">{{$count_like}}<a href="{{route('like.song',$song->id)}}">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="red" class="text-red-700" xmlns="http://www.w3.org/2000/svg">
                    <g id="Interface / Heart_01">
                    <path id="Vector" d="M12 7.69431C10 2.99988 3 3.49988 3 9.49991C3 15.4999 12 20.5001 12 20.5001C12 20.5001 21 15.4999 21 9.49991C21 3.49988 14 2.99988 12 7.69431Z" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
            </a> </p>
        @else
        <p class="flex justify-center items-center">{{$count_like}}<a href="{{route('like.song',$song->id)}}">
            <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" class="text-red-700" xmlns="http://www.w3.org/2000/svg">
                <g id="Interface / Heart_01">
                <path id="Vector" d="M12 7.69431C10 2.99988 3 3.49988 3 9.49991C3 15.4999 12 20.5001 12 20.5001C12 20.5001 21 15.4999 21 9.49991C21 3.49988 14 2.99988 12 7.69431Z" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
            </svg>
        </a></p>
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
    <div class="flex flex-wrap gap-4 justify-center">
        <div>
        <h1 class="font-extrabold text-2xl text-center">Artists & bands</h1>
        <div class="flex flex-wrap">
        @foreach ($artists as $artist)
            <span class="px-4 py-2 text-red-900 font-bold text center">

                    <label>{{$artist->name}} </label>

            </span>
        @endforeach
        
        @foreach ($bands as $band)
        <span class="px-4 py-2 text-red-900 font-bold text center">

                <label>{{$band->name}} </label>

        </span>
        @endforeach
        
        </div>
    </div>
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
    <div class="flex flex-col sm:w-2/3 w-full p-4">
        <h1 class="font-extrabold text-2xl">Lyrics</h1>
        <p class="py-4 text-sm text-justify">{{$song->lyrics}}</p>
        <p class="font-light text-lg text-gray-600">{{$song->date}}</p>
    </div>

</div>
<div class="mt-8 "> 
    <p class="font-bold text-2xl">Comments</p>    

    <form action="{{route('store.comment',$song->id)}}">
        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                <label for="comment" class="sr-only">Your comment</label>
                <textarea name="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
            </div>
            <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-red-200 dark:focus:ring-red-900 hover:bg-red-800">
                    Post comment
                </button>
                <div class="flex pl-0 space-x-1 sm:pl-2">
                </div>
            </div>
        </div>
     </form>  
     <div class="mb-10">
     @foreach ($comments as $item) 
     @if($item->user->id == (Auth::user()->id))
     <p class="w-[10%] font-bold text-red-700">{{$item->user->name}}</p>
     <div class="mb-2 px-4 flex justify-around items-center  border border-1 border-red-500 shadow-sm rounded-full"> 
           
        
        <p class="w-[80%] text-sm text-justify">{{$item->body}}</p> 
        <form class="pt-4 px-4" action="{{route('comment.remove',$item->id)}}" method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-800">Remove</button>
        </form>
     </div>
     @else
     <p class="w-[10%] font-bold text-red-700">{{$item->user->name}}</p>
     <div class="mb-2 p-4 flex justify-around items-center  border border-1 border-red-500 shadow-sm rounded-full"> 
        
        <p class="w-[80%] text-sm text-justify">{{$item->body}}</p> 
     </div>
     @endif
     @endforeach
     </div>
</div>
</div>
@endsection