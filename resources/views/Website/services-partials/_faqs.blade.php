<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 position-relative md-mb-25px"
                data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h2 class="fw-700 text-dark-gray ls-minus-2px">{{ __('website.faqs') }}</h2>
             
                <div><span
                        class="text-dark-gray fs-30 me-5px align-middle fancy-text-style-4 ls-minus-1px">&#128075;
                        Say <span class="fw-600"
                            data-fancy-text='{ "effect": "rotate", "string": ["hello!", "hallå!", "salve!"] }'></span></span>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="accordion accordion-style-02" id="accordion-style-02"
                    data-active-icon="icon-feather-chevron-up" data-inactive-icon="icon-feather-chevron-down"
                    data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <!-- start accordion item -->
                    @foreach ($faqs as $key=>$faq )
                    <div class="accordion-item active-accordion">
                        <div class="accordion-header border-bottom border-color-extra-medium-gray">
                            <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-0{{ $key }}"
                                aria-expanded="true" data-bs-parent="#accordion-style-02">
                                <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                    <i class="feather icon-feather-chevron-up icon-extra-medium"></i><span
                                        class="fw-600 fs-18">{{ $faq->question }}</span>
                                </div>
                            </a>
                        </div>
                        <div id="accordion-style-02-0{{ $key }}" class="accordion-collapse collapse show"
                            data-bs-parent="#accordion-style-02">
                            <div
                                class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                <p>{!! $faq->answer !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <!-- end accordion item -->
                   
                </div>
            </div>
        </div>
    </div>
</section>