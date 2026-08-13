<x-website.layout>
    <!-- start banner -->
    @include('Website._banner', ['page_title' => __('website.contact_us')])
    <!-- end banner -->

  <!-- start section -->
  <section class="overflow-hidden">
    <div class="container">
        <div class="row justify-content-center align-items-center mb-9 sm-mb-45px">
            <div class="col-xxl-5 col-lg-6 md-mb-50px"
                data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <span class="fs-15 text-uppercase text-base-color fw-600 mb-15px d-block ls-1px">{{ __('website.Get in touch with us') }}</span>
                <h3 class="fw-700 text-dark-gray ls-minus-1px mb-50px sm-mb-35px">{{__('website.Do you need help? Contact with us now!')}}</h3>
                <!-- start features box item -->
                <div class="icon-with-text-style-01 mb-10 md-mb-35px">
                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <svg width="50px" height="50px" viewBox="-3 0 20 20" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>pin_rounded_circle [#619]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview"
                                            transform="translate(-423.000000, -5439.000000)" fill="#000000">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M376,5286.219 C376,5287.324 375.105,5288.219 374,5288.219 C372.895,5288.219 372,5287.324 372,5286.219 C372,5285.114 372.895,5284.219 374,5284.219 C375.105,5284.219 376,5285.114 376,5286.219 M374,5297 C372.178,5297 369,5290.01 369,5286 C369,5283.243 371.243,5281 374,5281 C376.757,5281 379,5283.243 379,5286 C379,5290.01 375.822,5297 374,5297 M374,5279 C370.134,5279 367,5282.134 367,5286 C367,5289.866 370.134,5299 374,5299 C377.866,5299 381,5289.866 381,5286 C381,5282.134 377.866,5279 374,5279"
                                                    id="pin_rounded_circle-[#619]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-block text-dark-gray fw-600 fs-18 ls-minus-05px mb-5px">
                                {{ __('website.Our Location') }}
                            </span>
                            <p class="w-60 md-w-100">
                               {!! $site_addresses->address !!}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="icon-with-text-style-01 mb-10 md-mb-35px">
                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M14.05 6C15.0268 6.19057 15.9244 6.66826 16.6281 7.37194C17.3318 8.07561 17.8095 8.97326 18 9.95M14.05 2C16.0793 2.22544 17.9716 3.13417 19.4163 4.57701C20.8609 6.01984 21.7721 7.91101 22 9.94M18.5 21C9.93959 21 3 14.0604 3 5.5C3 5.11378 3.01413 4.73086 3.04189 4.35173C3.07375 3.91662 3.08968 3.69907 3.2037 3.50103C3.29814 3.33701 3.4655 3.18146 3.63598 3.09925C3.84181 3 4.08188 3 4.56201 3H7.37932C7.78308 3 7.98496 3 8.15802 3.06645C8.31089 3.12515 8.44701 3.22049 8.55442 3.3441C8.67601 3.48403 8.745 3.67376 8.88299 4.05321L10.0491 7.26005C10.2096 7.70153 10.2899 7.92227 10.2763 8.1317C10.2643 8.31637 10.2012 8.49408 10.0942 8.64506C9.97286 8.81628 9.77145 8.93713 9.36863 9.17882L8 10C9.2019 12.6489 11.3501 14.7999 14 16L14.8212 14.6314C15.0629 14.2285 15.1837 14.0271 15.3549 13.9058C15.5059 13.7988 15.6836 13.7357 15.8683 13.7237C16.0777 13.7101 16.2985 13.7904 16.74 13.9509L19.9468 15.117C20.3262 15.255 20.516 15.324 20.6559 15.4456C20.7795 15.553 20.8749 15.6891 20.9335 15.842C21 16.015 21 16.2169 21 16.6207V19.438C21 19.9181 21 20.1582 20.9007 20.364C20.8185 20.5345 20.663 20.7019 20.499 20.7963C20.3009 20.9103 20.0834 20.9262 19.6483 20.9581C19.2691 20.9859 18.8862 21 18.5 21Z"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block text-dark-gray fw-600 fs-18 ls-minus-05px mb-5px">{{ __('website.Feel free to get in touch?') }}</span>
                            <div class="w-100 d-block">
                                <span class="d-block">{{ __('website.phone') }}: <a href="tel:{{ $site_addresses->phone }}">{{ $site_addresses->phone }}</a></span>
                                <!-- To Add More -->
                                <!-- <span class="d-block">Fax: 1-800-222-002</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="icon-with-text-style-01">
                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <svg width="50px" height="50px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g id="style=stroke">
                                        <g id="email">
                                            <path id="vector (Stroke)" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.88534 5.2371C3.20538 5.86848 2.75 6.89295 2.75 8.5V15.5C2.75 17.107 3.20538 18.1315 3.88534 18.7629C4.57535 19.4036 5.61497 19.75 7 19.75H17C18.385 19.75 19.4246 19.4036 20.1147 18.7629C20.7946 18.1315 21.25 17.107 21.25 15.5V8.5C21.25 6.89295 20.7946 5.86848 20.1147 5.2371C19.4246 4.59637 18.385 4.25 17 4.25H7C5.61497 4.25 4.57535 4.59637 3.88534 5.2371ZM2.86466 4.1379C3.92465 3.15363 5.38503 2.75 7 2.75H17C18.615 2.75 20.0754 3.15363 21.1353 4.1379C22.2054 5.13152 22.75 6.60705 22.75 8.5V15.5C22.75 17.393 22.2054 18.8685 21.1353 19.8621C20.0754 20.8464 18.615 21.25 17 21.25H7C5.38503 21.25 3.92465 20.8464 2.86466 19.8621C1.79462 18.8685 1.25 17.393 1.25 15.5V8.5C1.25 6.60705 1.79462 5.13152 2.86466 4.1379Z"
                                                fill="#000000"></path>
                                            <path id="vector (Stroke)_2" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M19.3633 7.31026C19.6166 7.63802 19.5562 8.10904 19.2285 8.3623L13.6814 12.6486C12.691 13.4138 11.3089 13.4138 10.3185 12.6486L4.77144 8.3623C4.44367 8.10904 4.38328 7.63802 4.63655 7.31026C4.88982 6.98249 5.36083 6.9221 5.6886 7.17537L11.2356 11.4616C11.6858 11.8095 12.3141 11.8095 12.7642 11.4616L18.3113 7.17537C18.6391 6.9221 19.1101 6.98249 19.3633 7.31026Z"
                                                fill="#000000"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block text-dark-gray fw-600 fs-18 ls-minus-05px mb-5px">{{ __('website.How can we help you?') }}</span>
                            <div class="w-100 d-block">
                                <a href="#">
                                    <span>
                                        {{  config('settings.site_email') }}
                                    </span>
                                </a>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
            <div class="col-lg-6 offset-xxl-1"
                data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div
                    class="contact-form-style-03 position-relative border-radius-10px bg-white p-14 lg-p-10 box-shadow-double-large overflow-hidden last-paragraph-no-margin">
                    <h2 class="fw-700 text-dark-gray mb-30px sm-mb-20px fancy-text-style-4 ls-minus-2px">Say
                        <span
                            data-fancy-text='{ "effect": "rotate", "string": ["hello!", "hallå!", "salve!"] }'></span>
                    </h2>
                    <form action="{{ route('website.saveConatct') }}" method="POST">
                        @csrf
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon text-dark-gray"><i
                                    class="bi bi-person icon-extra-medium"></i></span>
                            <input
                                class="ps-0 border-radius-0px medium-gray bg-transparent border-color-extra-medium-gray form-control required"
                                type="text" name="name" placeholder="Enter your name*" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon text-dark-gray"><i
                                    class="bi bi-telephone icon-extra-medium"></i></span>
                            <input
                                class="ps-0 border-radius-0px medium-gray bg-transparent border-color-extra-medium-gray form-control required"
                                type="text" name="phone" placeholder="Enter your Phone*" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon text-dark-gray"><i
                                    class="bi bi-envelope icon-extra-medium"></i></span>
                            <input
                                class="ps-0 border-radius-0px medium-gray bg-transparent border-color-extra-medium-gray form-control required"
                                type="email" name="email" placeholder="Enter your email*" />
                        </div>
                        <div class="position-relative z-index-1 form-group form-textarea mt-15px mb-0">
                            <textarea
                                class="ps-0 border-radius-0px medium-gray bg-transparent border-color-extra-medium-gray form-control"
                                name="message" placeholder="Enter your message" rows="3"></textarea>
                            <span class="form-icon text-dark-gray"><i
                                    class="bi bi-chat-square-dots icon-extra-medium"></i></span>

                            <button
                                class="btn btn-large btn-dark-gray btn-round-edge btn-box-shadow mb-20px mt-25px  w-100"
                                type="submit">{{ __('website.Send message') }}</button>

                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                    <div class="position-absolute bottom-0px right-minus-30px fs-350 lh-100 fw-900 text-base-color">
                        &lt;
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-auto text-center text-md-end sm-mb-20px"
                data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">{{ __('website.Connect with social media ') }}</h6>
            </div>
            <div class="col-2 d-none d-lg-inline-block"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
            </div>
            <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0"
                data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <ul class="large-icon dark">
                    @if(config('settings.site_facebook'))
                    <li class="m-0"><a class="facebook" href="{{ config('settings.site_facebook') }}" target="_blank"><i
                        class="fa-brands fa-facebook-f"></i><span></span></a></li>
                    @endif
                    @if(config('settings.site_twitter'))
                        <li class="m-0"><a class="twitter" href="{{ config('settings.site_twitter') }}" target="_blank"><i
                            class="fa-brands fa-twitter"></i><span></span></a></li>
                    @endif
                    @if(config('settings.site_instagram'))
                    <li class="m-0"><a class="instagram" href="{{ config('settings.site_instagram') }}" target="_blank"><i
                        class="fa-brands fa-instagram"></i><span></span></a></li>
                    @endif
                    @if(config('settings.site_instagram'))
                    <li class="m-0"><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i
                        class="fa-brands fa-linkedin-in"></i><span></span></a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
</x-website.layout>
