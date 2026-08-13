<x-website.layout>

    @include('Website.home-partials._pop')
    <!-- start banner -->

    @include('Website.home-partials._banner')
    <!-- end banner -->

    <!-- start hosting section -->
    @include('Website.home-partials._hosting')
    <!-- end hosting section -->

    <!-- Start Domain section -->
   @include('Website.home-partials._domains')
    <!-- End Domain section -->

    <!-- start global section -->
   {{-- @include('Website.home-partials._global') --}}
    <!-- end global section -->

    <!-- start PLans -->
    @include('Website.home-partials._plans')
    <!-- end Plans -->

    <!-- Start Divider -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="divider-style-03 divider-style-03-03 border-color-dark-gray mb-20px mt-20px w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Divider -->

    <!-- start About section -->
   @include('Website.home-partials._about')
    <!-- end About section -->

    <!-- Start Support section -->
   @include('Website.home-partials._benefits')
    <!-- End Support section -->

    <!-- start FAQ section -->
   @include('Website.home-partials._faqs')
    <!-- end FAQ section -->

</x-website.layout>
