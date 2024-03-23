<div id="skills" class="min-h-screen w-screen section flex flex-col items-center justify-center bg-gray-200">
    <x-skills.carousel></x-skills.carousel>

    <div class="grid grid-cols-2 gap-x20">
        <div>
            {{-- Here logo and some text about me --}}
        </div>

        <x-skills.bars :data="$skills"></x-skills.bars>
    </div>

</div>
