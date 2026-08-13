<x-website.layout>
    <!-- start banner -->
    @include('Website._banner', ['page_title' => __('website.faqs')])
    <!-- end banner -->

    <!-- start faqs section -->
    <section class="position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 tab-style-07 md-mb-50px sm-mb-35px" data-anime='{ "translate": [50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="position-sticky top-50px">
                        <ul class="nav nav-tabs justify-content-center border-0 fw-500 text-left alt-font bg-very-light-gray border-radius-6px overflow-hidden">
                           @if($general_faqs->count() > 0)
                            <li class="nav-item">
                                <a data-bs-toggle="tab" href="#tab_seven1" class="nav-link active">
                                    <span>
                                        <span class="me-5px"><i class="bi bi-file-text"></i></span>
                                        <span>{{ __('website.general') }}</span>
                                    </span>
                                    <span class="bg-hover bg-base-color"></span>
                                </a>
                            </li>
                            @endif
                            @if($technical_issues->count() > 0)
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_seven2">
                                    <span>
                                        <span class="me-5px"><i class="bi bi-bag-plus"></i></span>
                                        <span>{{ __('website.Technical Issue') }}</span>
                                    </span>
                                    <span class="bg-hover bg-base-color"></span>
                                </a>
                            </li>
                            @endif
                            @if($domains_faqs->count() > 0)
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_seven3">
                                    <span>
                                        <span class="me-5px"><i class="bi bi-credit-card-2-back"></i></span>
                                        <span>{{ __('website.domains') }}</span>
                                    </span>
                                    <span class="bg-hover bg-base-color"></span>
                                </a>
                            </li>
                            @endif
                            @if($hostings_faqs->count() > 0)
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_seven5">
                                    <span>
                                        <span class="me-5px"><i class="bi bi-cart"></i></span>
                                        <span>{{ __('website.hostings') }}</span>
                                    </span>
                                    <span class="bg-hover bg-base-color"></span>
                                </a>
                            </li>
                            @endif
                            @if($support_faqs->count() > 0)     
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab_seven6">
                                    <span>
                                        <span class="me-5px"><i class="bi bi-info-circle"></i></span>
                                        <span>{{ __('website.Help and support') }}</span>
                                    </span>
                                    <span class="bg-hover bg-base-color"></span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 offset-xl-1 lg-ps-50px md-ps-15px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay":150, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="tab-content h-100">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show" id="tab_seven1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="accordion accordion-style-02" id="accordion-style-01" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                        <!-- start accordion item -->
                                        @foreach ($general_faqs as $key=>$general_faq )
                                        <div class="accordion-item active-accordion">
                                            <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-01-0{{ $key+1 }}" aria-expanded="true" data-bs-parent="#accordion-style-0{{ $key+1 }}">
                                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                        <i class="feather icon-feather-minus"></i><span class="fw-500 fs-18">{{ $general_faq->question }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="accordion-style-01-0{{ $key+1 }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" data-bs-parent="#accordion-style-0{{ $key+1 }}">
                                                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                    <p>{!! $general_faq->answer !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- end accordion item -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in h-100" id="tab_seven2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                        <!-- start accordion item -->
                                        @foreach ($technical_issues as $key => $technical_issue )
                                        <div class="accordion-item active-accordion">
                                            <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-0{{ $key+1 }}" aria-expanded="true" data-bs-parent="#accordion-style-0{{ $key+1 }}">
                                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                        <i class="feather icon-feather-minus"></i><span class="fw-500 fs-17">{{ $technical_issue->question }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="accordion-style-02-0{{ $key+1 }}" class="accordion-collapse collapse  {{ $key == 0 ? 'show' : '' }}" data-bs-parent="#accordion-style-0{{ $key+1 }}">
                                                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                    <p>{!! $technical_issue->answer !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- end accordion item -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in h-100" id="tab_seven3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="accordion accordion-style-02" id="accordion-style-03" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                        <!-- start accordion item -->
                                        @foreach ($domains_faqs as $key => $domains_faq)
                                        <div class="accordion-item active-accordion">
                                            <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-03-0{{ $key+1 }}" aria-expanded="true" data-bs-parent="#accordion-style-0{{ $key+1 }}">
                                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                        <i class="feather icon-feather-minus"></i><span class="fw-500 fs-17">{{ $domains_faq->question }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="accordion-style-03-0{{ $key+1 }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" data-bs-parent="#accordion-style-0{{ $key+1 }}">
                                                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                    <p>{!! $domains_faq->answer !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- end accordion item -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->

                        <!-- start tab content -->
                        <div class="tab-pane fade in h-100" id="tab_seven5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="accordion accordion-style-02" id="accordion-style-05" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                        <!-- start accordion item -->
                                        @foreach ($hostings_faqs as $key => $hostings_faq)
                                        <div class="accordion-item active-accordion">
                                            <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-03-0{{ $key+1 }}" aria-expanded="true" data-bs-parent="#accordion-style-0{{ $key+1 }}">
                                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                        <i class="feather icon-feather-minus"></i><span class="fw-500 fs-17">{{ $hostings_faq->question }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="accordion-style-03-0{{ $key+1 }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" data-bs-parent="#accordion-style-0{{ $key+1 }}">
                                                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                    <p>{!! $hostings_faq->answer !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- end accordion item -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in h-100" id="tab_seven6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="accordion accordion-style-02" id="accordion-style-06" data-active-icon="icon-feather-minus" data-inactive-icon="icon-feather-plus">
                                        <!-- start accordion item -->
                                        @foreach ($support_faqs as $key => $support_faq)
                                        <div class="accordion-item active-accordion">
                                            <div class="accordion-header border-bottom border-color-extra-medium-gray pt-0">
                                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-03-0{{ $key+1 }}" aria-expanded="true" data-bs-parent="#accordion-style-0{{ $key+1 }}">
                                                    <div class="accordion-title mb-0 position-relative text-dark-gray">
                                                        <i class="feather icon-feather-minus"></i><span class="fw-500 fs-17">{{ $support_faq->question }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="accordion-style-03-0{{ $key+1 }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" data-bs-parent="#accordion-style-0{{ $key+1 }}">
                                                <div class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                                    <p>{!! $support_faq->answer !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- end accordion item -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end faqs section -->
</x-website.layout>
