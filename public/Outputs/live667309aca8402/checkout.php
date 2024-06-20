
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="./theme/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" id="app-style" />
<link href="./theme/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" id="app-style" />
<link href="./theme/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" id="app-style" />
<link href="./theme/css/style.bundle.css" rel="stylesheet" type="text/css" id="app-style" />
<link href="./theme/css/stylee.css" rel="stylesheet" type="text/css" id="app-style" />
    </head>
    <body>
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
                                                                    <span class="text-white">google</span>
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

                                                                            <div class="menu-item ">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6 " href="./home.php"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                            <!--end::Menu link-->
                                        </div>
                                                                            <div class="menu-item ">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6 " href="./features.php"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Features</a>
                                            <!--end::Menu link-->
                                        </div>
                                                                            <div class="menu-item ">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6 " href="./demos.php"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Demos</a>
                                            <!--end::Menu link-->
                                        </div>
                                                                            <div class="menu-item ">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6 " href="./pricing.php"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a>
                                            <!--end::Menu link-->
                                        </div>
                                                                            <div class="menu-item ">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6 " href="./faqs.php"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Faqs</a>
                                            <!--end::Menu link-->
                                        </div>
                                                                            <div class="menu-item ">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6 " href="./clients.php"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Clients</a>
                                            <!--end::Menu link-->
                                        </div>
                                                                            <div class="menu-item ">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6 " href="./contact.php"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Contact</a>
                                            <!--end::Menu link-->
                                        </div>
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
                                                                    </div>
                                <!--end::Menu-->
                            </div>
                        </div>
                        <!--end::Menu wrapper-->
                        <!--begin::Toolbar-->
                        
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
                        Ubold is a fully featured premium admin template
                    </h1>
                    <h3><span style="color:white">
                            <span id="kt_landing_hero_text">Ubold is a fully featured premium admin template built on top of awesome Bootstrap 4.4.1, modern web technology HTML5, CSS3 and jQuery. It has many ready to use hand crafted components.</span>
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
                                                                    <span class="text-white">google dogs.com</span>
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
                            <h2 class="text-white">A Responsive Bootstrap 4 Web App Kit</h2>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <span class="fw-normal fs-4 text-gray-700">Ubold is a fully featured premium admin template built on top of
                            awesome Bootstrap 4.1.3, modern web technology HTML5, CSS3 and
                            jQuery..
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

                                                                    <a href="./home.php" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Home</a>
                                                                    <a href="./features.php" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Features</a>
                                                                    <a href="./demos.php" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Demos</a>
                                                                    <a href="./pricing.php" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Pricing</a>
                                                                    <a href="./faqs.php" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Faqs</a>
                                                                    <a href="./clients.php" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Clients</a>
                                                                    <a href="./contact.php" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Contact</a>
                                                            </div>
                            <!--end::Links-->
                            <!--begin::Links-->
                            <div class="d-flex fw-semibold flex-column ms-lg-20">
                                <!--begin::Subtitle-->
                                <h4 class="fw-bold text-gray-500 mb-6">Stay Connected</h4>
                                <!--end::Subtitle-->
                                <!--begin::Link-->
                                <a href="/" class="mb-6">
                                    <img src="/metronic/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                </a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="/" class="mb-6">
                                    <img src="/metronic/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
                                    <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                </a>
                                <!--end::Link-->
                                <!--begin::Link-->
                                <a href="/" class="mb-6">
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
                                                            <span class="text-white">google dogs.com</span>
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

        <script src="./theme/plugins/global/plugins.bundle.js"></script>
<script src="./theme/js/scripts.bundle.js"></script>
<script src="./theme/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
<script src="./theme/plugins/custom/typedjs/typedjs.bundle.js"></script>
<script src="./theme/js/custom/landing.js"></script>
<script src="./theme/js/custom/pages/pricing/general.js"></script>
<script src="./theme/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="./theme/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
<script src="./theme/js/widgets.bundle.js"></script>
<script src="./theme/js/custom/widgets.js"></script>
<script src="./theme/js/custom/apps/chat/chat.js"></script>
<script src="./theme/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="./theme/js/js/custom/utilities/modals/create-app.js"></script>
<script src="./theme/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="./theme/js/custom/utilities/modals/create-campaign.js"></script>
<script src="./theme/js/custom/utilities/modals/users-search.js"></script>
    </body>
</html>
        