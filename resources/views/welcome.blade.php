<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        @vite('resources/js/script.js')
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
        <title>SVKR::Portfolio</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>        
        <script src="https://unpkg.com/@studio-freight/lenis@1.0.34/dist/lenis.min.js"></script> 
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
  
    <div class="cursor"></div>
    
    <section>
        @include('partials.nav')
    <section>

    <body class="bg-black">
            <div id="main">
                <div class="section-one"> 
                @include('partials.header')</div>
               
                <div class="section-two">
                    <div class="text-area-two">
                         Welcome to my digital space!
                        <br>I'm Sud, a seasoned<br>front-End Developer + creative 
                        <p class="text-2xl font-light">With a background in graphic and web design, I bring a wealth of experience to craft engaging online experiences.<br>
                         Explore my journey and the projects that define my commitment to innovation in web development.</p>
                    </div>

                    <div class="text-area-two-clone">
                         Welcome to my digital space!
                        <br>I'm Sud, a seasoned<br>front-End Developer + creative 
                        <p class="text-2xl font-light">With a background in graphic and web design, I bring a wealth of experience to craft engaging online experiences.<br>
                         Explore my journey and the projects that define my commitment to innovation in web development.</p>
                    </div>
                </div>

                <div class="text-area-two">
                         Welcome to my digital space!
                        <br>I'm Sud, a seasoned<br>front-End Developer + creative 
                    </div>
              </div>
    </body>
</html>





