  <!--Newsletter Modal-->
  <div class="newsletter-modal style3 modal fade" id="newsletter_modal" tabindex="-1" aria-hidden="true">           
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-body p-0">

                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                
                <div class="newsletter-wrap d-flex flex-column">
                    <div class="newsltr-img">
                        <img  src="{{ $pop->image_path }}" alt="{{ $pop->alt_img }}"  width="582" height="202" />
                    </div>
                    
                    {{-- <div class="newsltr-title text-center">
                        <h2 class="alt-font">{{ $pop->title }}</h2>
                        <p>{!! $pop->text !!}</p>
                    </div> --}}
                     <div class="newsltr-text text-center">
                            {{-- <a href=""  class="input-group-btn btn  newsletter-submit" >{{ __('home.plans') }}</a> --}}
                            <a href="{{ route('website.hosting.show',[$hosting->slug]) }}"  class="input-group-btn btn  newsletter-submit"  > {{ __('website.hostings') }} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Newsletter Modal-->