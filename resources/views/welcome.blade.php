@extends('layouts.app')

@section('content')
  <h4 class="text-6xl font-serif ml-10 border-b-2 border-black pb-8  ">Kunjan</h4>

  <div class="mt-15 p-10">
    <p class="text-6xl font-serif"><b>Kunjan Nagarkoti</b></p>
    <p class="text-2xl font-serif mt-10">Professional UI/UX designer and web developer based on <br> London. Sometimes works as a freelancer.</p>
  </div>

  <button class="bg-black text-white border-4 border-black mt-5 ml-10 p-5 w-60">
    Get In Touch
  </button>

  <button class="bg-white border-4 border-black ml-10 p-5 w-60 ">
    Download CV
  </button>

  @include('components.navbar')

  <div class="border_down  ml-10 mt-20 border-t-2 border-black pt-8">
    <p class="text-1xl font-serif">Copyright © 2023 Kunjan ❤ the_goat</p>
  </div>
@endsection  