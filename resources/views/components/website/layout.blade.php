<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <x-website.partials._head />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-52MSV9ZX');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="">

    <!--Start of Tawk.to Script-->
    {{-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/685aac695dc248190eead37a/1iuh32uti';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script> --}}
    <!--End of Tawk.to Script-->


    <!-- start page loader -->
    <div class="page-loader"></div>
    <!-- end page loader -->
    <!-- start header -->
    <x-website.partials._header />
    <!-- end header -->

    <!-- start Page Content -->
    {{ $slot }}
    <!-- end Page Content -->

    <!-- start footer -->
    <x-website.partials._footer />
    <!-- end footer -->

    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->

    <!-- start sticky elements -->
    <div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100" data-shadow-animation="true">
        <div class="elements-social social-icon-style-10">
            <ul class="fs-14">
                @if (config('settings.site_facebook'))
                    <li class="me-30px"><a class="facebook" href="{{ config('settings.site_facebook') }}"
                            target="_blank">
                            <i class="fa-brands fa-facebook-f me-10px"></i>
                            <span class="alt-font">{{ __('website.facebook') }}</span>
                        </a>
                    </li>
                @endif
                @if (config('settings.site_twitter'))
                    <li class="me-30px">
                        <a class="twitter" href="{{ config('settings.site_twitter') }}" target="_blank">
                            <i class="fa-brands fa-twitter me-10px"></i>
                            <span class="alt-font">{{ __('website.twitter') }}</span>
                        </a>
                    </li>
                @endif
                @if (config('settings.site_instagram'))
                    <li>
                        <a class="instagram" href="{{ config('settings.site_instagram') }}" target="_blank">
                            <i class="fa-brands fa-instagram me-10px"></i>
                            <span class="alt-font">{{ __('website.instagram') }}</span>
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
    <!-- end sticky elements -->

    <ul id="wrapper" class="" style="transform: translate(15%, 100%);">

        <li class="Icon whatsapp">
            <!--<span class="tooltip">whatsapp</span>-->
            <a href="https://wa.me/{{ config('settings.site_whatsapp') }}" target="_blank"><span><i
                        class="bi bi-whatsapp"></i></span></a>
        </li>

    </ul>


    <!-- start cookie message -->
    <x-website.partials._cookies-model />
    <!-- end cookie message -->

    <!-- javascript libraries -->
    <x-website.partials._script />

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52MSV9ZX" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
