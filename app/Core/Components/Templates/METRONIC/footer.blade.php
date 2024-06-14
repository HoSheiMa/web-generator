@if ($visible)
    <!--begin::Footer Section-->
    <div class="mb-0">
        <!--begin::Curve top-->
        <div class="landing-curve landing-dark-color">
            <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve top-->
        <!--begin::Wrapper-->
        <div class="landing-dark-bg pt-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Row-->
                <div class="row py-10 py-lg-20">
                    <!--begin::Col-->
                    <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                        <!--begin::Block-->
                        <div class="rounded landing-dark-border p-9 mb-10">
                            <!--begin::Title-->
                            <h2 class="text-white">
                                @if (isset($footer_logo) && $footer_logo)
                                    <img src="{{ $footer_logo }}" alt="LOGO" class="logo-light logo-dark">
                                @else
                                    <span class="text-white">{{ $footer_title }}</span>
                                @endif
                            </h2>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <span class="fw-normal fs-4 text-gray-700">Email us to
                                <a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@WebHybrid.com</a></span>
                            <!--end::Text-->
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="rounded landing-dark-border p-9">
                            <!--begin::Title-->
                            <h2 class="text-white">{{ $title }}</h2>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <span class="fw-normal fs-4 text-gray-700">{{ $details }}.
                                <a href="pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
                            <!--end::Text-->
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-6 ps-lg-16">
                        <!--begin::Navs-->
                        <div class="d-flex justify-content-center">
                            <!--begin::Links-->
                            <div class="d-flex fw-semibold flex-column me-20">
                                <!--begin::Subtitle-->
                                <h4 class="fw-bold text-gray-500 mb-6">More Links</h4>
                                <!--end::Subtitle-->
                                <!--begin::Link-->

                                @foreach ($footer_menulinks as $link)
                                    <a href="{{ $link['link'] }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6">{{ $link['title'] }}</a>
                                @endforeach
                            </div>
                            <!--end::Links-->
                            <!--begin::Links-->
                            <div class="d-flex fw-semibold flex-column ms-lg-20">
                                <!--begin::Subtitle-->
                                <h4 class="fw-bold text-gray-500 mb-6">Stay Connected</h4>
                                <!--end::Subtitle-->
                                <!--begin::Link-->
                                <a href="{{ $facebook }}" class="mb-6">
                                    <img src="/metronic/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                </a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="{{ $twitter }}" class="mb-6">
                                    <img src="/metronic/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                </a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="{{ $instagram }}" class="mb-6">
                                    <img src="/metronic/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                </a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Navs-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
            <!--begin::Separator-->
            <div class="landing-dark-separator"></div>
            <!--end::Separator-->
            <!--begin::Container-->
            <div class="container">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                    <!--begin::Copyright-->
                    <div class="d-flex align-items-center order-2 order-md-1">
                        <!--begin::Logo-->
                        <a href="/">
                            @if (isset($footer_logo) && $footer_logo)
                                <img src="{{ $footer_logo }}" alt="LOGO" class="logo-light logo-dark">
                            @else
                                <span class="text-white">{{ $footer_title }}</span>
                            @endif
                        </a>
                        <!--end::Logo image-->
                        <!--begin::Logo image-->
                        <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="www.webhybrid.com"> 2024&copy; Web Hybrid.</span>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->

                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Footer Section-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
@endif
