@extends('layouts.app')

@section('content')
  
      <!-- this is the main section to add details -->
      <div class="col-span-11  mt-5">
        
        <div class="text-2xl font-serif ml-10 border-b-2 border-black pb-8 text-center font-bold">
            <a class="p-10" href="/">Home</a>
            <a class="p-10"  href="/about">About</a>
            <a class="p-10" href="/portfolio">Portfolio</a>
            <a class="p-10" href="/contact">Contact</a>
        </div>

        <div class="mt-15 p-10">
          <p class="text-5xl font-serif"><b>About Me...</b></p>
          <p class="text-1xl font-serif mt-10">I am a freelancer based in the United Kingdom and i have been building noteworthy UX/UI designs and websites for years, which comply with the latest design trends. I help convert a vision and an idea into meaningful and useful products. Having a sharp eye for product evolution helps me prioritize tasks, iterate fast.</p>
        </div>

          <div  class=" font-serif ml-10">
              <h4 class="text-3xl border-b-2 border-black">Personal Details<h4>

              <div class="container2 grid grid-cols-2 ml-10 gap-3 mt-10  h-36">

                  <div class="first col-span-1">
                  <p>First Name: Kunjan </p>
                      <p class="pt-5">Last Name: Nagarkoti </p>
                      <p class="pt-5">Address : Suryabinayak 7, Bhaktapur </p>
                      <p class="pt-5">Age: 22 years </p>
                  </div>

                  <div class="second col-span-1">
                  <p>Study: Univesity of Northampton </p>
                      <p class="pt-5">Degree: Software Engineering </p>
                      <p class="pt-5">Email : nagarkotikunjan45@gmail.com </p>
                      <p class="pt-5">Phone: +977 9869490770 </p>
                  </div>

               </div>

          </div>
        

        <div class="border_down  ml-10 mt-20 border-t-2 border-black pt-8">
        <p class="text-1xl font-serif">Copyright © 2023 Kunjan ❤ the_goat</p>
        </div>

      </div>

@endsection
      
      
      
    