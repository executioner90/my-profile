<div
    id="homeLink"
    class="nav-item @if($mobile) pb-3 w-3/4 text-center mobile-nav @else py-3 @endif text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
>
    Home
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    id="aboutLink"
    class="nav-item py-3 @if($mobile) w-3/4 text-center mobile-nav @endif text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
>
    About
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    id="projectsLink"
    class="nav-item py-3 @if($mobile) w-3/4 text-center mobile-nav @endif text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
>
    Projects
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    id="contactLink"
    class="nav-item py-3 @if($mobile) w-3/4 text-center mobile-nav @endif text-xl text-white hover:text-green-400 active:text-green-400 focus:outline-none cursor-pointer"
>
    Contact
</div>
