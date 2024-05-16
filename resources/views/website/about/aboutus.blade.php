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
                            @foreach ($pages as $page)
                                @if ($page->slug == 'about-us')
                                    <h3>{{ $page['title'][$current_locale] }}</h3>
                                    <p>{!! Str::limit($page['content'][$current_locale], 200) !!}</p>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about" class="about">
        <div class="container-fluid">
            <div class="row">
                @foreach ($pages as $page)
                    @if ($page->slug == 'about-us')
                        <div class="col-xl-5 col-lg-6 pb-4 pt-4 video-box d-flex justify-content-center align-items-stretch position-relative"
                            style="background: url({{ asset($page->image) }}) center center no-repeat; background-size: cover;">
                        </div>

                        <div
                            class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                            <h3>{{ $page['title'][$current_locale] }}</h3>
                            <p>{!! $page['content'][$current_locale] !!}</p>
                    @endif

                    @if ($page->slug == 'comprehensive-medical-services')
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">{{ $page['title'][$current_locale] }}</a></h4>
                            <p class="description">{!! $page['content'][$current_locale] !!}</p>
                        </div>
                    @endif

                    @if ($page->slug == 'dedicated-and-compassionate-staff')
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">{{ $page['title'][$current_locale] }}</a></h4>
                            <p class="description">{!! $page['content'][$current_locale] !!}</p>
                        </div>
                    @endif

                    @if ($page->slug == 'innovative-technology-and-equipment')
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">{{ $page['title'][$current_locale] }}</a></h4>
                            <p class="description">{!! $page['content'][$current_locale] !!}</p>
                        </div>
            </div>
            @endif
            @endforeach
        </div>

        </div>
    </section>
@endsection
