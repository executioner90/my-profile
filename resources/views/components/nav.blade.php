<nav class="bg-gray-950 top-0 sticky flex flex-wrap sm:flex-nowrap w-full mx-auto sm:px-4 sm:flex sm:items-center sm:justify-between z-40">
    <div class="navbar overflow-hidden transition-all duration-300 basis-full grow sm:block">
        {{-- Desktop version --}}
        <div class="hidden md:flex flex-col gap-12 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
            <img src="{{ asset('/images/logo-white-removebg.png') }}" class="w-16 py-1" alt="Logo">

            <x-nav.items></x-nav.items>
        </div>

        {{-- Mobile version --}}
        <div class="md:hidden grid grid-cols-2">
            <div class="pl-2">
                <img src="{{ asset('/images/logo-white-removebg.png') }}" class="w-16 py-1" alt="Logo">
            </div>

            <div class="grid justify-end pr-2">
                <button id="toggle-mobile-nav-button" class="text-white hover:text-green-400 hover:animate-pulse">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg" id="menu-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>

                    <svg class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg" id="close-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                    </svg>

                </button>
            </div>
        </div>

        <div id="navbar-links" class="hidden md:hidden">
            <div class="grid grid-rows-1 justify-items-center">
                <x-nav.items mobile></x-nav.items>
            </div>
        </div>
    </div>
</nav>
