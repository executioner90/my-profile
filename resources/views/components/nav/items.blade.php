<div
    id="homeLink"
    class="nav-item @if($mobile) pb-3 w-3/4 text-center mobile-nav @else py-3 @endif text-xl text-white hover:text-orange-500 cursor-pointer"
>
    @lang('Home')
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    id="aboutLink"
    class="nav-item py-3 @if($mobile) w-3/4 text-center mobile-nav @endif text-xl text-white hover:text-orange-500 cursor-pointer"
>
    @lang('About')
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    id="moreLink"
    class="nav-item py-3 @if($mobile) w-3/4 text-center mobile-nav @endif text-xl text-white hover:text-orange-500 cursor-pointer"
>
    @lang('More')
</div>

@if($mobile)
    <hr class="w-3/4">
@endif

<div
    id="contactLink"
    class="nav-item py-3 @if($mobile) w-3/4 text-center mobile-nav @endif text-xl text-white hover:text-orange-500 cursor-pointer"
>
    @lang('Contact')
</div>
