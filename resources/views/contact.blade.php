@extends('layouts.app')

@section('content')
<div class="col-span-11  mt-5">
          <div class="text-2xl font-serif ml-10 border-b-2 border-black pb-8 text-center font-bold">
            <a class="p-10" href="/">Home</a>
            <a class="p-10" href="/about">About</a>
            <a class="p-10" href="/portfolio">Portfolio</a>
            <a class="p-10" href="/contact">Contact</a>
          </div>

          <div class="mt-15 p-10">
            <p class="text-4xl font-serif"><b>Contact Me...</b></p>
            <p class="text-2xl font-serif mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          <div class=" font-serif ml-10">
            <h4 class="text-3xl"> <b> <u>GET IN TOUCH </u> </b>
              <h4>
          </div>

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





          <div class="border_down  ml-10 mt-20 border-t-2 border-black pt-6">
            <p class="text-1xl font-serif">Copyright © 2023 Kunjan ❤ the_goat</p>
          </div>

        </div>



@endsection  


  