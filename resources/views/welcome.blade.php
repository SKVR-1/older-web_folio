<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        @vite('resources/css/app.css')
        <title>SVKR::Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    </head>


    <body class="bg-black">
        <section>
            @include('partials.nav')
        <section>

        <section>
        @include('partials.header')
        <section>
    </div>

    </body>
    </html>
