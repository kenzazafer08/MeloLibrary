@extends('layouts.Melo')
@section('head')
    <div>
        <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 ">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
              <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                  <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                      <span class="sr-only">Open sidebar</span>
                      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                         <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                      </svg>
                   </button>
                  <a href="/" class="flex ml-2 md:mr-24">
                    <img src="{{ asset('images/MeloLibrary.png') }}" class="h-8 mr-3" alt="MeloLibrary Logo" />
                    <span class="hidden sm:self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">MeloLibrary</span>
                  </a>
                </div>
                <div class="flex items-center">
                    @if (Auth::guest())
                    <a class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" href="{{route('login')}}">Login</a>
                    <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" href="{{route('register')}}">Register</a>
                @else
                
<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">Welcome <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
<!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ Auth::user()->name }}</a>
      </li>
      <li>
        <a href="{{ route('logout') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
      </li>
    </ul>
</div>
                @endif
            </div>
          </nav>
          
        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
             <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
                <ul class="space-y-2">
                   <li>
                      <a href="/" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg class="svg-icon flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 20 20">
                          <path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"></path>
                       </svg>
                       <span class="ml-3">Home</span>
                      </a>
                   </li>
                   <li>
                      <a href="/Search" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg class="svg-icon flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 20 20">
                          <path d="M12.323,2.398c-0.741-0.312-1.523-0.472-2.319-0.472c-2.394,0-4.544,1.423-5.476,3.625C3.907,7.013,3.896,8.629,4.49,10.102c0.528,1.304,1.494,2.333,2.72,2.99L5.467,17.33c-0.113,0.273,0.018,0.59,0.292,0.703c0.068,0.027,0.137,0.041,0.206,0.041c0.211,0,0.412-0.127,0.498-0.334l1.74-4.23c0.583,0.186,1.18,0.309,1.795,0.309c2.394,0,4.544-1.424,5.478-3.629C16.755,7.173,15.342,3.68,12.323,2.398z M14.488,9.77c-0.769,1.807-2.529,2.975-4.49,2.975c-0.651,0-1.291-0.131-1.897-0.387c-0.002-0.004-0.002-0.004-0.002-0.004c-0.003,0-0.003,0-0.003,0s0,0,0,0c-1.195-0.508-2.121-1.452-2.607-2.656c-0.489-1.205-0.477-2.53,0.03-3.727c0.764-1.805,2.525-2.969,4.487-2.969c0.651,0,1.292,0.129,1.898,0.386C14.374,4.438,15.533,7.3,14.488,9.77z"></path>
                       </svg>
                       <span class="flex-1 ml-3 whitespace-nowrap">Search</span>
                      </a>
                   </li>
                   <li>
                     <a href="/showartist" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" id="singer"><path fill="#000" fill-rule="evenodd" d="M51.682 27.529c4.555 0 8.318 3.763 8.12 8.318 0 2.377-.99 4.555-2.575 6.14l-.99 15.645c0 .99-.99 1.783-1.98 1.783h-5.15c-.99 0-1.98-.792-1.98-1.783l-.99-15.646c-1.783-1.584-2.773-3.762-2.773-6.139 0-4.555 3.763-8.318 8.318-8.318zm.792 27.925l.594-11.487c-.594.198-.99.198-1.584.198-.396 0-.99-.198-1.386-.198l.792 11.487h1.584zm1.783-16.24c1.188-.792 1.782-1.98 1.98-3.565 0-2.377-1.98-4.357-4.357-4.357-2.377 0-4.357 1.98-4.357 4.357 0 1.386.594 2.773 1.782 3.565 1.387.99 3.565.99 4.952 0zm-13.072 16.24c1.189 0 1.585.99 1.585 2.178 0 1.189-.793 1.98-1.98 1.98H2.17c-1.189 0-1.981-.791-1.981-1.98V52.88c0-3.565 1.98-6.932 5.15-8.714l13.467-7.526v-4.753c-1.783-1.584-3.17-3.763-4.16-6.338-2.376-.396-4.158-2.376-4.158-4.95v-1.19c0-1.98 1.386-3.762 3.168-4.554C14.845 6.338 21.182 0 28.708 0S42.572 6.338 43.76 14.854c1.98.792 3.169 2.574 3.169 4.555v1.188c0 2.377-1.783 4.357-4.16 4.753-.99 2.377-2.376 4.555-4.158 6.338v4.753l.792.396c.99.594 1.386 1.783.792 2.773-.594.99-1.782 1.386-2.773.792l-1.782-.99c-.594-.396-.99-.99-.99-1.783v-6.535c-.198-.594 0-1.387.594-1.783 1.98-1.584 3.367-3.96 4.159-6.535.396-.793 1.188-1.387 1.98-1.387h.793c.594 0 .99-.396.99-.99v-1.188c0-.594-.396-.99-.99-.99-.99 0-1.981-.793-1.981-1.783-.594-7.13-5.545-12.675-11.289-12.675-5.743 0-10.694 5.545-11.289 12.675 0 .99-.99 1.783-1.98 1.783-.594 0-.99.396-.99.99v1.188c0 .594.396.99.99.99h.792c.99 0 1.783.594 1.98 1.387.793 2.574 2.18 4.95 4.16 6.535.396.396.594.99.594 1.585v6.733c0 .793-.396 1.387-.99 1.783L7.715 47.334c-1.98 1.188-3.169 3.169-3.169 5.347v2.773h36.64z"></path></svg>
                      <span class="flex-1 ml-3 whitespace-nowrap">Artists</span>
                     </a>
                  </li>
                  <li>
                     <a href="/showband" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 128 128" id="group"><path d="M79.23535,73.30438A19.13148,19.13148,0,0,1,75.6189,77H76.25A10.762,10.762,0,0,1,87,87.75V113H41V87.75A10.762,10.762,0,0,1,51.75,77h.6311a19.13148,19.13148,0,0,1-3.61646-3.69562A14.77463,14.77463,0,0,0,37,87.75v25.9751A3.27877,3.27877,0,0,0,40.2749,117H87.7251A3.27877,3.27877,0,0,0,91,113.7251V87.75A14.77463,14.77463,0,0,0,79.23535,73.30438Z"></path><path d="M49 62A15 15 0 1 0 64 47 15.017 15.017 0 0 0 49 62zM64 51A11 11 0 1 1 53 62 11.01245 11.01245 0 0 1 64 51zM4 65A18.02031 18.02031 0 0 1 22 47h2.11407a21.05289 21.05289 0 0 1-5.49646-3.7395A22.03427 22.03427 0 0 0 0 65V89a4.00458 4.00458 0 0 0 4 4H33V89H4zM41.88593 47H44a17.88931 17.88931 0 0 1 6.81555 1.34918 19.09749 19.09749 0 0 1 3.59552-2.7243 21.8476 21.8476 0 0 0-7.03821-2.35571A21.053 21.053 0 0 1 41.88593 47zM50 28A17 17 0 1 0 33 45 17.019 17.019 0 0 0 50 28zM33 41A13 13 0 1 1 46 28 13.01442 13.01442 0 0 1 33 41zM84 47h2.11407a21.053 21.053 0 0 1-5.48694-3.73083 21.8476 21.8476 0 0 0-7.03821 2.35571 19.09749 19.09749 0 0 1 3.59552 2.7243A17.88931 17.88931 0 0 1 84 47zM109.38239 43.2605A21.05289 21.05289 0 0 1 103.88593 47H106a18.02031 18.02031 0 0 1 18 18l.00244 24H95v4h29a4.00458 4.00458 0 0 0 4-4V65A22.03427 22.03427 0 0 0 109.38239 43.2605zM95 45A17 17 0 1 0 78 28 17.019 17.019 0 0 0 95 45zm0-30A13 13 0 1 1 82 28 13.01442 13.01442 0 0 1 95 15z"></path></svg>  
                      <span class="flex-1 ml-3 whitespace-nowrap">bands</span>
                     </a>
                  </li>
                   <li>
                      <a href="/Biblio" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <svg class="svg-icon flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 20 20">
                          <path d="M18.378,1.062H3.855c-0.309,0-0.559,0.25-0.559,0.559c0,0.309,0.25,0.559,0.559,0.559h13.964v13.964
                             c0,0.309,0.25,0.559,0.559,0.559c0.31,0,0.56-0.25,0.56-0.559V1.621C18.938,1.312,18.688,1.062,18.378,1.062z M16.144,3.296H1.621
                             c-0.309,0-0.559,0.25-0.559,0.559v14.523c0,0.31,0.25,0.56,0.559,0.56h14.523c0.309,0,0.559-0.25,0.559-0.56V3.855
                             C16.702,3.546,16.452,3.296,16.144,3.296z M15.586,17.262c0,0.31-0.25,0.558-0.56,0.558H2.738c-0.309,0-0.559-0.248-0.559-0.558
                             V4.972c0-0.309,0.25-0.559,0.559-0.559h12.289c0.31,0,0.56,0.25,0.56,0.559V17.262z"></path>
                       </svg>
                       <span class="flex-1 ml-3 whitespace-nowrap">Playlist</span>
                      </a>
                   </li>
                </ul>
             </div>
          </aside> 
          @yield('content')
@endsection
