<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        @vite('resources/js/script.js')
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
        <title>SVKR::Portfolio</title>
        <script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
  
    <section>
        @include('partials.nav')
    <section>

    <body class="bg-black">
            <div id="main">
                <div class="one"> 
                    @include('partials.header')
                </div>
              
                <div class="two">
                    <div class="text-area">
                         Welcome to my <br>digital space!
                        <br>I'm Sud, a seasoned front-End Developer + creative 
                         With a background in graphic and web design, I bring a wealth of experience to craft 
                        engaging online experiences. <br>Explore my journey and the projects that define my commitment to innovation in web development."
                    </div>

                    <div class="text-area-hover">
                         Welcome to my <br>digital space!
                        <br>I'm Sud, a seasoned front-End Developer + creative 
                         With a background in graphic and web design, I bring a wealth of experience to craft 
                        engaging online experiences. <br>Explore my journey and the projects that define my commitment to innovation in web development."
                    </div>
                </div>


                <div class="three">
                </div>
          </div>
    </body>
</html>





