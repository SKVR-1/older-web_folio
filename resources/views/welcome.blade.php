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
                        <p class="text-3xl font-thin">With a background in graphic and web design, I bring <br> a wealth of experience to craft engaging online experiences.<br>
                         Explore my journey and the projects that define <br> my commitment to innovation in web development.</p>
                    </div>
                    <div class="text-area-two-clone">
                         Welcome to my digital space!
                        <br>I'm Sud, a seasoned<br>front-End Developer + creative 
                         
                    
                        <p class="text-3xl font-thin">With a background in graphic and web design,
                           I bring <br> a wealth of experience to craft engaging online experiences.<br>
                           Explore my journey and the projects that define<br>  my commitment to innovation
                           in web development.
                        </p>
                    </div>
                </div>

                <div class="how-it-started flex gap-10">
                    <p class="text-5xl font-bold italic text-white">HOW IT ALL STARTED</p>
                    <p class="text-5xl font-bold italic text-white">HOW IT ALL STARTED</p>
                    <p class="text-5xl font-bold italic text-white">HOW IT ALL STARTED</p>
                    <p class="text-5xl font-bold italic text-white">HOW IT ALL STARTED</p>
                </div>
                <div class="wolves-aye-we text-8xl text-center mt-20 font-extrabold">Wolves Aye <em>We</em></div>
                <div class="section-three">
                    <div class="grid grid-cols-2 gap-30 place-items-center  mx-auto">
                    <div class=" w-1/2 h-1/2">
                    <div class='reveal'>
                        <img src='https://images.unsplash.com/photo-1526413232644-8a40f03cc03b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80%20634w'>
                     </div>
                    </div>

                    <div class="raised-block">
                        <p class="raised-text text-2xl leading-10 font-thin mr-20">Raised in Wolverhampton, my journey commenced with a fervor for Fine Art, drawing inspiration from the likes of Picasso, Dali, Monet, and other prominent figures. Subsequently, my trajectory shifted towards graphic design, with influences drawn from the works of Neville Brody and David Carson. </p>
                        </p>
                        <div class="education mt-8">
                            <div class="text-2xl uppercase">Education</div>
                            <p>1991 - 1996: Colton Hills School with 5 GCSE's</p>
                            <p>1996 - 1999: Dudley College GNVQ  Art & Design Grade: Merit</p>
                            <p>1999 - 2002: University of Wolverhampton BA (Hons) Graphic Communication Grade: 2:1</p>
                        </div>
                    </div>
                </div>
          </div>

            <div class="how-started flex gap-10">
                <p class="text-5xl font-bold italic text-white">HOW IT ALL STARTED</p>
                <p class="text-5xl font-bold italic text-white">HOW IT ALL STARTED</p>
                <p class="text-5xl font-bold italic text-white">HOW IT ALL STARTED</p>
                <p class="text-5xl font-bold italic text-white">HOW IT ALL STARTED</p>
            </div>
           
    </body>
</html>





