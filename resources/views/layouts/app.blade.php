<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container grid grid-cols-12 gap-1 h-screen overflow-auto">
        <!-- this is for profile picture  -->
        <div class="group col-span-5 bg-sky-500/100 h-screen relative">
            
            <!-- Grayscale Image -->
            <img src="image/pp.jpg" alt="Your Image" class="  w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700 ease-in-out">

            <!-- Text or content you want to display on hover -->
            <div class=" absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-700 ease-in-out">

            </div>

        </div>

        <div class="main col-span-7 gap-1" style="overflow:auto">


            <!-- this is for main section and footer -->
            <div class="grid grid-cols-12 h-sceeen" >

                <!-- this is the main section to add details -->
                <div class="col-span-11  mt-5">
                    @yield('content')
                </div>

                <!-- this is for footer -->
                <div class="col-span-1  items-center justify-center text-center mt-5 border-l-2 border-black">
                    <!-- <i class="fa-solid fa-bars fa-2xl" style="color: #000000;"></i> <br> -->


                    <div class="mt-10">

                        <a href="https://github.com/KunjanNagarkoti" target="_blank"><i class="fa-brands fa-github fa-2xl mt-20" style="color: #000000;"></i> </a> <br>

                        <a href="https://twitter.com/KunjanNagarkoti" target="_blank"> <i class="fa-brands fa-twitter fa-2xl mt-20" style="color: #000000 ;"></i> </a> <br>

                        <a href="https://www.instagram.com/kunjann_stha/" target="_blank"> <i class="fa-brands fa-instagram fa-2xl mt-20" style="color: #000000;"></i> </a> <br>


                        <a href="https://www.linkedin.com/in/kunjan-nagarkoti-989335254/" target="_blank"> <i class="fa-brands fa-linkedin fa-2xl mt-20" style="color: #000000;"> </i> </a> <br>

                    </div>
                    <div class="follow -rotate-90">

                        <p class="follow w-40 mt-36"> <b> Follow Me -------- </b> </p>


                    </div>

                </div>
            </div>
        </div>

    </div>
</body>

</html>