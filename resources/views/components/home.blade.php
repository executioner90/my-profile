<div id="home" class="section">
    <canvas id="myCanvas"></canvas>
    <div class="flex flex-col min-h-screen justify-center items-center text-center">
        <div class="text-white text-lg md:text-4xl mb-5">
            @lang('Hello'), @lang("I'm") <span class="highlight">@lang('Mohammad Aldaas')</span>.
            <br>
            @lang("I'm") @lang('a full-stack web developer').
            <br>
            <span class="slogan">@lang('Crafting Code, Building Dreams: Your Vision, Our Expertise!')</span>
        </div>

        <div class="cursor-pointer">
            <div id="mainNav" class="bg-transparent button hover:text-white py-2 px-4 border rounded hover:show-down nav-item">
                @lang('View my work')
                <i class="fa fa-arrow-right text-base pl-2"></i>
                <i class="fa fa-arrow-down text-base pl-2"></i>
            </div>
        </div>
    </div>
</div>
