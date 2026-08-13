<!-- start section -->
<section class="p-0 bg-dark-gray">
    <div class="swiper full-screen bg-dark-gray ipad-top-space-margin md-h-600px sm-h-500px swiper-number-pagination-style-02 magic-cursor light magic-cursor-vertical lg-no-parallax" data-slider-options='{ "slidesPerView": 1, "direction": "horizontal", "loop": true, "parallax": true, "speed": 1000, "pagination": { "el": ".swiper-number", "clickable": true }, "autoplay": { "delay": 40000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1199": { "direction": "vertical" }}, "effect": "slide" }' data-number-pagination="1">
        <div class="swiper-wrapper">
            <!-- start slider item -->
            @foreach ($banners as $banner )
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('{{ $banner->image_path }}');">
                    <div class="opacity-light bg-dark-gray"></div>
                    <div class="container h-100">
                        <div class="row align-items-center h-100 justify-content-center">
                            <div class="col-md-10 position-relative text-white d-flex flex-column justify-content-center h-100 text-center">  
                                <div class="alt-font fs-70 xs-fs-40 lh-100 mb-5 xs-mb-35px ls-minus-4px xs-ls-minus-2px text-shadow-double-large transform-origin-right" data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "staggervalue": 150, "easing": "easeOutQuad" }'>
                                    <span class="d-inline-block">{{ $banner->title }} </span>
                                </div>
                                <div  data-anime='{  "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <a href="{{  route('website.domains')  }}" class="btn btn-base-color btn-box-shadow btn-large btn-round-edge">{{ __('dashboard.Get started') }}</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            @endforeach
            
            <!-- end slider item -->
          
           
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination container swiper-pagination-clickable swiper-pagination-bullets-right swiper-number"></div> 
        <!-- end slider pagination --> 
    </div>
</section>
<!-- end section -->


