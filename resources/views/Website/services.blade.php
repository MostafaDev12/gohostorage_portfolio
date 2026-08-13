<x-website.layout>
    <!-- start banner -->
      @include('Website._banner', ['page_title' => __('website.services')])
    <!-- end banner -->

    <!-- start Services Section -->
    @include('Website.services-partials._services-section')
    <!-- end Services Section-->

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