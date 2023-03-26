@extends('layouts.dashboard')

@section('content')
<div class="p-4 sm:ml-64 mt-20">
    <span class="w-full flex justify-center"> <img class="h-24 w-24 rounded-full" src="{{asset('uploads')}}/{{$song->Image}}"/></span>
    <form action="{{ route('song.update', $song->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input value="{{$song->Titre}}" type="text" name="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 dark:shadow-sm-light" placeholder="song name" required>
          </div>
          <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Image</label>
              <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="image" type="file">
          </div>
          <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >Audio</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="audio" type="file">
          </div>
          <div class="mb-6"> 
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lyrics</label>
            <textarea name="lyrics" rows="10" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500" placeholder="Write the lyrics here..." >{{$song->lyrics}}</textarea>
          </div>
          <div class="mb-6">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relase date</label>
            <input type="date" name="date" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 dark:shadow-sm-light" value="{{$song->date}}" required>
         </div>
          <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Update song</button>
    </form>
</div>
@endsection
