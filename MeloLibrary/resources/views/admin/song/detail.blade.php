@extends('layouts.dashboard')
@section('content')
<div class="p-4 sm:ml-64 mt-20">
    @if(session('success'))
        <span class="w-full flex justify-center"><div class="p-4 w-[40%] text-green-600 font-bold bg-green-100 rounded-lg">
            {{ session('success') }}
        </div> </span>
        @endif
<div class="flex justify-between">
    <div class="flex flex-col items-center w-1/2">
    <div class="flex items-center jusify-between">
    <div>
        <img class=" w-32 rounded-full" src="{{asset('uploads')}}/{{$song->Image}}"/>
    <h5 class="py-4 font-bold text-red-700 text-lg text-center">{{$song->Titre}} </h5>
      
    </div>
    </div>
    @if($artists)<div>
        
        <h1 class="font-extrabold text-2xl text-center">Artists</h1>
        <div class="flex flex-wrap">
        @foreach ($artists as $artist)
            <span class="px-4 py-2 text-red-900 font-bold text center">
                <form class="px-4 flex items-center" action="{{route('song.removeartist',$song->id)}}" method="POST" style="display: inline-block">
                    @csrf
                    @method('POST')
                    <label>{{$artist->name}} </label>
                    <input class="hidden w-2 h-2" name="artist" value="{{$artist->id}}"/>
                    <button type="submit" class="text-black"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Menu / Close_SM">
                        <path id="Vector" d="M16 16L12 12M12 12L8 8M12 12L16 8M12 12L8 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </svg></button>
                </form>
            </span>
        @endforeach

        </div>
    </div> @endif        
    <form action="{{route('song.addartist',$song->id)}}" class="w-2/3 flex justify-around items-center">
        @csrf
        @method('POST')
        <div class="w-2/4">
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
                     <option value="{{$singer->id}}">{{$singer->name}}</option> 
                @endforeach
                </select>
              </div>
            </div>
        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Add Singer</button>    
    </form>
    @if($bands) <div> 
            
        <h1 class="font-extrabold text-2xl text-center">Bands</h1>
        <div class="flex flex-wrap">
        
        @foreach ($bands as $band)
        <span class="px-4 py-2 text-red-900 font-bold text center">
            <form class="px-4 flex items-center" action="{{route('song.removeband',$song->id)}}" method="POST" style="display: inline-block">
                @csrf
                @method('POST')
                <label>{{$band->name}} </label>
                <input class="hidden w-2 h-2" name="band" value="{{$band->id}}"/>
                <button type="submit" class="text-black"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="Menu / Close_SM">
                    <path id="Vector" d="M16 16L12 12M12 12L8 8M12 12L16 8M12 12L8 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    </svg></button>
            </form>
        </span>
        @endforeach
        
        </div>
    </div>@endif
    <form action="{{route('song.addband',$song->id)}}" class="w-2/3 flex justify-around items-center">
        @csrf
        @method('POST')
        <div class="w-2/4">
            <div class="flex w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">
                <select
                  id="select-categorie"
                  name="band[]"
                  multiple
                  placeholder="Select Artists..."
                  autocomplete="off"
                  class="block w-full rounded-sm cursor-pointer focus:outline-none"
                  multiple
                >
                @foreach($groups as $group)
                     <option value="{{$group->id}}">{{$group->name}}</option> 
                 @endforeach
                </select>
              </div>
            </div>
        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Add band</button>    
    </form>
    @if($categories)
    <div>
        <h1 class="font-extrabold text-2xl text-center">Categories</h1>
        <div class="flex flex-wrap">
        
        @foreach ($categories as $categories)
            <span class="px-4 py-2 text-red-900 font-bold text center">
                <form class="px-4 flex items-center" action="{{route('song.removecat',$song->id)}}" method="POST" style="display: inline-block">
                    @csrf
                    @method('POST')
                    <label>{{$categories->name}} </label>
                    <input class="hidden w-2 h-2" name="categorie" value="{{$categories->id}}"/>
                    <button type="submit" class="text-black"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="Menu / Close_SM">
                        <path id="Vector" d="M16 16L12 12M12 12L8 8M12 12L16 8M12 12L8 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        </svg></button>
                </form>
            </span>
        @endforeach
       
        </div>
    </div>
    @endif
    
<form action="{{route('song.addcat',$song->id)}}" class="w-2/3 flex justify-around items-center">
    @csrf
    @method('POST')
    <div class="w-2/4">
        <div class="flex w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">
            <select
              id="select-band"
              name="categorie[]"
              multiple
              placeholder="Select Artists..."
              autocomplete="off"
              class="block w-full rounded-sm cursor-pointer focus:outline-none"
              multiple
            >
            @foreach($keywords as $keyword)
              <option value="{{$keyword->id}}">{{$keyword->name}}</option> 
             @endforeach
            </select>
          </div>
        </div>
    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Add categorie</button>    
</form>
    </div>
    <div class="flex flex-col w-1/2">
        <h1 class="font-extrabold text-2xl">Lyrics</h1>
        <p class="py-4 text-sm text-justify">{{$song->lyrics}}</p>
        <p class="font-light text-lg text-gray-600">{{$song->date}}</p>
        <p class="flex items-center">  <svg width="20px" height="20px" viewBox="0 0 24 24" fill="red" class="text-red-700" xmlns="http://www.w3.org/2000/svg">
            <g id="Interface / Heart_01">
            <path id="Vector" d="M12 7.69431C10 2.99988 3 3.49988 3 9.49991C3 15.4999 12 20.5001 12 20.5001C12 20.5001 21 15.4999 21 9.49991C21 3.49988 14 2.99988 12 7.69431Z" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
        </svg>
    {{$count_likes}}</p>
    </div>

</div>
<div class="mt-8 flex justify-around items-center">     
</div>
</div>
@endsection