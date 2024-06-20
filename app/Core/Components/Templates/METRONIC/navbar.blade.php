@if ($visible)
    <!--begin::Header Section-->
    <div class="mb-0" id="home">
        <!--begin::Wrapper-->
        <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
            style="background-image: url(./theme/media/svg/illustrations/landing.svg)">
            <!--begin::Header-->
            <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center justify-content-between">
                        <!--begin::Logo-->
                        <div class="d-flex align-items-center flex-equal">
                            <!--begin::Mobile menu toggle-->
                            <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-2hx">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                            <!--end::Mobile menu toggle-->
                            <!--begin::Logo image-->
                            <a href="/home.php">
                                @if (isset($navbar_logo) && $navbar_logo)
                                    <img src="{{ $navbar_logo }}" alt="LOGO" class="logo-light logo-dark">
                                @else
                                    <span class="text-white">{{ $navbar_title }}</span>
                                @endif
                            </a>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Logo-->
                        <!--begin::Menu wrapper-->
                        <div class="d-lg-block" id="kt_header_nav_wrapper">
                            <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}"
                                data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle"
                                data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                <!--begin::Menu-->
                                <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                    id="kt_landing_menu">
                                    <!--begin::Menu item-->

                                    @foreach ($navbar_menulinks as $link)
                                        <div class="menu-item @if (isset($link['active']) && $link['active']) active @endif">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6 @if (isset($link['disabled']) && $link['disabled']) disabled @endif" href="{{ $link['link'] }}"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">{{ $link['title'] }}</a>
                                            <!--end::Menu link-->
                                        </div>
                                    @endforeach
                                    @if (isset($enable_cart) && $enable_cart == true)
                                        <div class="menu-item ">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6 " href="./cart.php" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                                <i class="ki-duotone ki-handcart text-gray-900 fs-2tx"></i>
                                                <span id="cart-count" class="badge badge-circle badge-danger ms-2">0</span>
                                            </a>
                                            <!--end::Menu link-->
                                        </div>
                                        <script>
                                            // Define the URL to fetch from
                                            // Use fetch to get the data
                                            setInterval(() => {
                                                fetch('./api/cart/count.php')
                                                    .then(response => {
                                                        // Check if the response is ok (status is in the range 200-299)
                                                        if (!response.ok) {
                                                            throw new Error('Network response was not ok ' + response.statusText);
                                                        }
                                                        // Parse the JSON from the response
                                                        return response.json();
                                                    })
                                                    .then(data => {
                                                        // Log the JSON data to see its structure
                                                        console.log(data);

                                                        // Access the 'total_count' value in the JSON data
                                                        if (data.total_count !== undefined) {
                                                            // console.log('Count:', data.total_count);
                                                            document.querySelector('#cart-count').innerHTML = data.total_count
                                                        } else {
                                                            console.log('Count not found in the response');
                                                        }
                                                    })
                                                    .catch(error => {
                                                        // Handle any errors that occurred during fetch
                                                        console.log('There was a problem with the fetch operation:', error);
                                                    });
                                            }, 2500);
                                        </script>
                                    @endif
                                </div>
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Menu wrapper-->
                        <!--begin::Toolbar-->
                        {{-- <div class="flex-equal text-end ms-1">
                            <a href="authentication/layouts/corporate/sign-in.html" class="btn btn-success">Sign In</a>
                        </div> --}}
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Landing hero-->
            <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                <!--begin::Heading-->
                <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                    <!--begin::Title-->
                    <h1 style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"
                        class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-6">
                        {{ $title }}
                    </h1>
                    <h3><span style="color:white">
                            <span id="kt_landing_hero_text">{{ $details }}</span>
                        </span></h3>
                    <br>
                    <!--end::Title-->
                    <!--begin::Action-->
                    <a href="index.html" class="btn btn-primary">Try Metronic</a>
                    <!--end::Action-->
                </div>
                <!--end::Heading-->
                <!--begin::Clients-->
                <div class="d-flex flex-center flex-wrap position-relative px-5">
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
                        <img src="./theme/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px" alt="" />
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
                        <img src="./theme/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px" alt="" />
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="KPMG International">
                        <img src="./theme/media/svg/brand-logos/kpmg.svg" class="mh-30px mh-lg-40px" alt="" />
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
                        <img src="./theme/media/svg/brand-logos/nasa.svg" class="mh-30px mh-lg-40px" alt="" />
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
                        <img src="./theme/media/svg/brand-logos/aspnetzero.svg" class="mh-30px mh-lg-40px" alt="" />
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="AON - Empower Results">
                        <img src="./theme/media/svg/brand-logos/aon.svg" class="mh-30px mh-lg-40px" alt="" />
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Hewlett-Packard">
                        <img src="./theme/media/svg/brand-logos/hp-3.svg" class="mh-30px mh-lg-40px" alt="" />
                    </div>
                    <!--end::Client-->
                    <!--begin::Client-->
                    <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Truman">
                        <img src="./theme/media/svg/brand-logos/truman.svg" class="mh-30px mh-lg-40px" alt="" />
                    </div>
                    <!--end::Client-->
                </div>
                <!--end::Clients-->
            </div>
            <!--end::Landing hero-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Curve bottom-->
        <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
            <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                    fill="currentColor"></path>
            </svg>
        </div>
        <!--end::Curve bottom-->
    </div>
@endif
