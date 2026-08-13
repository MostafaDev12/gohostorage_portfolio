<section class="overflow-hidden">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 col-lg-7 col-md-8 position-relative text-center text-xl-start lg-mb-15px"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="text-base-color fw-600 mb-15px text-uppercase d-block">{{ __('website.Client feedback') }}</span>
                <h3 class="alt-font fw-700 ls-minus-1px text-dark-gray mb-20px mx-auto">{{ __('website.What do people say about our services?') }}</h3>
                <div class="d-block mb-30px fs-18 ls-minus-05px">
                    {{'See our' . ' '.$testimonials->count(). ' '.'reviews on'}} 
                </div>
                <div class="d-flex justify-content-center justify-content-xl-start">
                    <!-- start slider navigation -->
                    <div class="slider-one-slide-prev-1 text-dark-gray swiper-button-prev slider-navigation-style-04 border border-1 border-color-extra-medium-gray"
                        tabindex="0" role="button" aria-label="Previous slide"><i
                            class="fa-solid fa-arrow-left"></i></div>
                    <div class="slider-one-slide-next-1 text-dark-gray swiper-button-next slider-navigation-style-04 border border-1 border-color-extra-medium-gray"
                        tabindex="0" role="button" aria-label="Next slide"><i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-10 overflow-hidden"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="outside-box-right-15 xl-outside-box-right-20 sm-outside-box-right-0">
                    <div class="swiper slider-one-slide slider-shadow-right sm-slider-shadow-none magic-cursor overflow-visible ps-25px sm-p-0"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 40, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper pt-30px pb-30px">
                            <!-- start review item -->
                            @foreach ($testimonials as $testimonial )
                            <div class="swiper-slide review-style-06">
                                <div
                                    class="d-flex justify-content-center h-100 flex-column bg-white box-shadow-medium p-45px md-p-35px border-radius-6px last-paragraph-no-margin">
                                    <div class="mb-20px d-flex align-items-center">
                                        <img class="rounded-circle w-90px h-90px me-20px"
                                            src="{{ $testimonial->image_path }}" alt="{{ $testimonial->alt_image }}">
                                        <div class="d-inline-block align-middle last-paragraph-no-margin">
                                            <div class="alt-font text-dark-gray fw-600 fs-18">{{ $testimonial->name }}</div>
                                            <p class="lh-24 d-block">{{ $testimonial->job_title }}</p>
                                        </div>

                                    </div>
                                    <p>{!! $testimonial->description !!}</p>
                                </div>
                            </div>
                            @endforeach

                            <!-- end review item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
