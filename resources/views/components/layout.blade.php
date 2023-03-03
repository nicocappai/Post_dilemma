<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>The Aulab Post</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap');
      </style>  
</head>
<body>
    <x-navbar />
    <x-header />
    <div class="min-vh-100">
        {{$slot}}
    </div>
    <x-footer />
    <script src="https://kit.fontawesome.com/8234f4d33d.js" crossorigin="anonymous"></script>
</body>
</html>