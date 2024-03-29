<div id="more" class="min-h-screen w-screen p-10 section flex flex-col items-center justify-center bg-gray-200">
    {{-- Desktop version --}}
    <div class="image-container mb-6 hidden md:block">
        <img class="rounded-full front-image" src="{{ asset('/images/about/now-me.png') }}" alt="Me now">

        <a href="{{ asset('/pdf/mohammad-aldaas-english.pdf') }}" target="_blank">
            <img class="rounded-full back-image" src="{{ asset('/images/logo/logo-dark-removebg.png') }}"
                 alt="Click on logo to open CV">
        </a>
    </div>

    <div class="mt-16 hidden md:block">
        <div class="grid grid-cols-4 gap-8 mb-10 w-full justify-center">
            <div
                class="about-me-card elements-to-animate show-8 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                Last station The Netherlands
            </div>

            <div
                class="about-me-card elements-to-animate show-7 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                Embarking on a journey to Europe (Germany one year)
            </div>

            <div
                class="about-me-card elements-to-animate show-6 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                Hard work in Lebanon
            </div>

            <div
                class="about-me-card elements-to-animate show-5 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                Embarking on a journey to Lebanon
            </div>
        </div>

        <div class="grid grid-cols-4 gap-8 mb-10 w-full justify-center">
            <div
                class="about-me-card elements-to-animate show-9 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                Fulltime study and working simultaneously
            </div>

            <div
                class="about-me-card elements-to-animate show-4 col-start-4 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                The catastrophe (Syria 2011)
            </div>
        </div>

        <div class="grid grid-cols-4 gap-8 mb-10 w-full justify-center">
            <div
                class="about-me-card elements-to-animate show-10 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                High school certificates (English, maths, physics)
            </div>

            <div
                class="about-me-card elements-to-animate show-3 col-start-4 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                Highs school education in Syria
            </div>
        </div>

        <div class="grid grid-cols-4 gap-8 w-full justify-center">
            <div
                class="about-me-special-card elements-to-animate show-11 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                Diploma Software developer
            </div>

            <div
                class="about-me-special-card elements-to-animate show-2 col-start-4 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                From childhood till now, my dream has been a constant companion, always alive and burning bright - to be
                a software developer.
            </div>
        </div>

        <div class="grid grid-cols-4 gap-8 mt-10 w-full justify-center">
            <div
                class="about-me-card elements-to-animate show-12 py-6 px-3 flex items-center justify-center text-center rounded-3xl">
                    <span>
                        A software developer for <a class="hover:text-green-400" href="https://www.inktweb.nl">Inktweb.nl</a>
                    </span>
            </div>

            <div class="col-span-2 flex items-center justify-center">
                <div class="grid grid-cols-1">
                    <div class="text-center">
                        <div class="about-me-special-card elements-to-animate show-13 py-6 px-6 rounded-3xl">
                            Dream achieved!
                        </div>
                    </div>
                    <div></div>
                </div>
            </div>

            <div class="py-3 px-3 flex items-center justify-center text-center rounded-3xl elements-to-animate show-1">
                <div class="w-2/6">
                    <img src="{{ asset('/images/about/young-me.png') }}" alt="Young me">
                </div>
            </div>
        </div>
    </div>

    {{-- Small screens version --}}
    <div class="md:hidden grid grid-cols-1 gap-2 mt-10">
        <div class="about-me-special-card py-6 px-3 mb-2">
            From childhood till now, my dream has been a constant companion, always alive and burning bright - to be
            a software developer.
        </div>
        <div class="shadow py-6 px-3 mb-2 text-center">
            Highs school education in Syria
        </div>
        <div class="about-me-card py-6 px-3 my-2 text-center">
            The catastrophe (Syria 2011)
        </div>
        <div class="shadow py-6 px-3 my-2 text-center">
            Embarking on a journey to Lebanon
        </div>
        <div class="about-me-card py-6 px-3 my-2 text-center">
            Hard work in Lebanon
        </div>
        <div class="shadow py-6 px-3 my-2 text-center">
            Embarking on a journey to Europe (Germany one year)
        </div>
        <div class="about-me-card py-6 px-3 my-2 text-center">
            Last station The Netherlands
        </div>
        <div class="shadow py-6 px-3 my-2 text-center">
            Fulltime study and working simultaneously
        </div>
        <div class="about-me-card py-6 px-3 my-2 text-center">
            High school certificates (English, maths, physics)
        </div>
        <div class="shadow py-6 px-3 my-2 text-center">
            Diploma Software developer
        </div>
        <div class="about-me-card py-6 px-3 my-2 text-center">
            <span>
                A software developer for <a class="hover:text-green-400" href="https://www.inktweb.nl">Inktweb.nl</a>
            </span>
        </div>
        <div class="about-me-special-card show-13 py-6 px-6 my-2 text-center">
            Dream achieved!
        </div>
    </div>
</div>


