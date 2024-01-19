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
        <div class="relative">
            {{-- Home page --}}
            <div id="home">
                <canvas id="myCanvas"></canvas>
                <div class="flex flex-col h-screen justify-center items-center text-center">
                    <div class="text-white text-lg md:text-4xl mb-5">
                        Hello, I'm <span class="highlight">Mohammad Aldaas</span>.
                        <br>
                        I'm a full-stack web developer.
                        <br>
                        <span class="slogan">Crafting Code, Building Dreams: Your Vision, Our Expertise!</span>
                    </div>

                    <a href="#about">
                        <div class="bg-transparent button hover:text-white py-2 px-4 border rounded hover:show-down">
                            View my work
                            <i class="fa fa-arrow-right text-base pl-2"></i>
                            <i class="fa fa-arrow-down text-base pl-2"></i>
                        </div>
                    </a>
                </div>
            </div>

            <nav class="bg-gray-800 top-0 sticky flex flex-wrap sm:flex-nowrap w-full mx-auto sm:px-4 sm:flex sm:items-center sm:justify-between z-40">
                <div id="navbar-collapse-basic" class="navbar overflow-hidden transition-all duration-300 basis-full grow sm:block">
                    <div class="flex flex-col gap-8 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
                        <img src="{{ asset('/images/logo-white-removebg.png') }}" class="w-16 py-1" alt="Logo">
                        <a class="py-3 text-lg text-white hover:text-rose-800 focus:outline-none focus:text-rose-800 active:text-4xl"
                           href="#home">Home</a>
                        <a class="py-3 text-lg text-white hover:text-rose-800 focus:outline-none focus:text-rose-800 active:text-4xl"
                           href="#about">About</a>
                        <a class="py-3 text-lg text-white hover:text-rose-800 focus:outline-none focus:text-rose-800"
                           href="#projects">Projects</a>
                        <a class="py-3 text-lg text-white hover:text-rose-800 focus:outline-none focus:text-rose-800"
                           href="#contact">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div id="about" class="h-screen w-screen bg-rose-500">
                    <span class="text-4xl">about</span>
                </div>

                {{-- my projects --}}
                <div id="projects" class="h-screen w-screen bg-amber-800">
                    <span class="text-4xl">projects</span>
                </div>

                {{-- contact me --}}
                <div id="contact" class="h-screen w-screen bg-violet-700">
                    <span class="text-4xl">contact</span>
                </div>
            </div>
        </div>
    </body>
</html>
