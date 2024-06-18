<div class="w-full mx-auto mt-28 p-6 md:text-lg hidden md:flex justify-center relative bg-white shadow-xl">

    <button
        id="slide-arrow-prev"
        class="absolute left-5 top-1/2 transform -translate-y-1/2 slide-arrow hover:bg-orange-600">
        &#8249;
    </button>

    <div class="w-11/12">
        <div class="carousel">
            <div class="carousel-inner">
                <div class="w-full carousel-item px-5">
                    <div class="carousel-content">
                        <div class="mr-10 w-1/4">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/web-development.png') }}"
                                     alt="Web Development">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Web development')
                            </div>

                            <div class="text-center">
                                @lang('Building and maintaining of websites.')
                            </div>
                        </div>

                        <div class="mx-10 w-1/4">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/fullstack.jpg')}}" alt="Fullstack">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Full-stack')
                            </div>

                            <div class="text-center">
                                @lang('Skilled in backend development with a knack for frontend tech.')
                            </div>
                        </div>

                        <div class="mx-10 w-1/4">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/debugging.png')}}"
                                     alt="Debug skills">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Debug skills')
                            </div>

                            <div class="text-center">
                                @lang('detecting and removing of existing errors.')
                            </div>
                        </div>

                        <div class="mx-10 w-1/4">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/review.jpg') }}" alt="Reviewer">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Reviewer')
                            </div>

                            <div class="text-center">
                                @lang('Masterful reviews that speak louder than words.')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full carousel-item px-5">
                    <div class="carousel-content">
                        <div class="mr-10 w-1/4">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/creative.png') }}"
                                     alt="Creative">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Creative')
                            </div>

                            <div class="text-center">
                                @lang('Finding new ways of solving problems.')
                            </div>
                        </div>

                        <div class="mx-10 w-1/4">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/teamwork.jpg') }}" alt="Teamwork">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Teamwork')
                            </div>

                            <div class="text-center">
                                @lang('Team player extraordinaire: I turn collaboration into success!')
                            </div>
                        </div>

                        <div class="mx-10 w-1/4">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/flexible.png') }}" alt="Flexible">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Flexible')
                            </div>

                            <div class="text-center">
                                @lang('Adaptable availability for various schedules and circumstances.')
                            </div>
                        </div>

                        <div class="mx-10 w-1/4">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/dedication.jpg') }}"
                                     alt="Dedication and commitment">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Dedication and commitment')
                            </div>

                            <div class="text-center">
                                @lang('Unwavering dedication, unwavering commitment.')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full carousel-item px-5">
                    <div class="carousel-content">
                        <div class="mr-10 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/pressure.jpg') }}"
                                     alt="Resilience">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Resilience')
                            </div>

                            <div class="text-center">
                                @lang('Work under pressure and optimize the current situation.')
                            </div>
                        </div>

                        <div class="mx-10 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/ambition.jpeg') }}" alt="Ambition">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Ambition')
                            </div>

                            <div class="text-center">
                                @lang('Unbounded ambitions fueled by relentless effort.')
                            </div>
                        </div>

                        <div class="ml-10 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/about/how.png') }}" alt="Wondering how!">
                            </div>

                            <div class="text-center text-orange-600 mb-2">
                                @lang('Wondering how!')
                            </div>

                            <div class="text-center">
                                <span id="reference" class="nav-item cursor-pointer">@lang('Click here')</span> @lang('to view my bio detailing my journey and skill acquisition.')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button
        id="slide-arrow-next"
        class="absolute right-5 top-1/2 transform -translate-y-1/2 slide-arrow hover:bg-orange-600">
        &#8250;
    </button>
</div>
