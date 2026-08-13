<section class="bg-very-light-gray">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-12 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="fw-700 text-dark-gray ls-minus-1px mb-25px d-block">
                    {{ __('dashboard.What makes you prefer') }}
                    <span class="text-outline text-outline-color-dark-gray text-outline-width-3px ls-minus-3px mb-0"
                        style="font-family: arial">{{ config('configrations.site_name') }}</span>
                </h2>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-lg-4 row-cols-sm-2 justify-content-center g-0"
            data-anime='{ "el": "childs", "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start process step item -->
            @foreach ($Benefits as $benefit )
            <div class="col process-step-style-06 text-center last-paragraph-no-margin hover-box md-mb-50px">
                <h4 class="d-block text-dark-gray mb-0 fw-700 ls-minus-2px">
                    <img src="{{ $benefit->image_path }}" alt="{{ $benefit->alt_image }}"
                       >
                </h4>
                <div class="process-step-icon-box position-relative mt-25px mb-25px">
                    <span class="progress-step-separator bg-dark-gray w-100 separator-line-1px opacity-1"></span>
                    <div
                        class="step-box d-flex align-items-center justify-content-center bg-white box-shadow-medium-bottom border-radius-100 mx-auto w-30px h-30px">
                        <span class="w-8px h-8px bg-base-color border-radius-100"></span>
                    </div>
                </div>
                <span class="d-inline-block alt-font fw-600 text-dark-gray fs-18 mb-5px ls-minus-05px">{{ $benefit->title }}</span>
                <p class="w-75 sm-w-85 d-inline-block ">{!! $benefit->short_desc !!}</p>
            </div>
            @endforeach

            <!-- end process step item -->

        </div>
        <div class="row justify-content-center mt-6 xs-mt-12"
            data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-xl-8 col-lg-10">
                <div
                    class="row align-items-center justify-content-center bg-sec-color border-radius-100px sm-border-radius-6px p-15px sm-p-20px sm-mx-0">
                    <div
                        class="col-lg-6 border-end border-color-transparent-dark-very-light text-center ls-minus-05px align-items-center d-flex justify-content-center md-border-end-0 md-mb-10px">
                        <i class="fa-regular fa-face-smile text-white icon-extra-medium me-10px"></i>
                        <span class="text-white fs-18 fw-600 text-start lh-28">{{ __('dashboard.Join the') }} <span
                                class="fw-700">10000+</span> {{ __('dashboard.clients trusting us') }}</span>
                    </div>
                    <div
                        class="col-lg-6 text-center ls-minus-05px align-items-center d-flex justify-content-center">
                        <i class="bi bi-star text-white icon-extra-medium me-10px"></i>
                        <span class="text-white fs-18 fw-600 text-start lh-28">4.9 out of 5 - <span
                                class="fw-700">8549</span> {{ __('dashboard.Total reviews') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
