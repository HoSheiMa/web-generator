@extends('layouts.dashboard')

@section('content')
    <!--end::Header-->
    <!--begin::Wrapper-->
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <!--begin::Sidebar-->
        <div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
            data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
            <!--begin::Primary menu-->
            <div id="kt_aside_menu_wrapper" class="app-sidebar-menu flex-grow-1 hover-scroll-y scroll-lg-ps my-5 pt-8" data-kt-scroll="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
                <!--begin::Menu-->
                <div id="kt_aside_menu"
                    class="menu menu-rounded menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6"
                    data-kt-menu="true">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
                        <!--begin:Menu link-->
                        <span class="menu-link menu-center">
                            <span class="menu-icon me-0">
                                <i class="ki-outline ki-home-2 fs-1"></i>
                            </span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
                                </div>
                                <!--end:Menu content-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="./pages/user-profile/projects.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">New Projects</span>
                                </a>
                                <!--end:Menu link-->
                            </div>


                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/projects.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Activity Analytics</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <div class="menu-inner flex-column collapse show" id="kt_app_sidebar_menu_dashboards_collapse">
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="landing.html">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Landing</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                                <!--begin:Menu item-->

                                <!--end:Menu item-->
                            </div>
                            <div class="menu-item">
                                <div class="menu-content">
                                    <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible active" data-bs-toggle="collapse"
                                        href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show More">
                                        <span data-kt-toggle-text-target="true">Show Less</span>
                                        <i class="ki-outline ki-minus-square toggle-on fs-2 me-0"></i>
                                        <i class="ki-outline ki-plus-square toggle-off fs-2 me-0"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                        <!--begin:Menu link-->
                        <span class="menu-link menu-center">
                            <span class="menu-icon me-0">
                                <i class="ki-outline ki-notification-status fs-1"></i>
                            </span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
                            <!--begin:Menu item-->
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <!--begin:Menu link-->
                                <span class="menu-link">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Your Activitys</span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <!--end:Menu link-->
                                <!--begin:Menu sub-->
                                <div class="menu-sub menu-sub-accordion">
                                    <!--begin:Menu item-->

                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="pages/user-profile/projects.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">My Projects</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div class="menu-item">
                                        <!--begin:Menu link-->
                                        <a class="menu-link" href="./dashboards/store-analytics.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">overview</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->

                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->

                                    <!--end:Menu item-->
                                </div>
                                <!--end:Menu sub-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                        <!--begin:Menu link-->
                        <span class="menu-link menu-center">
                            <span class="menu-icon me-0">
                                <i class="ki-outline ki-abstract-35 fs-1"></i>
                            </span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->

                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->

                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
                        <!--begin:Menu link-->
                        <span class="menu-link menu-center">
                            <span class="menu-icon me-0">
                                <i class="ki-outline ki-briefcase fs-1"></i>
                            </span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div class="menu-sub menu-sub-dropdown px-2 py-4 w-200px w-lg-225px mh-75 overflow-auto">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu content-->
                                <div class="menu-content">
                                    <span class="menu-section fs-5 fw-bolder ps-1 py-1">Help</span>
                                </div>
                                <!--end:Menu content-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="landing.html" title="You will find that in langing Page " data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">How can Use ?</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="./pages/user-profile/projects.html" title="click on dirct to new project in projects page" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Direct New project ?</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/crypto.html" title="You will find the available payment methods" data-bs-toggle="tooltip"
                                    data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Payment ?</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->

                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Primary menu-->
            <!--begin::Footer-->
            <div class="d-flex flex-column flex-center pb-4 pb-lg-8" id="kt_app_sidebar_footer">
                <!--begin::Menu toggle-->
                <a href="#" class="btn btn-icon btn-active-color-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="ki-outline ki-night-day theme-light-show fs-2x"></i>
                    <i class="ki-outline ki-moon theme-dark-show fs-2x"></i>
                </a>
                <!--begin::Menu toggle-->
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-outline ki-night-day fs-2"></i>
                            </span>
                            <span class="menu-title">Light</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-outline ki-moon fs-2"></i>
                            </span>
                            <span class="menu-title">Dark</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-outline ki-screen fs-2"></i>
                            </span>
                            <span class="menu-title">System</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-fluid">
                        <!--begin::About card-->
                        <div class="card">
                            <!--begin::Body-->
                            <div class="card-body p-lg-17">
                                <!--begin::About-->
                                <div class="mb-18">
                                    <!--begin::Wrapper-->
                                    <div class="mb-10">
                                        <!--begin::Top-->
                                        <div class="text-center mb-15">
                                            <!--begin::Title-->
                                            <h3 class="fs-2hx text-gray-900 mb-5">About Us</h3>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fs-5 text-muted fw-semibold">
                                                <br />
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Top-->
                                        <!--begin::Overlay-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <img class="w-100 card-rounded" src="/metronic/media/stock/1600x800/img-1.jpg" alt="" />
                                            <!--end::Image-->
                                            <!--begin::Links-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <a href="pages/pricing.html" class="btn btn-primary">Pricing</a>
                                                <a href="pages/careers/apply.html" class="btn btn-light-primary ms-3">Join Us</a>
                                            </div>
                                            <!--end::Links-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Description-->
                                    <div class="fs-5 fw-semibold text-gray-600">
                                        <!--begin::Text-->
                                        <p class="mb-8">Welcome to Web Hybrid At Web Hybrid, we specialize in providing individuals and businesses with the tools they need
                                            to create stunning websites effortlessly. Whether you're a seasoned professional or a complete beginner, our platform is designed to
                                            streamline the website creation process, allowing you to bring your vision to life with ease.
                                            <!--end::Text-->
                                            <!--begin::Text-->
                                        <p class="mb-8">Our mission is to empower individuals and businesses to establish their online presence quickly and effectively. We
                                            understand the importance of having a professional and engaging website in today's digital age, and we're committed to making the
                                            process accessible to everyone, regardless of their technical expertise.
                                            <!--end::Text-->
                                            <!--begin::Text-->








                                        <p class="mb-8">User-Friendly Interface: We believe that creating a website should be a straightforward and enjoyable experience.
                                            That's why our platform features an intuitive interface that guides you through every step of the process.

                                            Customization Options: We understand that every website is unique, which is why we offer a wide range of customization options. From
                                            customizable templates to advanced design tools, you have the flexibility to create a website that perfectly reflects your brand.

                                            Responsive Support: Our dedicated support team is here to help you every step of the way. Whether you have a question about a
                                            feature or need assistance troubleshooting an issue, we're always just a click away.
                                            <!--end::Text-->
                                            <!--begin::Text-->
                                        <p class="mb-17">Creating a website with Web Hybrid is simple:

                                        </p>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::About-->
                                <!--begin::Statistics-->
                                <div class="card bg-light mb-18">
                                    <!--begin::Body-->
                                    <div class="card-body py-15">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-center">
                                            <!--begin::Items-->
                                            <div class="d-flex flex-center flex-wrap mb-10 mx-auto gap-5 w-xl-900px">
                                                <!--begin::Item-->
                                                <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-lg-10">
                                                    <!--begin::Content-->
                                                    <div class="text-center">
                                                        <!--begin::Symbol-->
                                                        <i class="ki-outline ki-element-11 fs-2tx text-primary"></i>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="mt-1">
                                                            <!--begin::Animation-->
                                                            <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                                <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700">0</div>+
                                                            </div>
                                                            <!--end::Animation-->
                                                            <!--begin::Label-->
                                                            <span class="text-gray-600 fw-semibold fs-5 lh-0">Businesses</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-lg-10">
                                                    <!--begin::Content-->
                                                    <div class="text-center">
                                                        <!--begin::Symbol-->
                                                        <i class="fas fa-briefcase fs-2tx text-success"></i>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="mt-1">
                                                            <!--begin::Animation-->
                                                            <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                                <div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="80">0</div>K+
                                                            </div>
                                                            <!--end::Animation-->
                                                            <!--begin::Label-->
                                                            <span class="text-gray-600 fw-semibold fs-5 lh-0">portfolio Projects</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-lg-10">
                                                    <!--begin::Content-->
                                                    <div class="text-center">
                                                        <!--begin::Symbol-->
                                                        <i class="fas fa-shopping-cart fs-2tx text-info"></i>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="mt-1">
                                                            <!--begin::Animation-->
                                                            <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                                <div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="35">0</div>M+
                                                            </div>
                                                            <!--end::Animation-->
                                                            <!--begin::Label-->
                                                            <span class="text-gray-600 fw-semibold fs-5 lh-0">E-commerce Project </span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Testimonial-->
                                        <div class="fs-2 fw-semibold text-muted text-center mb-3">
                                            <span class="fs-1 lh-1 text-gray-700"></span>
                                            <br />
                                            <span class="text-gray-700 me-1">
                                                <span class="fs-1 lh-1 text-gray-700"></span>
                                        </div>
                                        <!--end::Testimonial-->
                                        <!--begin::Author-->
                                        <div class="fs-2 fw-semibold text-muted text-center">
                                            <a href="account/security.html" class="link-primary fs-4 fw-bold"></a>
                                            <span class="fs-4 fw-bold text-gray-600"></span>
                                        </div>
                                        <!--end::Author-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Section-->

                                <!--end::Section-->
                                <!--begin::Team-->
                                <div class="mb-18">
                                    <!--begin::Heading-->
                                    <div class="text-center mb-12">
                                        <!--begin::Title-->
                                        <h3 class="fs-2hx text-gray-900 mb-5">Our Great Team</h3>
                                        <!--end::Title-->
                                        <!--begin::Sub-title-->

                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Slider-->
                                    <div class="tns tns-default mb-10">
                                        <!--begin::Wrapper-->
                                        <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true"
                                            data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false"
                                            data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next"
                                            data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                                            <!--begin::Item-->
                                            <div class="text-center">
                                                <!--begin::Photo-->
                                                <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                                    style="background-image:url('/metronic/media/avatars/300-1.jpg')"></div>
                                                <!--end::Photo-->
                                                <!--begin::Person-->
                                                <div class="mb-0">
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3"> Abdelmeseh mohesen</a>
                                                    <!--end::Name-->
                                                    <!--begin::Position-->
                                                    <div class="text-muted fs-6 fw-semibold mt-1">Frontend Developer</div>
                                                    <!--begin::Position-->
                                                </div>
                                                <!--end::Person-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="text-center">
                                                <!--begin::Photo-->
                                                <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                                    style="background-image:url('/metronic/media/avatars/300-2.jpg')"></div>
                                                <!--end::Photo-->
                                                <!--begin::Person-->
                                                <div class="mb-0">
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3"> Qandil Abdel Fadil </a>
                                                    <!--end::Name-->
                                                    <!--begin::Position-->
                                                    <div class="text-muted fs-6 fw-semibold mt-1">Software engineer </div>
                                                    <!--begin::Position-->
                                                </div>
                                                <!--end::Person-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="text-center">
                                                <!--begin::Photo-->
                                                <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                                    style="background-image:url('/metronic/media/avatars/300-5.jpg')"></div>
                                                <!--end::Photo-->
                                                <!--begin::Person-->
                                                <div class="mb-0">
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Hamed Hamdy</a>
                                                    <!--end::Name-->
                                                    <!--begin::Position-->
                                                    <div class="text-muted fs-6 fw-semibold mt-1">Python Expert</div>
                                                    <!--begin::Position-->
                                                </div>
                                                <!--end::Person-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="text-center">
                                                <!--begin::Photo-->
                                                <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                                    style="background-image:url('/metronic/media/avatars/300-20.jpg')"></div>
                                                <!--end::Photo-->
                                                <!--begin::Person-->
                                                <div class="mb-0">
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">Abdullah Gamal </a>
                                                    <!--end::Name-->
                                                    <!--begin::Position-->
                                                    <div class="text-muted fs-6 fw-semibold mt-1">Frontend Developer</div>
                                                    <!--begin::Position-->
                                                </div>
                                                <!--end::Person-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->

                                            <!--end::Item-->
                                            <!--begin::Item-->

                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="text-center">
                                                <!--begin::Photo-->
                                                <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                                    style="background-image:url('/metronic/media/avatars/300-9.jpg')"></div>
                                                <!--end::Photo-->
                                                <!--begin::Person-->
                                                <div class="mb-0">
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3"> Marwan Raafat</a>
                                                    <!--end::Name-->
                                                    <!--begin::Position-->
                                                    <div class="text-muted fs-6 fw-semibold mt-1">Marwan Raafat</div>
                                                    <!--begin::Position-->
                                                </div>
                                                <!--end::Person-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Button-->
                                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                                            <i class="ki-outline ki-left fs-3x"></i>
                                        </button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                                            <i class="ki-outline ki-right fs-3x"></i>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Slider-->
                                </div>
                                <!--end::Team-->
                                <!--begin::Card-->
                                <div class="card mb-4 bg-light text-center">
                                    <!--begin::Body-->
                                    <div class="card-body py-12">
                                        <!--begin::Icon-->
                                        <a href="#" class="mx-4">
                                            <img src="/metronic/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="" />
                                        </a>
                                        <!--end::Icon-->
                                        <!--begin::Icon-->
                                        <a href="#" class="mx-4">
                                            <img src="/metronic/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="" />
                                        </a>
                                        <!--end::Icon-->
                                        <!--begin::Icon-->
                                        <a href="#" class="mx-4">
                                            <img src="/metronic/media/svg/brand-logos/github.svg" class="h-30px my-2" alt="" />
                                        </a>
                                        <!--end::Icon-->
                                        <!--begin::Icon-->
                                        <a href="#" class="mx-4">
                                            <img src="/metronic/media/svg/brand-logos/behance.svg" class="h-30px my-2" alt="" />
                                        </a>
                                        <!--end::Icon-->
                                        <!--begin::Icon-->
                                        <a href="#" class="mx-4">
                                            <img src="/metronic/media/svg/brand-logos/pinterest-p.svg" class="h-30px my-2" alt="" />
                                        </a>
                                        <!--end::Icon-->
                                        <!--begin::Icon-->
                                        <a href="#" class="mx-4">
                                            <img src="/metronic/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="" />
                                        </a>
                                        <!--end::Icon-->
                                        <!--begin::Icon-->
                                        <a href="#" class="mx-4">
                                            <img src="/metronic/media/svg/brand-logos/dribbble-icon-1.svg" class="h-30px my-2" alt="" />
                                        </a>
                                        <!--end::Icon-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::About card-->
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer">
                <!--begin::Footer container-->
                <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                    <!--begin::Copyright-->
                    <div class="text-gray-900 order-2 order-md-1">
                        <span class="text-muted fw-semibold me-1">2024&copy;</span>
                        <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Web Hybrid</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->

                    <!--end::Menu-->
                </div>
                <!--end::Footer container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end:::Main-->
    </div>
@endsection
