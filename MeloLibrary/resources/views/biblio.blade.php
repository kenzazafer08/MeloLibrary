@extends('layouts.app')
@section('content')
<div class="p-4 sm:ml-64 mt-20">
          <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                      <tr>
                          <th scope="col" class="px-6 py-3">
                              Image
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Title
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Relsease Date
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Song
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Details
                          </th>
                          <th scope="col" class="px-6 py-3">
                              Actions
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($song as $song)
                      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              <img class="h-24 w-24 rounded-full" src="{{asset('uploads')}}/{{$song->song->Image}}"/>
                              
                          </th>
                          <td class="px-6 py-4">
                              {{ $song->song->Titre }}
                          </td>
                          <td class="px-6 py-4">
                              {{ $song->song->date }}
                          </td>
                          <td><button onclick="playA({{$song->song->id}})"  class="m-4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-current text-red-700">
                                <path fill="none" d="M0 0h48v48H0z"></path>
                                <path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-4 29V15l12 9-12 9z"></path>
                              </svg>
                              <audio class="hidden" id="{{$song->song->id}}" src="{{ asset('uploads') }}/{{$song->song->audio}}"></audio>
                            </button></td>
                          <td class="px-6 py-4">
                              <a href="{{route('song',$song->song->id)}}">
                              <svg width="30px" height="30px" viewBox="0 0 60.601004 60.601004" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                  <defs/>
                                  <path d="m 0,0 c 0,12.079 -9.793,21.872 -21.872,21.872 -12.079,0 -21.871,-9.793 -21.871,-21.872 0,-12.079 9.792,-21.872 21.871,-21.872 C -9.793,-21.872 0,-12.079 0,0 Z" style="stroke-linejoin:miter;stroke-opacity:1;fill-opacity:1;stroke:#e11919;stroke-linecap:butt;stroke-miterlimit:4;stroke-dasharray:none;stroke-width:0.48500001;fill:#ffffff" transform="matrix(0.000000,1.250000,1.250000,0.000000,30.300503,57.639880)"/>
                                  <path d="m 34.961753,47.76613 0,-23.573752 -13.182501,0 0,2.575 3.85875,0 0,20.998752 -3.85875,0 0,2.57375 17.041251,0 0,-2.57375 -3.85875,0" style="fill:#e11919;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                  <path d="m 30.299253,21.526128 c 3.1975,0 5.78875,-2.59125 5.78875,-5.78875 0,-3.197501 -2.59125,-5.7900009 -5.78875,-5.7900009 -3.19875,0 -5.79,2.5924999 -5.79,5.7900009 0,3.1975 2.59125,5.78875 5.79,5.78875" style="fill:#e11919;fill-opacity:1;fill-rule:nonzero;stroke:none"/>
                                </svg>
                              </a>
                          </td>
                          <td class=" px-6 py-4 text-red-800">
                                  <form class="px-4" action="{{route('playlist.remove',$song->song->id)}}" method="POST" style="display: inline-block">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="text-red-800">Remove</button>
                                  </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
      <script>
          function playA(id){
            console.log(id)
                  const audio = document.getElementById(id);
                  console.log(audio)
                  if (audio.paused) {
                    audio.play();
                  } else {
                    audio.pause();
                  }
                }
        </script>
@endsection
