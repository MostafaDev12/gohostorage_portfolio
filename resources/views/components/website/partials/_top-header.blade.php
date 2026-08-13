@if($top_header)

<div class="header-top-bar top-bar-dark cover-background"
            style="background-image: url('{{ asset('assets/website/') }}images/top-header-bg.jpg')">
            <div class="container-fluid">
                <div class="row h-42px align-items-center m-0">
                    <div class="col-md-7 text-center text-md-start">
                        <div class="fs-13 text-white"><span class="opacity-6 me-5px">{{ $top_header?->title }}</span></div>
                    </div>
                    <div class="col-5 text-end d-none d-md-flex">
                        <a href="{{ route('website.contact-us') }}"
                            class="widget fs-13 me-20px text-white opacity-8 d-none d-lg-inline-block"><i
                                class="feather icon-feather-phone"></i>{{ __('website.customer_service') }}</a>
                        <a href="mailto:{{ config('settings.site_email') }}"
                            class="widget fs-13 text-white text-white-hover opacity-8"><i
                                class="feather icon-feather-mail text-white position-relative top-1px"></i><span
                                data-cfemail="74070104041b060034101b19151d1a5a171b19">[{{ config('settings.site_email') }}]</span></a>
                    </div>
                </div>
            </div>
        </div>
@endif