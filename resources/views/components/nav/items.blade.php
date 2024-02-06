<div
    class="@if($mobile) pb-3 w-3/4 text-center @else py-3 @endif text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
    onclick="navigate('home', {{ $mobile }})"
    id="homeLink"
>
    Home
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    class="py-3 @if($mobile) w-3/4 text-center @endif text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
    onclick="navigate('about', {{ $mobile }})"
    id="aboutLink"
>
    About
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    class="py-3 @if($mobile) w-3/4 text-center @endif text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
    onclick="navigate('projects', {{ $mobile }})"
    id="projectsLink"
>
    Projects
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    class="py-3 @if($mobile) w-3/4 text-center @endif text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
    onclick="navigate('contact', {{ $mobile }})"
    id="contactLink"
>
    Contact
</div>
