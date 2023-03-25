@extends('layouts.dashboard')
@section('content')
<div class="p-4 sm:ml-64 mt-20">
    <div class="grid grid-cols-4 grid-flow-col gap-4"> 
<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101" id="user"><path d="M50.4 54.5c10.1 0 18.2-8.2 18.2-18.2S60.5 18 50.4 18s-18.2 8.2-18.2 18.2 8.1 18.3 18.2 18.3zm0-31.7c7.4 0 13.4 6 13.4 13.4s-6 13.4-13.4 13.4S37 43.7 37 36.3s6-13.5 13.4-13.5zM18.8 83h63.4c1.3 0 2.4-1.1 2.4-2.4 0-12.6-10.3-22.9-22.9-22.9H39.3c-12.6 0-22.9 10.3-22.9 22.9 0 1.3 1.1 2.4 2.4 2.4zm20.5-20.5h22.4c9.2 0 16.7 6.8 17.9 15.7H21.4c1.2-8.9 8.7-15.7 17.9-15.7z"></path></svg>    <a href="#">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Users</h5>
    </a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{$users}}</p>
    <a href="{{url('user')}}" class="inline-flex items-center text-red-600 hover:underline">
        See 
        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
    </a>
</div>
<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <svg class="h-12 w-12" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" id="singer"><path fill="#000" fill-rule="evenodd" d="M51.682 27.529c4.555 0 8.318 3.763 8.12 8.318 0 2.377-.99 4.555-2.575 6.14l-.99 15.645c0 .99-.99 1.783-1.98 1.783h-5.15c-.99 0-1.98-.792-1.98-1.783l-.99-15.646c-1.783-1.584-2.773-3.762-2.773-6.139 0-4.555 3.763-8.318 8.318-8.318zm.792 27.925l.594-11.487c-.594.198-.99.198-1.584.198-.396 0-.99-.198-1.386-.198l.792 11.487h1.584zm1.783-16.24c1.188-.792 1.782-1.98 1.98-3.565 0-2.377-1.98-4.357-4.357-4.357-2.377 0-4.357 1.98-4.357 4.357 0 1.386.594 2.773 1.782 3.565 1.387.99 3.565.99 4.952 0zm-13.072 16.24c1.189 0 1.585.99 1.585 2.178 0 1.189-.793 1.98-1.98 1.98H2.17c-1.189 0-1.981-.791-1.981-1.98V52.88c0-3.565 1.98-6.932 5.15-8.714l13.467-7.526v-4.753c-1.783-1.584-3.17-3.763-4.16-6.338-2.376-.396-4.158-2.376-4.158-4.95v-1.19c0-1.98 1.386-3.762 3.168-4.554C14.845 6.338 21.182 0 28.708 0S42.572 6.338 43.76 14.854c1.98.792 3.169 2.574 3.169 4.555v1.188c0 2.377-1.783 4.357-4.16 4.753-.99 2.377-2.376 4.555-4.158 6.338v4.753l.792.396c.99.594 1.386 1.783.792 2.773-.594.99-1.782 1.386-2.773.792l-1.782-.99c-.594-.396-.99-.99-.99-1.783v-6.535c-.198-.594 0-1.387.594-1.783 1.98-1.584 3.367-3.96 4.159-6.535.396-.793 1.188-1.387 1.98-1.387h.793c.594 0 .99-.396.99-.99v-1.188c0-.594-.396-.99-.99-.99-.99 0-1.981-.793-1.981-1.783-.594-7.13-5.545-12.675-11.289-12.675-5.743 0-10.694 5.545-11.289 12.675 0 .99-.99 1.783-1.98 1.783-.594 0-.99.396-.99.99v1.188c0 .594.396.99.99.99h.792c.99 0 1.783.594 1.98 1.387.793 2.574 2.18 4.95 4.16 6.535.396.396.594.99.594 1.585v6.733c0 .793-.396 1.387-.99 1.783L7.715 47.334c-1.98 1.188-3.169 3.169-3.169 5.347v2.773h36.64z"></path></svg>        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Artists</h5>
    </a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{$artists}}</p>
    <a href="{{url('artist')}}" class="inline-flex items-center text-red-600 hover:underline">
        See 
        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
    </a>
</div>
<div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
     <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="categories"><path fill="#222" d="M36.54 38h-9.08a1.5 1.5 0 0 1-1.5-1.5v-9.04a1.5 1.5 0 0 1 1.5-1.5h9.08a1.5 1.5 0 0 1 1.5 1.5v9.08a1.5 1.5 0 0 1-1.5 1.46zM29 35h6v-6h-6zm23.21 3h-9.08a1.5 1.5 0 0 1-1.5-1.5v-9.04a1.5 1.5 0 0 1 1.5-1.5h9.08a1.5 1.5 0 0 1 1.5 1.5v9.08a1.5 1.5 0 0 1-1.5 1.46zm-7.58-3h6.08v-6h-6.08zm-23.76 3h-9.08a1.5 1.5 0 0 1-1.5-1.5v-9.04a1.5 1.5 0 0 1 1.5-1.5h9.08a1.5 1.5 0 0 1 1.5 1.5v9.08a1.5 1.5 0 0 1-1.5 1.46zm-7.58-3h6.08v-6h-6.08zm23.25-12.94h-9.08a1.5 1.5 0 0 1-1.5-1.5v-9.09a1.5 1.5 0 0 1 1.5-1.5h9.08a1.5 1.5 0 0 1 1.5 1.5v9.09a1.5 1.5 0 0 1-1.5 1.5zm-7.58-3H35V13h-6zm23.25 3h-9.08a1.5 1.5 0 0 1-1.5-1.5v-9.09a1.5 1.5 0 0 1 1.5-1.5h9.08a1.5 1.5 0 0 1 1.5 1.5v9.09a1.5 1.5 0 0 1-1.5 1.5zm-7.58-3h6.08V13h-6.08zm-23.76 3h-9.08a1.5 1.5 0 0 1-1.5-1.5v-9.09a1.5 1.5 0 0 1 1.5-1.5h9.08a1.5 1.5 0 0 1 1.5 1.5v9.09a1.5 1.5 0 0 1-1.5 1.5zm-7.58-3h6.08V13h-6.08zM36.54 54h-9.08a1.5 1.5 0 0 1-1.5-1.5v-9.06a1.5 1.5 0 0 1 1.5-1.5h9.08a1.5 1.5 0 0 1 1.5 1.5v9.09a1.5 1.5 0 0 1-1.5 1.47zM29 51h6v-6.06h-6zm23.21 3h-9.08a1.5 1.5 0 0 1-1.5-1.5v-9.06a1.5 1.5 0 0 1 1.5-1.5h9.08a1.5 1.5 0 0 1 1.5 1.5v9.09a1.5 1.5 0 0 1-1.5 1.47zm-7.58-3h6.08v-6.06h-6.08zm-23.76 3h-9.08a1.5 1.5 0 0 1-1.5-1.5v-9.06a1.5 1.5 0 0 1 1.5-1.5h9.08a1.5 1.5 0 0 1 1.5 1.5v9.09a1.5 1.5 0 0 1-1.5 1.47zm-7.58-3h6.08v-6.06h-6.08z"></path></svg> 
     <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Categries</h5>
    </a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400"> {{$categorie}} </p>
    <a href="{{url('cat')}}" class="inline-flex items-center text-red-600 hover:underline">
        See 
        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path><path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path></svg>
    </a>
</div>
</div>
</div>
@endsection