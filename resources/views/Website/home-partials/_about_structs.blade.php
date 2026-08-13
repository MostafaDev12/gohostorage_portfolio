@if($about_structs->count())
<ul class="p-0 mb-25px mt-15px list-style-01 w-90 lg-w-100">
    @foreach ($about_structs as $about_struct)
    <li class="border-color-extra-medium-gray fw-600 text-dark-gray d-flex align-items-center pt-15px pb-15px">
        <div
            class="feature-box-icon feature-box-icon-rounded w-35px h-35px rounded-circle bg-solitude-blue me-10px text-center d-flex align-items-center justify-content-center flex-shrink-0">
            <i class="fa-solid fa-check fs-13 text-base-color"></i>
        </div>
        {!! $about_struct->text !!}
    </li>
    @endforeach


</ul>
@endif