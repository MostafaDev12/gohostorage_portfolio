<x-website.layout>
    <!-- start banner -->
    @include('Website._banner', ['page_title' => __('website.about_us')])
    <!-- end banner -->

    <!-- start about section -->
    @include('Website.home-partials._about', ['page_title' => __('website.about-us')])
    <!-- end about section -->
    <!-- Start Benefits section -->
    @include('Website.home-partials._benefits')
    <!-- End Benefits section -->

    <!-- start testimonials section -->
    @include('Website._testimonials')
    <!-- end testimonials section -->
</x-website.layout>
