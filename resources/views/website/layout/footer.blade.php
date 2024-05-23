@inject('siteinfo_helper', 'App\Helpers\WebsiteInfoHelper')
@inject('menu_helper', 'App\Helpers\MenuHelper')

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Healwave</h3>
                    <p>
                        @foreach ($siteinfo_helper->getSiteAddress() as $siteAddress)
                            <p>{{ $siteAddress->value }}</p>
                        @endforeach
                        </br>
                        @foreach ($siteinfo_helper->getSiteContact() as $siteContact)
                            <strong>{{ $siteContact->label }}:</strong>
                            {{ $siteContact->value }} <br><br>
                        @endforeach
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        @foreach ($menu_helper->menus() as $menu)
                            @php
                                $link = '';

                                if ($menu->menu_type_id == 1) {
                                    $link = $menu->models->first()->model_link;
                                } elseif ($menu->menu_type_id == 2) {
                                    $link = 'Healwave/' . $menu->pages->first()->slug;
                                } else {
                                    $link = $menu->external_link;
                                }
                            @endphp
                            <li class="dropdown">
                                <i class="bx bx-chevron-right"></i>
                                <a class="nav-link scrollto" href="/{{ $link }}">
                                    {{ $menu['menu_name'][$current_locale] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Join With Us</h4>
                    <ul>
                        @foreach ($siteinfo_helper->getSiteSocailMedia() as $siteInfo)
                            <li>
                                <a href="{{ $siteInfo->value }}" target="_blank">{!! $siteInfo->icon !!}
                                    {{ $siteInfo->label }} Link</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                {!! $siteinfo_helper->getGeneralInfo()->first()->value !!}
            </div>
        </div>

        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            @foreach ($siteinfo_helper->getSiteSocailMedia() as $siteInfo)
                <a href="{{ $siteInfo->value }}" target="_blank">{!! $siteInfo->icon !!}</a>
            @endforeach
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('general_Assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('general_Assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('general_Assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('general_Assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('general_Assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('general_Assets/js/main.js') }}"></script>
<script src="{{ asset('general_Assets/js/userFeedback.js') }}"></script>
<script src="{{ asset('general_Assets/js/lang.js') }}"></script>
<script src="{{ asset('general_Assets/js/homepage.js') }}"></script>

<!-- toastr JS Link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
</body>

</html>
