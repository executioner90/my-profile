<div class="w-3/4 mx-auto p-5 md:text-lg flex justify-center relative">
    <button class="absolute left-5 top-1/2 transform -translate-y-1/2 slide-arrow" id="slide-arrow-prev">&#8249;</button>

    <div class="w-3/4">
        <div class="carousel">
            <div class="carousel-inner">
                <div class="w-full carousel-item">
                    <div class="carousel-content">
                        <div class="mr-7 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/web-development.jpg') }}"
                                     alt="Web Development">
                            </div>

                            <div class="text-center">
                                Web Development
                            </div>

                            <div class="text-center">
                                building and maintaining of websites.
                            </div>
                        </div>

                        <div class="mr-7 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/fullstack.jpg')}}" alt="Fullstack">
                            </div>

                            <div class="text-center">
                                Fullstack
                            </div>

                            <div class="text-center">
                                Skilled in backend development with a knack for frontend tech.
                            </div>
                        </div>

                        <div class="ml-7 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/debugging.png')}}" alt="Debug skills">
                            </div>

                            <div class="text-center">
                                Debug skills
                            </div>

                            <div class="text-center">
                                detecting and removing of existing errors.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full carousel-item">
                    <div class="carousel-content">
                        <div class="mr-7 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/review.jpg') }}" alt="Reviewer">
                            </div>

                            <div class="text-center">
                                Reviewer
                            </div>

                            <div class="text-center">
                                Masterful reviews that speak louder than words.
                            </div>
                        </div>

                        <div class="mr-7 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/creative-thinker.jpeg') }}"
                                     alt="Creative">
                            </div>

                            <div class="text-center">
                                Creative
                            </div>

                            <div class="text-center">
                                Finding new ways of solving problems.
                            </div>
                        </div>

                        <div class="mr-7 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/teamwork.jpg') }}" alt="Teamwork">
                            </div>

                            <div class="text-center">
                                Teamwork
                            </div>

                            <div class="text-center">
                                Team player extraordinaire: I turn collaboration into success!
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full carousel-item">
                    <div class="carousel-content">
                        <div class="mr-7 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/flexible.png') }}" alt="Flexible">
                            </div>

                            <div class="text-center">
                                Flexible
                            </div>

                            <div class="text-center">
                                Adaptable availability for various schedules and circumstances.
                            </div>
                        </div>

                        <div class="mr-7 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/dedication.jpg') }}"
                                     alt="Dedication and commitment">
                            </div>

                            <div class="text-center">
                                Dedication and commitment
                            </div>

                            <div class="text-center">
                                Unwavering dedication, unwavering commitment.
                            </div>
                        </div>

                        <div class="mr-7 w-1/3">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/pressure.jpg') }}" alt="Resilience">
                            </div>

                            <div class="text-center">
                                Resilience
                            </div>

                            <div class="text-center">
                                Work under pressure and optimize the current situation.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full carousel-item">
                    <div class="carousel-content">
                        <div class="mr-7 w-1/2">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/ambition.jpeg') }}" alt="Ambition">
                            </div>

                            <div class="text-center">
                                Ambition
                            </div>

                            <div class="text-center">
                                Unbounded ambitions fueled by relentless effort.
                            </div>
                        </div>

                        <div class="ml-7 w-1/2">
                            <div class="flex justify-center mb-2">
                                <img class="w-36 h-20" src="{{ asset('/images/skills/how.png') }}" alt="Wondering how!">
                            </div>

                            <div class="text-center">
                                Wondering how!
                            </div>

                            <div class="text-center">
                                <span id="reference" class="nav-item">click here</span> to view my bio detailing my journey
                                and skill acquisition..
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="absolute right-5 top-1/2 transform -translate-y-1/2 slide-arrow" id="slide-arrow-next">&#8250;</button>
</div>

<script>
    const prevButton = document.getElementById('slide-arrow-prev');
    const nextButton = document.getElementById('slide-arrow-next');
    const carouselInner = document.querySelector('.carousel-inner');
    const carouselItems = document.querySelectorAll('.carousel-item');
    let currentIndex = 0;
    const itemWidth = carouselItems[0].offsetWidth + parseInt(window.getComputedStyle(carouselItems[0]).marginRight);

    // Set initial position
    carouselInner.style.transform = `translateX(-${currentIndex * itemWidth}px)`;

    function showNextSlide() {
        if (currentIndex < carouselItems.length - 1) {
            currentIndex++;
            carouselInner.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
        }
    }

    function showPrevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
            carouselInner.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
        }
    }

    nextButton.addEventListener('click', showNextSlide);
    prevButton.addEventListener('click', showPrevSlide);
</script>
