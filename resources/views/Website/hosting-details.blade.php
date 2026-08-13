<x-website.layout>
    <!-- start banner -->
      @include('Website._banner', ['page_title' => $hosting->name])
    <!-- end banner -->


  

    <!-- Start plans section -->
      @include('Website.hosting-partials._plans')
    <!-- End plans section -->

      <!-- Start Benefits section -->
      @include('Website.hosting-partials._benefits')
    <!-- End Benefits section -->

      <!-- Start Testimonials section -->
      @include('Website._testimonials')
      <!-- End Testimonials section -->

        <!-- Start Faqs section -->
        @include('Website.hosting-partials._faqs')
        <!-- End Faqs section -->
  

</x-website.layout>