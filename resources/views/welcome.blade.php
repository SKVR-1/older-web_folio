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

                <!--section-1-->
                <div class="section-one"> 
                @include('partials.header')
              </div>
               <!--end-->
               
                <!--section-2-->
                <div class="section-two">
                    <div class="welcome-to-my-digital-space text-area-two">
                         Welcome to my digital space!
                        <br>I'm Sud, a seasoned<br>front-End Developer <span class="text-pink"> + </span> creative 
                        <p class="text-3xl font-thin">With a background in graphic and web design, I bring <br> a wealth of experience to craft engaging online experiences.<br>
                         Explore my journey and the projects that define <br> my commitment to innovation in web development.</p>
                    </div>
                    </div>
                </div>
                 <!--end-->

                <!--section-3-->
                
                <div class="wolves-aye-we text-8xl text-center font-extrabold">Wolves Aye <em>We</em></div>
                <div class="how-it-all-started flex gap-10">
                    <p class="outline-text text-7xl font-bold italic">HOW IT ALL STARTED</p>
                    <p class="outline-text text-7xl font-bold italic">HOW IT ALL STARTED</p>
                    <p class="outline-text text-7xl font-bold italic">HOW IT ALL STARTED</p>
                    <p class="outline-text text-7xl font-bold italic">HOW IT ALL STARTED</p>
                </div>
                
                    <div class="section-three">
                        <div class="grid grid-cols-2 gap-30 place-items-center  mx-auto">
                        <div class=" w-1/2 h-1/2">
                        <div class='reveal'>
                            <img src='https://images.unsplash.com/photo-1526413232644-8a40f03cc03b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80%20634w'>
                        </div>
                        </div>

                        <div class="raised-block">
                            <p class="raised-text text-2xl leading-10 font-thin mt:15 mr-20">Raised in Wolverhampton, my journey commenced with a fervor for Fine Art, drawing inspiration from the likes of Picasso, Dali, Monet, and other prominent figures. Subsequently, my trajectory shifted towards graphic design, with influences drawn from the works of Neville Brody and David Carson. Adding to this, I've always been willing to take on new challenges, leading me to venture into graphic design, followed by digital, and then web development. </p>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="how-it-all-started flex gap-10 ">
                <p class="outline-text text-7xl font-bold italic">HOW IT ALL STARTED</p>
                <p class="outline-text text-7xl font-bold italic">HOW IT ALL STARTED</p>
                <p class="outline-text text-7xl font-bold italic">HOW IT ALL STARTED</p>
                <p class="outline-text text-7xl font-bold italic">HOW IT ALL STARTED</p>
                </div>
            </div>

            <!--end-->

           
            <!--section-4-->
            <div class="contact-heading text-8xl text-center mt-20 font-extrabold">
                 Selected <em>Work</em>
            </div>

         <div class="section-four">
            <main class="container mx-auto px-4 py-6">
                <!-- Horizontal Slideshow -->
                
                <div class="overflow-x-hidden w-full">
                  
                <div class="flex gap-6 whitespace-nowrap items-center slideshow">
               
                    <!-- Slide 1 -->
                    <div class="slide-item bg-white shadow-lg rounded-lg cursor-pointer w-64 h-40 flex-shrink-0">
                        <img src="https://via.placeholder.com/400x200" alt="Slide 1" class="w-full h-full object-cover rounded-lg">
                    </div>

                    <!-- Slide 2 -->
                    <div class="slide-item bg-white shadow-lg rounded-lg cursor-pointer w-64 h-40 flex-shrink-0">
                        <img src="https://via.placeholder.com/400x200" alt="Slide 2" class="w-full h-full object-cover rounded-lg">
                    </div>

                    <!-- Slide 3 -->
                    <div class="slide-item bg-white shadow-lg rounded-lg cursor-pointer w-64 h-40 flex-shrink-0">
                        <img src="https://via.placeholder.com/400x200" alt="Slide 3" class="w-full h-full object-cover rounded-lg">
                    </div>

                    <!-- Slide 3 -->
                    <div class="slide-item bg-white shadow-lg rounded-lg cursor-pointer w-64 h-40 flex-shrink-0">
                        <img src="https://via.placeholder.com/400x200" alt="Slide 4" class="w-full h-full object-cover rounded-lg">
                    </div>

                    <!-- Slide 3 -->
                    <div class="slide-item bg-white shadow-lg rounded-lg cursor-pointer w-64 h-40 flex-shrink-0">
                        <img src="https://via.placeholder.com/400x200" alt="Slide 5" class="w-full h-full object-cover rounded-lg">
                    </div>

                    <!-- Slide 3 -->
                    <div class="slide-item bg-white shadow-lg rounded-lg cursor-pointer w-64 h-40 flex-shrink-0">
                        <img src="https://via.placeholder.com/400x200" alt="Slide 6" class="w-full h-full object-cover rounded-lg">
                    </div>
                  </div>
              </div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between mt-4">
                    <button class="prev-btn bg-gray-800 text-white px-4 py-2 rounded-full hover:bg-gray-700">← Scroll Left</button>
                    <button class="next-btn bg-gray-800 text-white px-4 py-2 rounded-full hover:bg-gray-700">→ Scroll Right</button>
                </div>


                <!-- Enlarged View (Hidden by Default) -->
                <div id="enlargedView" class="fixed inset-0 bg-gray-900 bg-opacity-90 hidden flex items-center justify-center z-50">
                   <div class="bg-white rounded-lg shadow-lg flex overflow-hidden w-[90%] max-w-4xl">
                    <div class="w-1/2">
                    <img id="enlargedImage" src="" alt="Enlarged" class="w-full h-full object-cover">
                    </div>
                    <div class="w-1/2 p-6">
                    <h2 id="enlargedTitle" class="text-2xl font-bold mb-4">Project Title</h2>
                    <p id="enlargedDescription" class="text-sm text-gray-600">
                        Description of the selected project. Add details about the project here, such as its purpose, technologies used, and other relevant information.
                    </p>
                    <button id="closeButton" class="mt-4 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                        Close
                    </button>
                    </div>
                  </div>
              </div>
            </div>
         
            <div class="contact-heading text-white text-8xl text-center mt-20 font-extrabold">
                 Selected <em>Work</em>
            </div>

                <!--section-5-->
                <div class="section-five">
                    <div class="welcome-to-my-digital-space">
                        <p class="text-center"> Send me an email: info@skvr.com</p>
                        <p>CREATED WITH (HEART EMOJI) FROM WOLVERHAMPTON. </p>
                    </div>
                </div>
                 <!--end-->
            
                 <div class="thankyou text-white text-8xl text-center mt-20 font-extrabold">
                 Thank<em>You</em>
            </div>

         </main>
    </body>
</html>





