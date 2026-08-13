<section class="cover-background section-dark bg-midnight-dark-blue"
        style="background-image: url('images/demo-hosting-home-02.png')" data-0-top="background-color:rgb(25,30,61);"
        data-center-bottom="background-color:rgb(14,16,29);">
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="text-white fw-700 ls-minus-1px">{{ __('website.Why Choose Us') }}</h2>

                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 justify-content-center ps-8 pe-8 lg-px-0"
                data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                @foreach ($benefits as $benefit)
                <div class="col icon-with-text-style-04 transition-inner-all mb-30px">
                    <div
                        class="feature-box hover-box h-100 transition light-hover border-radius-6px p-18 xs-p-12 last-paragraph-no-margin overflow-hidden border border-1 box-shadow-quadruple-large-hover border-color-transparent-white-light border-color-transparent-on-hover">
                        <div class="feature-box-icon">
                            <i class="line-icon-URL-Window icon-extra-large text-white mb-15px"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block text-white fw-500 lh-24">{{ $benefit->title }}</span>
                            <p>{{ $benefit->short_desc }}</p>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                @endforeach

                <!-- end features box item -->

            </div>

        </div>
    </section>