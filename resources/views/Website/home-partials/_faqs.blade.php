<!-- start FAQ section -->
<section class="pt-0 position-relative">
    <div class="container">
        <div class="row align-items-center"
            data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-12">
                <div class="bg-sec-color p-9 md-p-7 border-radius-6px overflow-hidden position-relative">
                    <div
                        class="position-absolute right-70px md-right-20px top-minus-20px w-250px sm-w-180px xs-w-150px opacity-1">
                        <img src="{{ asset('assets/dashboard/images/faq-icon.webp') }}" alt="image">
                    </div>
                    <div
                        class="bg-base-color d-inline-block mb-20px fw-600 text-white text-capitalize border-radius-30px ps-20px pe-20px fs-12">
                        {{ __('website.Basic information') }}</div>
                    <h3 class="fw-700 text-white ls-minus-1px">{{ __('website.Frequently asked questions') }}</h3>
                    <div class="accordion accordion-style-02" id="accordion-style-02"
                        data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                        <!-- start accordion item -->
                        @foreach ($faqs as $key=>$faq)
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-0{{ $key+1 }}"
                                    aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-white pe-30px">
                                        <i class="feather icon-feather-minus fs-20"></i><span
                                            class="fs-17 fw-600">{{ $faq->question }}</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-0{{ $key+1 }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                    <p class="w-90 sm-w-95 xs-w-100">{!! $faq->answer !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- end accordion item -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-6">
            <!-- start features box item -->
            <div class="col-auto icon-with-text-style-08 sm-mb-15px xs-mb-15px"
                data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="feature-box feature-box-left-icon-middle xs-lh-28">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-envelope icon-extra-medium text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-18 xs-fs-17 fw-600 text-dark-gray">Looking for help? <a href="{{ route('website.contact-us') }}"
                                class="text-decoration-line-bottom text-dark-gray">Submit a ticket</a></span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col-auto icon-with-text-style-08"
                data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="feature-box feature-box-left-icon-middle xs-lh-28">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-chat-dots icon-extra-medium text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fs-18 xs-fs-17 fw-600 text-dark-gray">Keep in Touch. <a href="#"
                                class="text-decoration-line-bottom text-dark-gray">Like us on Facebook</a></span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end FAQ section -->
