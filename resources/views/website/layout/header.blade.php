@inject('menu_helper', 'App\Helpers\MenuHelper')
@inject('siteinfo_helper', 'App\Helpers\WebsiteInfoHelper')
<!DOCTYPE html>
<html lang="{{ session('locale') }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Healwave - Medical & Hospital</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin_Assets/img/favicon.ico') }}">

    <!-- Favicons -->
    <link href="{{ asset('general_Assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('general_Assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('general_Assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('general_Assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('general_Assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('general_Assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('general_Assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('general_Assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('general_Assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('general_Assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('general_Assets/css/style.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('general_Assets/css/index-style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('general_Assets/css/page-style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('general_Assets/css/custom-botman.css') }}">

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- toastr Session Message -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- BotMan CSS Link --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center mr-3">
                @foreach ($siteinfo_helper->getSiteContact() as $siteContact)
                    {!! $siteContact->icon !!} {{ $siteContact->value }}
                @endforeach
            </div>

            <div>
                <div class="d-flex align-items-center">
                    <p class="language">English</p>

                    <form method="GET" id="language-form">
                        <div class="toggle-switch m-2">
                            <input type="checkbox" id="language-toggle" onchange="toggleLanguage()"
                                @if (session('locale')) {{ session('locale') === 'np' ? 'checked' : '' }} @endif>
                            <label for="language-toggle"></label>
                        </div>
                    </form>

                    <p class="language">नेपाली</p>
                </div>
            </div>

            <div class="d-none d-lg-flex social-links align-items-center">
                @foreach ($siteinfo_helper->getSiteSocailMedia() as $siteInfo)
                    <a href="{{ $siteInfo->value }}" target="_blank">{!! $siteInfo->icon !!}</a>
                @endforeach
            </div>
        </div>
    </div> 
