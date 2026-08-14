<footer class="mt-70px fs-16 border-top border-color-extra-medium-gray pb-0">
    <div class="container overlap-section">
        <div class="row g-0 justify-content-center align-items-center bg-base-color border-radius-6px ps-7 pe-7 pt-4 pb-4 lg-p-30px sm-p-20px">
            <div class="col-lg-6 col-md-9 text-center text-lg-start md-mb-20px">
                <h4 class="text-white fw-600 mb-0 ls-minus-1px">{{ __("website.Let's talk about how we can transform your business!") }}
                </h4>
            </div>
            <div class="col-auto col-lg-5 icon-with-text-style-08 offset-lg-1">
                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                    <div class="feature-box-icon feature-box-icon-rounded w-80px h-80px rounded-circle bg-dark-gray-transparent-light me-25px lg-me-20px">
                        <i class="bi bi-envelope icon-very-medium text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="text-white fs-18 lh-22 mb-5px d-block">{{ __('website.Interested in working?') }}</span>
                        <h6 class="d-inline-block fw-600 mb-0"><a href="mailto:{{ config('settings.site_email') }}" class="text-dark-gray text-decoration-line-bottom-medium text-white-hover"><span>{{ config('settings.site_email') }}</span></a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center pt-6 sm-pt-40px">
            <!-- start footer column -->
            <div class="col-12 col-xl-3 col-lg-12 col-sm-6 last-paragraph-no-margin text-xl-start text-lg-center order-sm-1 lg-mb-50px sm-mb-30px">
                <a href="#" class="footer-logo mb-15px d-inline-block"><img src="{{ config('configrations.site_footer_logo') }}" alt="footer-logo"></a>
                <p class="lh-30 w-90 xl-w-100 mx-lg-auto mx-xl-0">{!! config('configrations.site_footer_text') !!}</p>
                <div class="elements-social social-icon-style-02 mt-20px xs-mt-15px">
                    <ul class="medium-icon dark">
                        <li class="my-0"><a class="facebook" href="{{ config('settings.site_facebook') }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>

                        <li class="my-0"><a class="twitter" href="{{ config('settings.site_twitter') }}" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li class="my-0"><a class="instagram" href="{{ config('settings.site_instagram') }}" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-12 col-xl-2 col-lg-3 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                <span class="fs-17 fw-600 d-block text-dark-gray mb-5px">{{ __('website.Company') }}</span>
                <ul>
                    <li><a href="{{ route('website.about-us') }}">{{ __('website.Who we are') }}</a></li>
                    <li><a href="{{ route('website.services')}}">{{ __('website.Our services') }}</a>

                    </li>

                    <li><a href="{{ route('website.contact-us') }}">{{ __('website.Contact us') }}</a></li>
                </ul>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            <div class="col-12 col-xl-2 col-lg-3 col-sm-4 xs-mb-30px order-sm-4 order-lg-3">
                <span class="fs-17 fw-600 d-block text-dark-gray mb-5px">{{ __('website.Our services') }}</span>
                <ul>
                    @foreach ($hostings as $hosting)
                    <li><a href="{{ route('website.hosting.show', $hosting->slug) }}">{{ $hosting->name }}</a></li>
                    @endforeach

                </ul>
            </div>
            <!-- end footer column -->

            {{-- <!-- start footer column -->
            <div class="col-xl-3 col-lg-3 col-sm-6 md-mb-50px sm-mb-30px xs-mb-0 order-sm-2 order-lg-5">
                <span class="fs-17 fw-600 d-block text-dark-gray mb-5px">Subscribe newsletter</span>
                <p class="lh-30 w-95 sm-w-100 mb-15px">Subscribe our newsletter to get the latest news and updates!
                </p>
                <div class="d-inline-block w-100 newsletter-style-02 position-relative">
                    <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative">
                        <input class="border-color-extra-medium-gray bg-transparent border-radius-4px w-100 form-control input-small pe-50px required" type="email" name="email" placeholder="Enter your email" />
                        <input type="hidden" name="redirect" value="">
                        <button class="btn pe-20px submit lh-16" aria-label="submit"><i class="feather icon-feather-mail icon-small text-dark-gray"></i></button>
                        <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none">
                        </div>
                    </form>
                </div>
            </div>
            <!-- end footer column --> --}}
        </div>
        <div class="row justify-content-center align-items-center pt-2">
            <!-- start divider -->
            <div class="col-12">
                <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
            </div>
            <!-- end divider -->
            <!-- start copyright -->
            <div class="col-lg-6 pt-35px pb-35px md-pt-0 order-2 order-lg-1 text-center text-lg-start last-paragraph-no-margin">
                <p>
                    {{config('configrations.site_copyright')}} <a href="https://Max4agency.com" target="_blank" class="text-dark-gray fw-600 text-decoration-line-bottom">Max4agency</a></p>
            </div>
            <!-- end copyright -->
            <!-- start footer menu -->
            <div class="col-lg-6 pt-35px pb-35px md-pt-25px md-pb-5px order-1 order-lg-2 text-center text-lg-end">
                <ul class="footer-navbar sm-lh-normal">
                    @foreach ($pages as $page)
                    <li><a href="{{ route('website.page.show', $page->slug) }}" class="nav-link">{{ $page->title }}</a></li>        
                    @endforeach
                 
                   
                </ul>
            </div>
            <!-- end footer menu -->
        </div>
    </div>
</footer>
