<x-dashboard.layout :title="__('dashboard.edit') . $plan->name">

    <!-- Page Header -->
    <x-dashboard.partials.page-header :header="__('dashboard.edit') . $plan->name" :label_url="route('dashboard.plans.index')" :label="__('dashboard.plans')" />
    <!-- End Page Header -->

    <!-- Row-->
    <div class="row">
        <div class="col-sm-12 col-xl-12 col-lg-12">
            <div class="card custom-card overflow-hidden">

                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title pt-3">{{ __('dashboard.edit') . $plan->name }}</h4>

                    <div class="btn btn-list">
                        <a href="{{ route('dashboard.plan.createAttributeValues', [$plan->id]) }}">
                            <button class="btn ripple btn-primary">
                                <i class="fas fa-plus-circle"></i> {{ __('dashboard.add_attribute_values') }}
                            </button>
                        </a>
                    </div>
                </div>

                <div class="card-body">

                    <form action="{{ route('dashboard.plans.update', [$plan->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">

                            <div class="form-group col-md-4">
                                <label>{{ __('dashboard.name_en') }}</label>
                                <input class="form-control" name="name_en" type="text" value="{{ $plan->name_en }}" placeholder="{{ __('dashboard.name_en') }}">
                            </div>

                            <div class="form-group col-md-4">
                                <label>{{ __('dashboard.name_ar') }}</label>
                                <input class="form-control" name="name_ar" type="text" value="{{ $plan->name_ar }}" placeholder="{{ __('dashboard.name_ar') }}">
                            </div>

                            <div class="form-group col-md-4">
                                <label>{{ __('dashboard.lable') }}</label>
                                <input class="form-control" name="lable" type="text" value="{{ $plan->lable }}" placeholder="{{ __('dashboard.lable') }}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="planable_type">{{ __('dashboard.select_type') }}</label>
                                <select class="form-control" name="planable_type" id="planable_type">
                                    <option value="">{{ __('dashboard.choose_type') }}</option>
                                    <option value="App\Models\Dashboard\Hosting" @selected($plan->planable_type == 'App\Models\Dashboard\Hosting')>
                                        {{ __('dashboard.hosting') }}
                                    </option>
                                    <option value="App\Models\Server" @selected($plan->planable_type == 'App\Models\Server')>
                                        {{ __('dashboard.server') }}
                                    </option>
                                </select>
                            </div>


                            <div class="form-group col-md-4" id="hosting-select" style="display:none;">
                                <label for="planable_id_hosting">{{ __('dashboard.select_hosting') }}</label>
                                <select class="form-control" name="planable_id" id="planable_id_hosting">
                                    <option value="" >{{ __('dashboard.select_hosting') }}</option>
                                    @foreach($hostings as $hosting)
                                    <option value="{{ $hosting->id }}" @selected($plan->planable_id == $hosting->id)>
                                        {{ $hosting->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group col-md-4" id="server-select" style="display:none;">
                                <label for="planable_id_server">{{ __('dashboard.select_server') }}</label>
                                <select class="form-control" name="planable_id" id="planable_id_server">
                                    <option value="">{{ __('dashboard.select_server') }}</option>
                                    @foreach($servers as $server)
                                    <option value="{{ $server->id }}" @selected($plan->planable_type == 'App\Models\Server' && $plan->planable_id == $server->id)>
                                        {{ $server->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-4 col-md-4">
                                <h5 class="font-size-14 mb-3">{{ __('dashboard.add_attribute') }}</h5>
                                <select class="form-control" name="attributes_IDS[]" id="choices-multiple-remove-button" placeholder="This is a placeholder" multiple>
                                    <option value="">{{ __('dashboard.select_attributes') }}</option>
                                    @foreach ($attributes as $attribute)
                                    <option @selected(in_array($attribute->id, $selectedPlanAttributesIDS)) value="{{ $attribute->id }}">
                                        {{ $attribute->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            

                            <div class="form-group mt-4 mb-3 col-md-4">
                                <label>{{ __('dashboard.price_before_discount') }}</label>
                                <input class="form-control" name="price_before_discount" type="text" value="{{ $plan->price_before_discount }}" placeholder="{{ __('dashboard.price_before_discount') }}">
                            </div>

                            <div class="form-group mt-4 mb-3 col-md-4">
                                <label>{{ __('dashboard.monthly_price') }}</label>
                                <input class="form-control" name="monthly_price" type="text" value="{{ $plan->monthly_price }}" placeholder="{{ __('dashboard.monthly_price') }}">
                            </div>

                            <div class="form-group mt-4 mb-3 col-md-4">
                                <label>{{ __('dashboard.yearly_price') }}</label>
                                <input class="form-control" name="yearly_price" type="text" value="{{ $plan->yearly_price }}" placeholder="{{ __('dashboard.yearly_price') }}">
                            </div>

                            <div class="form-group mb-3 col-md-7">
                                <label>{{ __('dashboard.image') }} (225px * 225px max 1mb)</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group col-md-2">
                                <label>{{ __('dashboard.image') }}</label>
                                <img src="{{ $plan->image_path }}" width="250">
                            </div>

                            <div class="form-group mb-3 col-md-3">
                                <label>{{ __('dashboard.alt_image') }}</label>
                                <input class="form-control" name="alt_image" type="text" value="{{ $plan->alt_image }}">
                            </div>

                            <div class="form-group col-md-7">
                                <label>{{ __('dashboard.icon') }} (50px * 50px max 1mb)</label>
                                <input type="file" class="form-control" name="icon">
                            </div>

                            <div class="form-group col-md-2">
                                <label>{{ __('dashboard.icon') }}</label>
                                <img src="{{ $plan->icon_path }}" width="250">
                            </div>

                            <div class="form-group col-md-3">
                                <label>{{ __('dashboard.alt_icon') }}</label>
                                <input class="form-control" name="alt_icon" type="text" value="{{ $plan->alt_icon }}">
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <div class="d-flex flex-wrap gap-2">
                                        <h5 class="font-size-14 mb-3">{{ __('dashboard.publish/unpublish') }}</h5>
                                        <input type="checkbox" id="switch1" switch="none" value="1" name="status" @checked(old('status', $plan->status)) />
                                        <label for="switch1" data-on-label="{{ __('dashboard.yes') }}" data-off-label="{{ __('dashboard.no') }}"></label>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <div class="d-flex flex-wrap gap-2">
                                        <h5 class="font-size-14 mb-3">{{ __('dashboard.home/publish/unpublish') }}</h5>
                                        <input type="checkbox" id="switch2" switch="none" value="1" name="show_in_home" @checked(old('home', $plan->show_in_home)) />
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

                                    <div class="form-group col-md-2">
                                        <label for="title_ar">{{ __('dashboard.slug_en') }}</label>
                                        <input type="text" autocomplete="off" class="form-control" placeholder="{{ __('dashboard.slug_en') }}" name="slug_en" value="{{ $plan->slug_en }}">
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label>{{ __('dashboard.meta_title_en') }}</label>
                                        <textarea class="form-control" name="meta_title_en" placeholder="{{ __('dashboard.meta_title_en') }}">{!! $plan->meta_title_en !!}</textarea>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label for="meta_desc">{{ __('dashboard.meta_desc_en') }}</label>
                                        <textarea class="form-control" name="meta_desc_en" placeholder="{{ __('dashboard.meta_desc_en') }}">{!! $plan->meta_desc_en !!}</textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <hr>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label>{{ __('dashboard.slug_ar') }}</label>
                                        <input type="text" autocomplete="off" class="form-control" placeholder="{{ __('dashboard.slug_ar') }}" name="slug_ar" value="{{ $plan->slug_ar }}">
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label>{{ __('dashboard.meta_title_ar') }}</label>
                                        <textarea class="form-control" name="meta_title_ar" placeholder="{{ __('dashboard.meta_title_ar') }}">{{ $plan->meta_title_ar }}</textarea>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <label>{{ __('dashboard.meta_desc_ar') }}</label>
                                        <textarea class="form-control" name="meta_desc_ar" placeholder="{{ __('dashboard.meta_desc') }}">{!! $plan->meta_desc_ar !!}</textarea>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <h5 class="font-size-14 mb-3">{{ __('dashboard.meta_robots') }} (index)</h5>
                                        <input type="checkbox" id="switch2" switch="none" value="1" name="index" @checked(old('index', $plan->index)) />
                                        <label for="switch2" data-on-label="{{ __('dashboard.yes') }}" data-off-label="{{ __('dashboard.no') }}"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-success"><i class="icon-note"></i> {{ __('dashboard.save') }}</button>
                                <a href="{{ route('dashboard.plans.index') }}">
                                    <button type="button" class="btn btn-danger mr-1"><i class="icon-trash"></i> {{ __('dashboard.cancel') }}</button>
                                </a>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->



</x-dashboard.layout>
