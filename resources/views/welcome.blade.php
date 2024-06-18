<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Mohammad Aldaas">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Profile, developer, Laravel, PHP, HTML, CSS, JavaScript">
        <meta name="Description" content="Discover more about top-notch full-stack developers. Enjoy the journey! ">

        <title>@lang('Mohammad Aldaas - profile')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <div class="fixed top-0 right-0 m-4 z-50">
            <div class="dropdown group">
                <span class="text-white px-4 py-2 rounded dropdown-toggle border border-secondary">
                    {{ strtoupper(Config::get('app.locale')) }}
                </span>

                <ul class="dropdown-menu hidden group-hover:block absolute top-full right-0 mt-2 w-16 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                    <li><a href="{{route('welcome',  ['locale' => 'ar'])}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">AR</a></li>
                    <li><a href="{{route('welcome')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">EN</a></li>
                </ul>
            </div>
        </div>

        <x-home></x-home>

        <div>
            <x-nav></x-nav>

            <x-about :data="$data"></x-about>

            <x-more></x-more>

            <x-contact></x-contact>
        </div>
    </body>
</html>
