<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Mohammad Aldaas">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Profile, developer, Laravel, PHP, HTML, CSS, JavaScript">
        <meta name="Description" content="Discover more about top-notch full-stack developers. Enjoy the journey! ">

        <title>Mohammad Aldaas - profile</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <x-home></x-home>

        <div>
            <x-nav></x-nav>

            <x-projects></x-projects>

            <x-about></x-about>

            <x-contact></x-contact>
        </div>
    </body>
</html>
