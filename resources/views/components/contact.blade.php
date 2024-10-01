<div id="contact" class="min-h-screen w-screen section flex flex-col justify-center">
    <div class="flex flex-col items-center">
        <div class="w-1/3">
            <form id="form" novalidate class="flex flex-col">
                <div class="mb-1">
                    <input id="name" placeholder="@lang('Name')" type="text" name="name" class="w-full pt-1 pl-1" required>
                    <p id="nameError" class="hidden mb-2 text-red-500 text-sm italic">@lang('Please enter your name (max 50 chars)')</p>
                </div>

                <div class="mb-1"   >
                    <input id="email" placeholder="@lang('Email address')" type="email" name="email" class="w-full pt-1 pl-1" required>
                    <p id="emailError" class="hidden mb-2 text-red-500 text-sm italic">@lang('Please enter a valid email address')</p>
                </div>

                <div class="mb-1"   >
                    <input id="subject" placeholder="@lang('Subject')" type="text" name="subject" class="w-full pt-1 pl-1" required>
                    <p id="subjectError" class="hidden mb-2 text-red-500 text-sm italic">@lang('Please enter a subject (max 50 chars)')</p>
                </div>

                <div>
                    <textarea id="message" placeholder="@lang('Your message/question...')" name="message" rows="5" class="w-full pt-1 pl-1" required></textarea>
                    <p id="messageError" class="hidden text-red-500 text-sm italic">@lang('Please enter your message/question (min 10 chars)')</p>
                </div>

                <div>
                    <button id="submit" type="submit" class="bg-transparent hover:bg-orange-700 text-orange-700 font-semibold hover:text-white py-2 px-4 border border-orange-700 hover:border-transparent float-right">
                        @lang('Submit')
                    </button>
                </div>
            </form>

            <p id="response" class="mt-10 text-center"></p>

            <div class="mt-32 flex justify-center">
                <a href="https://wa.me/+31611845441" target="_blank" class="pl-8 pr-16 text-white hover:text-orange-700"><i class="fa fa-whatsapp fa-3x"></i></a>
                <a href="https://www.linkedin.com/in/mohammad-aldaas-6087b81b5/" target="_blank" class="pr-16 text-white hover:text-orange-700"><i class="fa fa-linkedin fa-3x"></i></a>
                <a href="https://www.instagram.com/abusalah183/" target="_blank" class="pr-16 text-white hover:text-orange-700"><i class="fa fa-instagram fa-3x"></i></a>
            </div>
        </div>

        <div class="mt-32">
            <span id="scrollToTop" class="bg-transparent hover:bg-green-700 text-green-700 font-semibold hover:text-white p-4 border border-green-700 hover:border-transparent cursor-pointer">
                <i class="fa fa-chevron-up"></i>
            </span>
        </div>
    </div>
</div>
<footer class="primary-bg">
    <span class="text-white text-sm">Copyright <i class="fa fa-copyright"></i> {{ date('Y') }} - powered by Mohammad Aldaas</span>
</footer>
