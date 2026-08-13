<x-dashboard.layout :title="__('dashboard.add_plan')">

    <!-- Page Header -->
    <x-dashboard.partials.page-header :header="__('dashboard.add_plan')" :label_url="route('dashboard.plans.index')" :label="__('dashboard.plans')" />
    <!-- End Page Header -->


    <!-- Row-->
    <div class="row">
        <div class="col-sm-12 col-xl-12 col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-header">
                    <h4 class="card-title">{{ __('dashboard.add_plan') }}</h4>
                </div>

                <div class="card-body">

                    <form action="{{ route('dashboard.plans.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-4">
                                <label class="">{{__('dashboard.name_en')}}</label>
                                <input class="form-control" name="name_en" type="text" value="{{old('name_en')}}" placeholder="{{__('dashboard.name_en')}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label class="">{{__('dashboard.name_ar')}}</label>
                                <input class="form-control" name="name_ar" type="text" value="{{old('name_ar')}}" placeholder="{{__('dashboard.name_ar')}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label class="">{{__('dashboard.lable')}}</label>
                                <input class="form-control" name="lable" type="text" value="{{old('lable')}}" placeholder="{{__('dashboard.lable')}}">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="planable_type">{{ __('dashboard.select_type') }}</label>
                                <select class="form-control" name="planable_type" id="planable_type">
                                    <option value="">{{ __('dashboard.choose_type') }}</option>
                                    <option value="hosting">{{ __('dashboard.hosting') }}</option>
                                    <option value="server">{{ __('dashboard.server') }}</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3" id="hosting-select" style="display:none;">
                                <label for="planable_id_hosting">{{ __('dashboard.select_hosting') }}</label>
                                <select class="form-control" name="planable_id" id="planable_id_hosting">
                                    <option value="">{{ __('dashboard.select_hosting') }}</option>
                                    @foreach($hostings as $hosting)
                                        <option value="{{ $hosting->id }}">{{ $hosting->name }}</option>
                                    @endforeach
                                    </select>
                            </div>

                            <div class="form-group col-md-3" id="server-select" style="display:none;">
                                <label for="planable_id_server">{{ __('dashboard.select_server') }}</label>
                                <select class="form-control" name="planable_id" id="planable_id_server">
                                    <option value="">{{ __('dashboard.select_server') }}</option>
                                    @foreach($servers as $server)
                                        <option value="{{ $server->id }}">{{ $server->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group mt-4 col-md-4">
                                <h5 class="font-size-14 mb-3">{{ __('dashboard.add_attribute') }}</h5>
                                <select class="form-control" name="attributes_IDS[]" id="choices-multiple-remove-button" placeholder="This is a placeholder" multiple>
                                    <option value="">{{ __('dashboard.select_attributes') }}</option>
                                    @foreach ($attributes as $attribute)
                                    <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group  mt-4  mb-3 col-md-4">
                                <label class="">{{__('dashboard.price_before_discount')}}</label>
                                <input class="form-control" name="price_before_discount" type="text" value="{{old('price_before_discount')}}" placeholder="{{__('dashboard.price_before_discount')}}">
                            </div>
                            <div class="form-group  mt-4  mb-3 col-md-4">
                                <label class="">{{__('dashboard.monthly_price')}}</label>
                                <input class="form-control" name="monthly_price" type="text" value="{{old('monthly_price')}}" placeholder="{{__('dashboard.monthly_price')}}">
                            </div>
                            <div class="form-group  mt-4  mb-3 col-md-4">
                                <label class="">{{__('dashboard.yearly_price')}}</label>
                                <input class="form-control" name="yearly_price" type="text" value="{{old('yearly_price')}}" placeholder="{{__('dashboard.yearly_price')}}">
                            </div>

                            <div class=" form-group mb-3  col-md-8">
                                <label>{{__('dashboard.image')}} (225px * 225px max 1mb)</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group mb-3 col-md-4">
                                <label class="">{{__('dashboard.alt_image')}}</label>
                                <input class="form-control" name="alt_image" type="text" value="{{old('alt_image')}}" placeholder="{{__('dashboard.alt_image')}}">
                            </div>

                            <div class="form-group col-md-8">
                                <label>{{__('dashboard.icon')}} (50px * 50px max 1mb)</label>
                                <input type="file" class="form-control" name="icon">

                            </div>

                            <div class="form-group col-md-4">
                                <label class="">{{__('dashboard.alt_icon')}}</label>
                                <input class="form-control" name="alt_icon" type="text" value="{{old('alt_icon')}}" placeholder="{{__('dashboard.alt_icon')}}">
                            </div>
                            <div class="row ">
                                <div class="form-group mt-4  col-md-6">
                                    <div class="d-flex flex-wrap gap-2">
                                        <h5 class="font-size-14 mb-3">{{__('dashboard.publish/unpublish')}} </h5>
                                        <input type="checkbox" id="switch1" switch="none" value="1" name="status" checked />
                                        <label for="switch1" data-on-label="{{ __('dashboard.yes') }}" data-off-label="{{ __('dashboard.no') }}"></label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 mt-3">
                                    <div class="d-flex flex-wrap gap-2 mt-3">
                                        <h5 class="font-size-14 mb-3">{{ __('dashboard.show_in_home') }}</h5>
                                        <input type="checkbox" id="switch2" switch="none" value="1" name="show_in_home" checked />
                                        <label for="switch2" data-on-label="{{ __('dashboard.yes') }}" data-off-label="{{ __('dashboard.no') }}"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <hr>
                                        <h4 class="card-title">{{ __('dashboard.seo') }}</h4>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label> {{__('dashboard.meta_title_en')}}</label>
                                        <textarea class="form-control" name="meta_title_en" placeholder="{{__('dashboard.meta_title_en')}}"> {!! old('meta_title_en') !!}</textarea>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label for="meta_desc"> {{__('dashboard.meta_desc_en')}}</label>
                                        <textarea class="form-control" name="meta_desc_en" placeholder="{{__('dashboard.meta_desc_en')}}">{!! old('meta_desc_en') !!}</textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <hr>

                                    </div>


                                    <div class="form-group col-md-5">
                                        <label> {{__('dashboard.meta_title_ar')}}</label>
                                        <textarea class="form-control" name="meta_title_ar" placeholder="{!!__('dashboard.meta_title_ar')!!}"></textarea>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label> {{__('dashboard.meta_desc_ar')}}</label>
                                        <textarea class="form-control" name="meta_desc_ar" placeholder="{!! __('dashboard.meta_desc') !!}"></textarea>
                                    </div>


                                    <div class="d-flex flex-wrap gap-2 mt-3">
                                        <h5 class="font-size-14 mb-3">{{__('dashboard.meta_robots')}} (index)</h5>
                                        <input type="checkbox" id="switch2" switch="none" value="1" name="index" checked />
                                        <label for="switch2" data-on-label="{{ __('dashboard.yes') }}" data-off-label="{{ __('dashboard.no') }}"></label>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-success"><i class="icon-note"></i>
                                    {{__('dashboard.save')}} </button>
                                <a href="{{route('dashboard.plans.index')}}"><button type="button" class="btn btn-danger mr-1"><i class="icon-trash"></i>
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
