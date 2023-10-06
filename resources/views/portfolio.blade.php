@extends('layouts.app')

@section('content')
<!-- this is the main section to add details -->
<div class="col-span-11  mt-5">
  <div class="text-2xl font-serif ml-10 border-b-2 border-black pb-8 text-center font-bold">
    <a class="p-10" href="/">Home</a>
    <a class="p-10" href="/about">About</a>
    <a class="p-10" href="/portfolio">Portfolio</a>
    <a class="p-10" href="/contact">Contact</a>
  </div>

  <div class="mt-15 p-10">
    <p class="text-4xl font-serif"><b>Portfolio</b></p>
    <p class="text-1xl font-serif mt-10">Now, I’m working on a professional, visually sophisticated and technologically proficient, responsive and multi-functional wordpress theme Elonissa. If you are interested to work with me, click below button and contact with me right now, so we can talk about your project.</p>
  </div>

  <button class="bg-black text-white border-4 border-black mt-5 ml-10 p-5 w-96 h-24">
    <p class="text-1xl"> <b>IF YOU ARE INTRESTED, GET IN TOUCH </b></p>
  </button>



 


  <!-- This is for portfolio picture -->
  <div class="container2 grid grid-cols-3 ml-10 gap-5 mt-10 text-center h-36">

    <div class="mail col-span-1 border-2 border-black p-10">
      <i class="fa-solid fa-envelope fa-2xl" style="color: #000000;"></i> <br><br>
      <p class="text-xl font-serif">kunjan@gmail.com</p>
    </div>

    <div class="phone col-span-1 border-2 border-black p-10">
      <i class="fa-solid fa-mobile fa-2xl" style="color: #000000;"></i> <br> <br>
      <p class="text-xl font-serif">+977 9869490770</p>
    </div>
    <div class="map col-span-1 border-2 border-black p-10 mr-4">
      <i class="fa-solid fa-location-dot fa-2xl" style="color: #000000;"></i> <br> <br>
      <p class="text-xl font-serif">Bhaktapur</p>
    </div>

  </div>
</div>



<div class="border_down  ml-10 mt-20 border-t-4 border-black pt-8">
  <p class="text-1xl font-serif">Copyright © 2023 Kunjan ❤ the_goat</p>
</div>
@endsection