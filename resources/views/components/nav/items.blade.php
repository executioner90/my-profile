<div
    id="homeLink"
    class="nav-item @if($mobile) pb-3 w-3/4 text-center mobile-nav @else py-3 @endif text-xl text-white hover:text-orange-500 cursor-pointer"
>
    Home
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    id="aboutLink"
    class="nav-item py-3 @if($mobile) w-3/4 text-center mobile-nav @endif text-xl text-white hover:text-orange-500 cursor-pointer"
>
    About
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    id="projectsLink"
    class="nav-item py-3 @if($mobile) w-3/4 text-center mobile-nav @endif text-xl text-white hover:text-orange-500 cursor-pointer"
>
    Projects
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    id="contactLink"
    class="nav-item py-3 @if($mobile) w-3/4 text-center mobile-nav @endif text-xl text-white hover:text-orange-500 cursor-pointer"
>
    Contact
</div>
