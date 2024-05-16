@extends('website.layout.main')
@section('Main-container')
    @inject('gallery_category_helper', 'App\Helpers\GalleryCategoryHelper')
    @inject('banner_helper', 'App\Helpers\BannerHelper')
    @inject('siteinfo_helper', 'App\Helpers\WebsiteInfoHelper')


    <div class="slider-header-wrapper"
        style="background-image: url({{ asset($banner_helper->getPagesBanner()->banner_image) }});">
        <div class="slider-header d-flex align-items-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-title text-center">
                            <h3>{{ __('index.contact_title') }}</h3>
                            <p>{{ __('index.contact') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('index.contact_page_title') }}</h2>
            </div>
        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address mb-4">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            @foreach ($siteinfo_helper->getSiteAddress() as $siteAddress)
                                <p>{{ $siteAddress->value }}</p>
                            @endforeach
                        </div>

                        @foreach ($siteinfo_helper->getSiteContact() as $siteContact)
                            <div class="mb-4">
                                {!! $siteContact->icon !!}
                                <h4>{{ $siteContact->label }}:</h4>
                                <p>{{ $siteContact->value }}</p>
                            </div>
                        @endforeach
                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{ route('feedback.store') }}" method="post" role="form" id="user_feedback_form"
                        class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}"
                                    id="name" placeholder="Your Fullname">
                                @error('fullname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    id="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}"
                                id="subject" placeholder="Subject">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message">{{ old('message') }}</textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" id="submitBtn">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>
@endsection
