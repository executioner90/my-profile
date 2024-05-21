<nav class="bg-gray-950 top-0 sticky w-full mx-auto z-40">
    <div class="navbar">
        {{-- Desktop version --}}
        <div class="hidden md:grid grid-cols-1 desktop-nav">
            <div class="flex justify-center gap-20 items-center">
                <img src="{{ asset('/images/logo/logo-white-removebg.png') }}" class="w-14 py-2" alt="{{ Lang::get('Logo') }}">

                <x-nav.items></x-nav.items>
            </div>
        </div>

        {{-- Mobile version --}}
        <div class="grid grid-cols-2 justify-items-center md:hidden">
            <img src="{{ asset('/images/logo/logo-white-removebg.png') }}" class="w-14 py-2" alt="{{ Lang::get('Logo') }}">

            <div class="grid justify-end">
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
