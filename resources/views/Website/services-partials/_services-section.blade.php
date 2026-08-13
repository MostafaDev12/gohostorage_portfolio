<section class="cover-background" style="background-image: url('{{ asset('assets/website/') }}images/hosting-map.jpg')">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-6 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="text-base-color fw-600 mb-5px text-uppercase d-block">{{ __('website.our_solutions') }}</span>
                <h2 class="text-dark-gray fw-700 ls-minus-1px">{{ __('website.services') }}</h2>
            </div>
        </div>
        <div class="row justify-content-center"
            data-anime='{ "el": "childs", "perspective": [1200, 1200], "translateY": [0, 0], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0, 1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            @foreach ($services as $service )
            <div class="col-lg-6 col-md-9 icon-with-text-style-02 transition-inner-all mb-30px">
                <div
                    class="feature-box feature-box-left-icon-middle text-start hover-box dark-hover box-shadow-extra-large box-shadow-extra-large-hover bg-white h-100 border-radius-4px p-9 overflow-hidden last-paragraph-no-margin">
                    <div class="feature-box-icon">
                        <img src="{{ $service->icon_path }}" alt="{{ $service->alt_icon }}"
                           >
                    </div>
                    <div class="feature-box-content">
                        <span class="d-inline-block text-dark-gray fw-600 mb-5px fs-18 ls-minus-05px">{{ $service->name }}</span>
                        <p class="text-light-opacity">{{ $service->short_desc }}</p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>
            @endforeach
            <!-- end features box item -->
        
        </div>
    </div>
</section>