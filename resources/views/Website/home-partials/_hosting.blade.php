<section class="cover-background pt-5 xs-pt-8" style="background-image: url('images/demo-hosting-home-06.jpg')">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-lg-8 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span
                    class="ps-25px pe-25px mb-20px text-capitalize text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex">
                    {{ __('dashboard.Choose Your Ideal Plan') }}
                </span>
                <h2 class="text-dark-gray fw-700 ls-minus-2px">{{ __('dashboard.Multiple Hosting Options') }}</h2>
            </div>
        </div>
        <!-- start features box item -->
        @foreach ($hostings as $hosting)
            <div class="row justify-content-center mb-5">
                <div class="col-lg-12 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 900, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="text-dark-gray fw-700 ls-minus-2px">{{ $hosting->name }}</h2>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-lg-4 row-cols-sm-2 justify-content-center mb-5">
                @foreach ($hosting->plans as $plan)
                    <div class="col-lg-3 col-md-6 mb-30px card-border border-radius-6px {{ $plan->lable ? 'active p-0' : '' }}"
                        data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="border-radius-6px position-relative overflow-hidden pricing-card">

                            <div
                                class="pricing-header pt-0 pb-10px border-radius-6px text-center position-relative top-minus-3px">
                                <span
                                    class="ps-25px pe-25px mb-15px text-uppercase text-base-color fs-13 lh-34 fw-700 border-radius-100px bg-solitude-blue d-inline-block plan-label">{{ $plan->lable }}</span>
                                <h5 class="fw-700 mb-0 text-dark-gray alt-font ps-15px ">{{ $plan->name }}</h5>
                                @if ($plan->price_before_discount)
                                    <del>
                                        {{ $plan->price_before_discount . ' ' . config('app.currency') }}
                                    </del>
                                @endif
                                <div class="row align-items-center pt-10px pb-10px footer-pricing">
                                    <div class="col text-center  align-items-center justify-content-center ps-30px">
                                        <h3 class="alt-font text-dark-gray mb-0 me-15px fw-700 ls-minus-2px">
                                            {{ $plan->monthly_price . ' ' . config('app.currency') }}</h3>
                                        <p class="fs-15 lh-22 text-start">Per user/month billed annually*</p>
                                    </div>
                                </div>
                                <div class="pricing-footer ps-12 pe-12 text-center">

                                    <a href="{{ $plan->slug }}"
                                        class="btn btn-large btn-dark-gray btn-box-shadow btn-hover-animation-switch btn-round-edge w-100 text-transform-none mb-15px">
                                        <span>
                                            <span class="btn-text">Join this plan </span>
                                            <span class="btn-icon"><i
                                                    class="feather icon-feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i
                                                    class="feather icon-feather-arrow-right"></i></span>
                                        </span>
                                    </a>

                                </div>
                                <div class="pricing-body pt-15px">
                                    <ul class="p-0 m-0 list-style-02 fw-500">
                                        @foreach ($plan->getFormattedAttributes() as $attribute)
                                            <li
                                                class="pt-5px pb-5px ps-15px pe-15px border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                                <span
                                                    class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 me-10px">
                                                    <i
                                                        class="bi bi-check align-self-center text-white fs-14 d-flex"></i>
                                                </span>
                                                <strong>{{ $attribute['values'] . '  ' . $attribute['name'] }}</strong>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
        <!-- end features box item -->
    </div>
</section>
