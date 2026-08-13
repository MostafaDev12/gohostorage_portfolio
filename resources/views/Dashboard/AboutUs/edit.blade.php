<x-dashboard.layout :title="__('dashboard.edit_about') ">

    <!-- Page Header -->
    <x-dashboard.partials.page-header :header="__('dashboard.edit_about')" :label_url="route('dashboard.home')" :label="__('dashboard.home')" />
    <!-- End Page Header -->


    <!-- Row-->
    <div class="row">
        <div class="col-sm-12 col-xl-12 col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-header">
                    <h4 class="card-title">{{ __('dashboard.edit_about') }}</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('dashboard.about.update',[$about->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="form-group col-md-6 ">
                                <fieldset class="form-group">
                                    <label for="title_en">{{ __('dashboard.title_en') }}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('dashboard.title_en') }}" name="title_en" value="{{ $about->title_en }}">
                                </fieldset>
                            </div>

                            <div class="form-group col-md-6 ">
                                <fieldset class="form-group">
                                    <label for="title_ar">{{ __('dashboard.title_ar') }}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('dashboard.title_ar') }}" name="title_ar" value="{{ $about->title_ar }}">
                                </fieldset>
                            </div>

                            <div class="form-group col-md-6 ">
                                <fieldset class="form-group">
                                    <label for="title_en"> Title2 En</label>
                                    <input type="text" class="form-control" placeholder="Title2 En" name="title2_en" value="{{ $about->title2_en }}">
                                </fieldset>
                            </div>

                            <div class="form-group col-md-6 ">
                                <fieldset class="form-group">
                                    <label for="title_ar">Title2 Ar </label>
                                    <input type="text" class="form-control" placeholder="Title2 Ar" name="title2_ar" value="{{ $about->title2_ar }}">
                                </fieldset>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="">{{__('dashboard.short_desc_en')}}</label>
                                <textarea class="form-control" name="short_desc_en" type="text" placeholder="{{__('dashboard.short_desc_en')}}">{!!$about->short_desc_en !!}</textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="">{{__('dashboard.short_desc_ar')}}</label>
                                <textarea class="form-control" name="short_desc_ar" type="text" placeholder="{{__('dashboard.short_desc_ar')}}">{!!$about->short_desc_ar !!}</textarea>
                            </div>


                            <div class="form-group col-md-6">
                                <label class="">{{__('dashboard.text_en')}}</label>
                                <textarea class="form-control" id="myeditorinstance" name="text_en" type="text" placeholder="{{__('dashboard.text_en')}}">{!!$about->text_en !!}</textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="">{{__('dashboard.text_ar')}}</label>
                                <textarea class="form-control" id="myeditorinstance" name="text_ar" type="text" placeholder="{{__('dashboard.text_ar')}}">{!!$about->text_ar !!}</textarea>
                            </div>


                            <div class=" form-group  col-md-6">
                                <label>{{__('dashboard.image')}} (225px * 225px max 1mb)</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class=" form-group  col-md-2">
                                <label for="">{{ __('dashboard.image') }}</label>
                                <img src="{{ $about->image_path }}" width="250">
                            </div>

                            <div class="form-group col-md-4">
                                <label class="">{{__('dashboard.alt_image')}}</label>
                                <input class="form-control" name="alt_image" type="text" placeholder="{{__('dashboard.alt_image')}}" value="{{ $about->alt_image }}">
                            </div>

                            <div class=" form-group  col-md-6">
                                <label>{{__('dashboard.banner')}} (225px * 225px max 1mb)</label>
                                <input type="file" class="form-control" name="banner">
                            </div>

                            <div class=" form-group  col-md-2">
                                <label for="">{{ __('dashboard.banner') }}</label>
                                <img src="{{ $about->banner_path }}" width="250">
                            </div>

                            <div class="form-group col-md-4">
                                <label class="">{{__('dashboard.alt_banner')}}</label>
                                <input class="form-control" name="alt_banner" type="text" placeholder="{{__('dashboard.alt_banner')}}" value="{{ $about->alt_image }}">
                            </div>


                            <div class="form-group col-md-12 mt-3">
                                <button type="submit" class="btn btn-success"><i class="icon-note"></i>
                                    {{__('dashboard.update')}} </button>
                                <a href="{{route('dashboard.about.edit')}}"><button type="button" class="btn btn-danger mr-1"><i class="icon-trash"></i>
                                        {{__('dashboard.cancel')}}</button></a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->




</x-dashboard.layout>
