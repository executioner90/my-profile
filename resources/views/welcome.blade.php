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
        {{-- Home page --}}
        <div id="home">
            <canvas id="myCanvas"></canvas>
            <div class="flex flex-col min-h-screen justify-center items-center text-center">
                <div class="text-white text-lg md:text-4xl mb-5">
                    Hello, I'm <span class="highlight">Mohammad Aldaas</span>.
                    <br>
                    I'm a full-stack web developer.
                    <br>
                    <span class="slogan">Crafting Code, Building Dreams: Your Vision, Our Expertise!</span>
                </div>

                <div class="cursor-pointer" onclick="document.getElementById('about').scrollIntoView()">
                    <div class="bg-transparent button hover:text-white py-2 px-4 border rounded hover:show-down">
                        View my work
                        <i class="fa fa-arrow-right text-base pl-2"></i>
                        <i class="fa fa-arrow-down text-base pl-2"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Navbar --}}
        <nav class="bg-gray-950 top-0 sticky flex flex-wrap sm:flex-nowrap w-full mx-auto sm:px-4 sm:flex sm:items-center sm:justify-between z-40">
            <div class="navbar overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div class="flex flex-col gap-12 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
                    <img src="{{ asset('/images/logo-white-removebg.png') }}" class="w-16 py-1" alt="Logo">

                    <div
                        class="py-3 text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
                        onclick="document.getElementById('home').scrollIntoView()"
                        id="homeLink"
                    >
                        Home
                    </div>

                    <div
                        class="py-3 text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
                        onclick="document.getElementById('about').scrollIntoView()"
                        id="aboutLink"
                    >
                        About
                    </div>

                    <div
                        class="py-3 text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
                        onclick="document.getElementById('projects').scrollIntoView()"
                        id="projectsLink"
                    >
                        Projects
                    </div>

                    <div
                        class="py-3 text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
                        onclick="document.getElementById('contact').scrollIntoView()"
                        id="contactLink"
                    >
                        Contact
                    </div>
                </div>
            </div>
        </nav>

        {{-- About me --}}
        <div id="about" class="min-h-screen w-screen about">
            <div class="grid grid-cols-4 gap-20 mt-3.5 mb-2">
                <div class="about-me-card py-10 px-3 flex items-center justify-center text-center rounded-3xl">
                    Last station The Netherlands
                </div>

                <div class="about-me-card py-10 px-3 flex items-center justify-center text-center rounded-3xl">
                    Embarking on a journey to Europe (Germany one year)
                </div>

                <div class="about-me-card py-10 px-3 flex items-center justify-center text-center rounded-3xl">
                    Hard work in Lebanon
                </div>

                <div class="about-me-card py-10 px-3 flex items-center justify-center text-center rounded-3xl">
                    Embarking on a journey to Lebanon
                </div>
            </div>

            <div class="grid grid-cols-4 gap-20 my-6">
                <div class="about-me-card py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                    Fulltime study and working simultaneously
                </div>

                <div class="col-span-2">
                    <div class="grid grid-cols-2 m-3">
                        <div class="about-me-card py-6 px-6 flex items-center justify-center text-center rounded-3xl mr-2">
                            Flexibility and more understanding about individuality
                        </div>
                        <div class="about-me-card py-6 px-6 flex items-center justify-center text-center rounded-3xl">
                            Work under pressure and stay positive (except when it comes to corona)
                        </div>
                    </div>
                </div>

                <div class="about-me-card py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                    The catastrophe (Syria 2011)
                </div>
            </div>

            <div class="grid grid-cols-4 gap-20 my-6">
                <div class="about-me-card py-2 px-3 flex items-center justify-center text-center rounded-3xl">
                    High school certificates (English, maths, physics)
                </div>

                <div class="col-span-2">
                    <div class="grid grid-cols-3 m-3">
                        <div class="about-me-card py-2 px-6 flex items-center justify-center text-center rounded-3xl">
                            Never give up and be patient
                        </div>

                        <div class="flex items-center justify-center text-center rounded-3xl">
                            <div class="w-4/6">
                                <img src="{{ asset('/images/now-me.png') }}" alt="Me now">
                            </div>
                        </div>

                        <div class="about-me-card py-2 px-6 flex items-center justify-center text-center rounded-3xl">
                            Ambition
                        </div>
                    </div>
                </div>

                <div class="about-me-card py-2 px-3 flex items-center justify-center text-center rounded-3xl">
                    Highs school education in Syria
                </div>
            </div>

            <div class="grid grid-cols-4 gap-20 my-6">
                <div class="about-me-special-card py-3 px-3 flex items-center justify-center text-center rounded-3xl">
                    Diploma Software developer
                </div>

                <div class="col-span-2">
                    <div class="grid grid-cols-2 rounded-3xl m-3">
                        <div class="about-me-card py-8 px-6 flex items-center justify-center text-center rounded-3xl mr-2">
                            Practicality, analytical skills and teamwork
                        </div>

                        <div class="about-me-card py-8 px-6 flex items-center justify-center text-center rounded-3xl">
                            Dedication and commitment
                        </div>
                    </div>
                </div>


                <div class="about-me-special-card py-3 px-3 flex items-center justify-center text-center rounded-3xl">
                    From childhood till now, my dream has been a constant companion, always alive and burning bright - to be a software developer.
                </div>
            </div>

            <div class="grid grid-cols-4 gap-20 mt-6">
                <div class="about-me-card py-3 px-3 flex items-center justify-center text-center rounded-3xl">
                    <span>
                        A software developer for <a class="hover:text-green-400" href="https://www.inktweb.nl">Inktweb.nl</a>
                    </span>
                </div>

                <div class="col-span-2 flex items-center justify-center">
                    <div class="grid grid-cols-1">
                        <div class="text-center">
                            <div class="about-me-special-card py-6 px-6 rounded-3xl">
                                Dream achieved!
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>

                <div class="py-3 px-3 flex items-center justify-center text-center rounded-3xl">
                    <div class="w-2/6">
                        <img src="{{ asset('/images/young-me.png') }}" alt="Young me">
                    </div>
                </div>
            </div>
        </div>

        {{-- my projects --}}
        <div id="projects" class="min-h-screen w-screen bg-amber-800">
            <span class="text-4xl">projects</span>
        </div>

        {{-- contact me --}}
        <div id="contact" class="min-h-screen w-screen bg-violet-700">
            <span class="text-4xl">contact</span>
        </div>
    </body>
</html>
