<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Mohammad Aldaas">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Profile, developer, Laravel, PHP, HTML, CSS, JavaScript">
    <meta name="Description" content="Discover more about top-notch full-stack developers. Enjoy the journey! ">

    <title>Mohammad Aldaas - profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<canvas id="myCanvas"></canvas>
<div class="flex flex-col h-screen justify-center items-center">
    <div class="text-white text-lg md:text-4xl mb-5">
        Hello, I'm <span class="highlight">Mohammad Aldaas</span>.
        <br>
        I'm a full-stack web developer.
        <br>
        <span class="slogan">Crafting Code, Building Dreams: Your Vision, Our Expertise!</span>
    </div>

    <div class="bg-transparent button hover:text-white py-2 px-4 border rounded hover:show-down">
        View my work
        <i class="fa fa-arrow-right text-base pl-2"></i>
        <i class="fa fa-arrow-down text-base pl-2"></i>
    </div>
</div>
</body>
</html>
