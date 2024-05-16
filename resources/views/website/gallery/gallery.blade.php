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
                            <h3>{{ __('index.gallery_title') }}</h3>
                            <p>{{ __('index.gallery') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="gallery" class="gallery">
        <div class="container-fluid">
            <div class="section-title">
                <h2>{{ __('index.patient_care_gallery_title') }}</h2>
            </div>
            <div class="row g-0">
                @foreach ($gallery_category_helper->getPatientCarePhotos() as $photo)
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item p-1">
                            <a href="{{ asset($photo->file) }}" class="galelry-lightbox">
                                <img src="{{ asset($photo->file) }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="section-title mt-3">
                <h2>{{ __('index.staff_teams_gallery_title') }}</h2>
            </div>
            <div class="row g-0">
                @foreach ($gallery_category_helper->getStaffTeamsPhotos() as $photo)
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset($photo->file) }}" class="galelry-lightbox">
                                <img src="{{ asset($photo->file) }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="section-title mt-3">
                <h2>{{ __('index.medical_history_gallery_title') }}</h2>
            </div>
            <div class="row g-0">
                @foreach ($gallery_category_helper->getHospitalHistoryPhotos() as $photo)
                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="{{ asset($photo->file) }}" class="galelry-lightbox">
                                <img src="{{ asset($photo->file) }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
