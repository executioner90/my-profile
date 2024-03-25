<div id="skills" class="min-h-screen w-screen section flex flex-col justify-center bg-gray-200">
    <x-skills.carousel></x-skills.carousel>

    <div class="grid grid-cols-2 px-20 mt-5">
        <div>
            <div class="grid grid-rows-2 gap-y-5">
                <div class="flex justify-center">
                    <img class="w-1/3" src="{{ asset('/images/logo/logo-dark-removebg.png') }}" alt="Logo">
                </div>

                <div>
                    <div class="flex justify-center">
                        <h3>And more!</h3>
                    </div>

                    <div class="flex justify-center text-center font-thin px-16">
                        What you've seen is just the beginning. I love learning, embracing challenges, and ensuring success. Curious to know more? Let's chat.                    </div>
                </div>
            </div>
        </div>

        <x-skills.bars :data="$skills"></x-skills.bars>
    </div>

</div>
