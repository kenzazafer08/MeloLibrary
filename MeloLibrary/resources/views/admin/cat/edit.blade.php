@extends('layouts.dashboard')
@section('content')
<div class="p-4 sm:ml-64 mt-20">
<form enctype="multipart/form-data" method="POST" action="{{ route('cat.update', $cat->id) }}">
  @csrf
  @method('PUT')
    <div class="mb-6">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
      <input value="{{$cat->name}}" type="text" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 dark:shadow-sm-light" placeholder="artist name" required>
    </div>
    <div class="mb-6">
       <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Discription</label>
       <input value="{{$cat->discription}}" type="text" name="discription" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 dark:shadow-sm-light" required>
    </div>
    <div class="mb-6">
        <label for="countries_disabled" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
        <select id="countries_disabled" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500">
        @if($cat->type == '0')
        <option value="0" selected>Categorie</option>
        <option value="1">Keyword</option>
        @else 
        <option value="0">Categorie</option>
        <option value="1" selected>Keyword</option>
        @endif
    </select>
    </div>
    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Register new Categorie/Keyword</button>
  </form>  
</div>
@endsection