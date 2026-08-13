<x-website.layout>
    <!-- start banner -->
      @include('Website._banner', ['page_title' => __('website.domains')])
    <!-- end banner -->

    <!-- start Domains Section -->
    <section class="bg-very-light-gray">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="ps-25px pe-25px mb-20px text-capitalize text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex">
                        {{ __('website.Find domain for your business') }}
                    </span>
                    <h2 class="text-dark-gray fw-700 ls-minus-1px">{{ __('website.Choose your domain') }}</h2>
                </div>
            </div>

            <div class="row contact-form-style-06 position-relative justify-content-center pb-30px">
                <div class="col-xl-12">
                    <!-- start SEO analysis form -->
                    <form class="row justify-content-center" action="https://gohostorage.com/cart.php" method="get">
                        <input type="hidden" name="a" value="add" />
                        <input type="hidden" name="domain" value="register" />
                        <div class="col-md-10 sm-mb-10px">
                            <input
                                class="border-color-transparent-dark-light input-medium bg-transparent ps-35px border-radius-100px fw-300 text-black placeholder-glow form-control"
                                type="text" name="query" required placeholder="Type the domain you want" autocomplete="off" />
                        </div>
                        <div class="col-12 col-md-auto">
                            <button type="submit" aria-label="submit"
                                class="btn bg-base-color text-black p-0 btn-rounded w-65px h-65px sm-w-100"><i
                                    class="fa-solid fa-arrow-right ms-0 icon-small"></i></button>
                        </div>
                        <div
                            class="col-12 col-md-10 form-results border-radius-4px mt-15px lh-normal pt-10px pb-10px ps-15px pe-15px fs-16 text-center d-none">
                        </div>
                    </form>
                    <!-- end SEO analysis form -->
                </div>
            </div>

            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                @foreach ($domains as $domain )
                    <div class="col md-mb-30px mb-30px">
                        <div
                            class="bg-white h-100 border-radius-6px p-13 last-paragraph-no-margin text-center box-shadow-extra-large">
                            <h3 class="fw-700 ls-minus-1px text-base-color text-center mb-20px">{{ $domain->title }}</h3>
                            <span class="separator-line-1px w-100 bg-extra-medium-gray d-block mb-20px"></span>
                                <p>{{ $domain->short_desc }}</p>
                            <p>{{ __('dashboard.yearly_price') }}</p>
                            <h5 class="text-dark-gray fw-600 mb-0">{{ $domain->yearly_price .' '. config('app.currency') }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5 xs-mt-7">
                <div class="col-12 text-center"
                    data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div
                        class="bg-sec-color fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px d-inline-block align-middle">
                        Trusted</div>
                    <div class="text-dark-gray d-inline-block align-middle fw-500 fs-20 ls-minus-05px"><span
                            class="fw-700">18+ million</span> customers trust us with their domains.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Domains Section-->

      <!-- Start Benefits section -->
      @include('Website.services-partials._benefits')
    <!-- End Benefits section -->


    <!-- Start Testimonials section -->
    @include('Website._testimonials')
    <!-- End Testimonials section -->

    <!-- Start Faqs section -->
    @include('Website.services-partials._faqs')
    <!-- End Faqs section -->

</x-website.layout>
