@extends('website.layout.main')
@section('Main-container')
    @inject('department_helper', 'App\Helpers\DepartmentHelper')
    @inject('banner_helper', 'App\Helpers\BannerHelper')

    <div class="slider-header-wrapper"
        style="background-image: url({{ asset($banner_helper->getPagesBanner()->banner_image) }});">
        <div class="slider-header d-flex align-items-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-title text-center">
                            <h3>@lang('index.department_title')</h3>
                            <p>{{ __('index.department') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="services" class="services">
        <div class="container">
            <div class="row">
                @foreach ($department_helper->getAllDepartment() as $department)
                    <div class="col-lg-4 col-md-6 p-3">
                        <div class="icon-box">
                            <div class="icon">
                                <i class="{{ $department_helper->getDepartmentIcon($department->department_name) }}"></i>
                            </div>
                            <h4><a href="">{{ $department->department_name }}</a></h4>
                            <p>{!! Str::limit($department->department_desc, 85, '...') !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
