<section class="page-title-big-typography bg-dark-gray pt-50px pb-0 ipad-top-space-margin cover-background md-py-0">
    <div class="container">
        <div class="row align-items-center small-screen">
            <div class="col-xl-5 col-lg-6 col-sm-8 position-relative page-title-extra-small">
                <h1 class="mb-15px text-white opacity-7 fw-300 overflow-hidden">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300 }'>
                        {{ __('website.home') }}
                    </span>
                </h1>
                <h2 class="m-auto pb-5px pt-5px text-white fw-600 ls-minus-1px overflow-hidden">
                    <span class="d-inline-block"
                        data-anime='{ "translateY": [30, 0], "opacity": [0, 1], "easing": "easeOutCubic", "duration": 500, "staggervalue": 300, "delay": 300 }'>
                        {{ $page_title ?? __('website.home') }}

                    </span>
                </h2>
            </div>
        </div>
    </div>
</section>
