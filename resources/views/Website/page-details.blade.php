<x-website.layout>
    <!-- start banner -->
      @include('Website._banner', ['page_title' => $page->title])
    <!-- end banner -->

  <section class="overflow-hidden">
    <div class="container">
    <p>
      {!! $page->content !!}
    </p>
  </div>
</section>


</x-website.layout>