@extends('website.layout.main')
@section('Main-container')
    @inject('gallery_category_helper', 'App\Helpers\GalleryCategoryHelper')
    @inject('banner_helper', 'App\Helpers\BannerHelper')

    <div class="slider-header-wrapper"
        style="background-image: url({{ asset($banner_helper->getPagesBanner()->banner_image) }});">
        <div class="slider-header d-flex align-items-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-title text-center">
                            <h3>Services</h3>
                            <p>{{ __('index.gallery') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
