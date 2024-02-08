<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        @vite('resources/css/app.css')
        <title>SVKR::Portfolio</title>
        <script src="js/script.js"defer></script>
        <script src="js/app.js" defer></script>
        <script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
        <!-- <link href="/css/app.css" rel="stylesheet"> -->
    </head>
  
    <section>
        @include('partials.nav')
    <section>

    <body class="bg-black">
            <div id="main">
                <div class="one"> @include('partials.header')</div>
              
                <div class="two ">
                    <div class="intro">
                        <h3 class="text-9xl font-bold flex text-left text-white">Welcome to my <br>digital space!</h3>
                        <h3 class="text-3xl font-bold flex text-left text-white"><br>I'm Sud, a seasoned front-End Developer + creative </h3>
                        <p class="text-white text-2xl w-2/4 font-thin mt-4">With a background in graphic and web design, I bring a wealth of experience to craft 
                        engaging online experiences. Explore my journey and the projects that define my commitment to innovation in web development."
                        </p>
                    </div>

                     <div class="intro-hover">   
                        <h3 class="text-9xl font-bold flex text-left text-white">Welcome to my <br>digital space!</h3>
                        <h3 class="text-3xl font-bold flex text-left text-white"><br>I'm Sud, a seasoned front-End Developer + creative </h3>
                        <p class="text-white text-2xl w-2/4 font-thin mt-4">With a background in graphic and web design, <br>I bring a wealth of experience to craft 
                        engaging online experiences. Explore my journey and the projects that define my commitment to innovation in web development."
                        </p>
                    </div>
                </div>


                <div class="three">

                </div>
          </div>
    </body>
</html>





