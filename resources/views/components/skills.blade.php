<div id="skills" class="min-h-screen w-screen section flex flex-col items-center justify-center bg-gray-200">
    <x-skills.carousel></x-skills.carousel>

    <div class="grid grid-cols-2 gap-x20">
        <div class="mt-5">
            <div class="grid grid-rows-2">
                <div>
                    <img class="w-1/3" src="{{ asset('/images/logo/logo-dark-removebg.png') }}" alt="Logo">
                </div>
                <div>
                    {{-- Add text --}}
                </div>
            </div>
        </div>

        <x-skills.bars :data="$skills"></x-skills.bars>
    </div>

</div>
