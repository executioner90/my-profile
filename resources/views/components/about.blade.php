<div id="about" class="min-h-screen w-screen section flex flex-col justify-center bg-gray-200">
    <x-about.carousel></x-about.carousel>

    <div class="grid grid-cols-1 md:grid-cols-2 px-20 mt-5">
        <div id="text">
            <div class="grid grid-rows-1 md:grid-rows-2 gap-y-5">
                <div class="hidden md:flex md:justify-center">
                    <img class="w-1/3" src="{{ asset('/images/logo/logo-dark-removebg.png') }}" alt="{{ Lang::get('Logo') }}">
                </div>

                <div>
                    <div class="flex justify-center">
                        <h3>@lang('And more!')</h3>
                    </div>

                    <div class="flex justify-center text-center font-thin px-16">
                        <div>
                            @lang("What you've seen is just the beginning. I love learning, embracing challenges, and ensuring success. Curious to know more?") <span id="contactMe" class="nav-item cursor-pointer">@lang("Let's chat!")</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-about.bars :data="$skills"></x-about.bars>
    </div>

</div>
