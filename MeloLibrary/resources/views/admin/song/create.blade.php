@extends('layouts.dashboard')
@section('content')
<div class="p-4 sm:ml-64 mt-20">
<form enctype="multipart/form-data" method="POST" action="{{ url('/song/insert/') }}">
  @csrf
  @method('POST')
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Image</label>
    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="image" type="file">
  </div> 
  <div class="mb-6">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Audio</label>
    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="audio" type="file">
  </div> 
    <div class="mb-6">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
      <input type="text" name="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 dark:shadow-sm-light" placeholder="Song Title" required>
    </div>
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Artists</label>
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
              @foreach ($artists as $artist)
                 <option value="{{$artist->id}}">{{$artist->name}}</option> 
              @endforeach
            </select>
          </div>
        </div>
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Artists</label>
            <div class="flex w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">
                <select
                  id="select-band"
                  name="band[]"
                  multiple
                  placeholder="Select Bands..."
                  autocomplete="off"
                  class="block w-full rounded-sm cursor-pointer focus:outline-none"
                  multiple
                >
                  @foreach ($bands as $band)
                     <option value="{{$band->id}}">{{$band->name}}</option> 
                  @endforeach
                </select>
              </div>
            </div>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Artists</label>
                <div class="flex w-full mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    <select
                      id="select-categorie"
                      name="categorie[]"
                      multiple
                      placeholder="Select categories..."
                      autocomplete="off"
                      class="block w-full rounded-sm cursor-pointer focus:outline-none"
                      multiple
                    >
                      @foreach ($categories as $categorie)
                         <option value="{{$categorie->id}}">{{$categorie->name}}</option> 
                      @endforeach
                    </select>
                  </div>
            </div>
        <div class="mb-6">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relase date</label>
            <input type="date" name="date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 dark:shadow-sm-light" required>
         </div>
         <div class="mb-6"> 
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lyrics</label>
            <textarea name="lyrics" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Write the lyrics here..."></textarea>
        </div>
        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Register new artist</button>
  </form>
  
</div>
@endsection