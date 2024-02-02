<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        @vite('resources/css/app.css')
        <title>SVKR::Portfolio</title>
        <script src="js/script.js"defer></script>
        <script src="js/app.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>


    <body class="bg-black">
        <section>
            @include('partials.nav')
        <section>

        <section>
        @include('partials.header')
        <section>


<div class="container">
  <h1 class="text">TEXT EFFECT<span>WOAH</span></h1>
  <h1 class="text">GSAP<span>AND CLIPPING</span></h1>
  <h1 class="text">CRAZYYY<span>CRAZYYY</span></h1>
  <h1 class="text">HOVER ON ME<span><a href="https://stacksorted.com/text-effects/minh-pham" target="_blank">SOURCE</a></span></h1>
  <h1 class="text">LIKE THIS?<span><a href="https://twitter.com/juxtopposed" target="_blank">LET'S CONNECT</a></span></h1>
</div>
</div>

</body>
</html>



    <style>


