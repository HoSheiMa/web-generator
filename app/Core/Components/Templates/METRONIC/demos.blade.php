@if ($visible)
    @php
        $id = rand(100, 10000);
    @endphp
    <div class="py-10 py-lg-20">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-12">
                <!--begin::Title-->
                <h3 class="fs-2hx text-gray-900 mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">{{ $title }}</h3>
                <!--end::Title-->
                <!--begin::Sub-title-->
                <div class="fs-5 text-muted fw-bold">{{ $details }}
                </div>
                <!--end::Sub-title=-->
            </div>
            <!--end::Heading-->
            <!--begin::Slider-->
            <div class="tns tns-default" style="direction: ltr">
                <!--begin::Wrapper-->
                <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000"
                    data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                    data-tns-prev-button="#kt_team_slider_prev{{ $id }}" data-tns-next-button="#kt_team_slider_next{{ $id }}"
                    data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                    <!--begin::Item-->
                    @foreach ($demos as $demo)
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('{{ $demo['image_url'] }}')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-gray-900 fw-bold text-hover-primary fs-3">{{ $demo['title'] }}</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">...</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                    @endforeach
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev{{ $id }}">
                    <i class="ki-outline ki-left fs-2x"></i>
                </button>
                <!--end::Button-->
                <!--begin::Button-->
                <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next{{ $id }}">
                    <i class="ki-outline ki-right fs-2x"></i>
                </button>
                <!--end::Button-->
            </div>
            <!--end::Slider-->
        </div>
        <!--end::Container-->
    </div>
@endif
