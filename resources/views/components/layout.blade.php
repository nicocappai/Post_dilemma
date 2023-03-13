<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/js/style-switcher.js'])


    <title>The Aulab Post</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap');
    </style>
</head>
<body>

    <x-navbar />

    {{-- spinner fase di caricamento --}}
    <div id="loading" class="d-flex justify-content-center align-content-center my-mio">
        <div class="loader">
            <div class="cell d-0"></div>
            <div class="cell d-1"></div>
            <div class="cell d-2"></div>

            <div class="cell d-1"></div>
            <div class="cell d-2"></div>


            <div class="cell d-2"></div>
            <div class="cell d-3"></div>


            <div class="cell d-3"></div>
            <div class="cell d-4"></div>


        </div>
    </div>

    <div id="pageContent" class="d-none">



            {{$slot}}


        <x-footer />

    </div>



    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    <script src="https://kit.fontawesome.com/8234f4d33d.js" crossorigin="anonymous"></script>
    {{-- swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>
</html>
