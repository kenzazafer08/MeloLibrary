@extends('layouts.app')

@section('content')
<div class="p-4 sm:ml-64 mt-20">
    <p class="font-bold text-xl px-4">New songs</p>
    <div class="flex flex-wrap my-10 px-10 w-full justify-around">   
        <div class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow ">
            <div class="relative h-2/3">
                <img class="rounded-t-lg w-full h-full" src="{{asset('images/killpil.jfif')}}" alt="" />
                <button onclick="playA('my-audio')" id='play-A' class="absolute bottom-0 left-0 m-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-current text-white">
                    <path fill="none" d="M0 0h48v48H0z"></path>
                    <path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-4 29V15l12 9-12 9z"></path>
                  </svg>
                  <audio class="hidden" id="my-audio" src="{{ asset('audios/killpill.mp3') }}"></audio>
                </button>
              </div>                  
            <div class="p-5">
                <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Kill Pill</h5>
                <p class="font-normal text-sm text-gray-700 ">- By SZA</p>
            </div>
        </div>

        <div class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow ">
          <div class="relative h-2/3">
              <img class="rounded-t-lg w-full h-full" src="{{asset('images/killpil.jfif')}}" alt="" />
              <button onclick="playA('my-audio')" id='play-A' class="absolute bottom-0 left-0 m-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-current text-white">
                  <path fill="none" d="M0 0h48v48H0z"></path>
                  <path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-4 29V15l12 9-12 9z"></path>
                </svg>
                <audio class="hidden" id="my-audio" src="{{ asset('audios/killpill.mp3') }}"></audio>
              </button>
            </div>                  
          <div class="p-5">
              <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Kill Pill</h5>
              <p class="font-normal text-sm text-gray-700 ">- By SZA</p>
          </div>
      </div>
      <div class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow ">
        <div class="relative h-2/3">
            <img class="rounded-t-lg w-full h-full" src="{{asset('images/killpil.jfif')}}" alt="" />
            <button onclick="playA('my-audio')" id='play-A' class="absolute bottom-0 left-0 m-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-current text-white">
                <path fill="none" d="M0 0h48v48H0z"></path>
                <path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-4 29V15l12 9-12 9z"></path>
              </svg>
              <audio class="hidden" id="my-audio" src="{{ asset('audios/killpill.mp3') }}"></audio>
            </button>
          </div>                  
        <div class="p-5">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Kill Pill</h5>
            <p class="font-normal text-sm text-gray-700 ">- By SZA</p>
        </div>
    </div>
    </div>
    <p class="font-bold text-xl px-4">Most Liked</p>
    <div class="flex flex-wrap my-10 px-10 w-full justify-around">   
      <div class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow ">
        <div class="relative h-2/3">
            <img class="rounded-t-lg w-full h-full" src="{{asset('images/dross.jfif')}}" alt="" />
          
            <button onclick="playA('test')" class="absolute bottom-0 left-0 m-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-current text-white">
                <path fill="none" d="M0 0h48v48H0z"></path>
                <path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-4 29V15l12 9-12 9z"></path>
              </svg>
              <audio class="hidden" id="test" src="{{ asset('audios/m3a3chran.mp3') }}"></audio>
            </button>
          </div>                  
        <div class="p-5">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">M3a 3echrane</h5>
            <p class="font-normal text-sm text-gray-700 ">- Dizzy Dross</p>
            
        </div>
    </div>
    <div class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow ">
      <div class="relative h-2/3">
          <img class="rounded-t-lg w-full h-full" src="{{asset('images/dross.jfif')}}" alt="" />
        
          <button onclick="playA('test')" class="absolute bottom-0 left-0 m-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-current text-white">
              <path fill="none" d="M0 0h48v48H0z"></path>
              <path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-4 29V15l12 9-12 9z"></path>
            </svg>
            <audio class="hidden" id="test" src="{{ asset('audios/m3a3chran.mp3') }}"></audio>
          </button>
        </div>                  
      <div class="p-5">
          <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">M3a 3echrane</h5>
          <p class="font-normal text-sm text-gray-700 ">- Dizzy Dross</p>
          
      </div>
  </div>
  <div class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow ">
    <div class="relative h-2/3">
        <img class="rounded-t-lg w-full h-full" src="{{asset('images/dross.jfif')}}" alt="" />
      
        <button onclick="playA('test')" class="absolute bottom-0 left-0 m-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="fill-current text-white">
            <path fill="none" d="M0 0h48v48H0z"></path>
            <path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm-4 29V15l12 9-12 9z"></path>
          </svg>
          <audio class="hidden" id="test" src="{{ asset('audios/m3a3chran.mp3') }}"></audio>
        </button>
      </div>                  
    <div class="p-5">
        <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">M3a 3echrane</h5>
        <p class="font-normal text-sm text-gray-700 ">- Dizzy Dross</p>
        
    </div>
</div>
        </div>


    </div>
</div>
<script>
  function playA(id){
    console.log('test')
    const playButtons = document.querySelectorAll('.fill-current');
          const audio = document.getElementById(id);
          if (audio.paused) {
            audio.play();
          } else {
            audio.pause();
          }
        }
</script>
@endsection
