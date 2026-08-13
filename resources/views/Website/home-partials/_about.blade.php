<section class="overflow-hidden pb-60px">
    <div class="container">
        <div class="row align-items-center justify-content-center mb-6 sm-mb-50px position-relative">
            <div class="col-lg-6 col-md-10 position-relative md-mb-30px"
                data-anime='{ "effect": "slide", "color": "#ffffff", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                <img class="w-100" src="{{ $about->image_path }}" data-bottom-top="transform: translateY(-50px)"
                    data-top-bottom="transform: translateY(50px)" alt="">
            </div>
            <div class="col-lg-5 offset-lg-1 last-paragraph-no-margin"
                data-anime='{ "el": "childs", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 900, "delay": 300, "easing": "easeOutCirc" }'>
                <span class="text-base-color fw-600 mb-15px text-uppercase d-block">{{ $about->title }}</span>
                <h2 class="fw-600 text-dark-gray w-90 lg-w-100 text-dark-gray fw-700 ls-minus-2px">
                    {{ $about->sub_title }}
                </h2>
                <p class="w-90 sm-w-100">
                   {{$about->short_desc}}
                </p>
                @include('Website.home-partials._about_structs')
            </div>
        </div>
    </div>
</section>