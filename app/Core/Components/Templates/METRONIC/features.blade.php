@if ($visible)


    <div class="mb-n10 mb-lg-n20 z-index-2">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <!--begin::Title-->
                <h3 class="fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">{{ $title }}</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold">{{ $details }}
                </div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row w-100 gy-10 mb-md-20">
                <!--begin::Col-->
                @foreach (collect($items)->chunk(3) as $group_items)
                    @foreach ($group_items as $index => $item)
                        <div class="col-md-4 px-5">
                            <!--begin::Story-->
                            <div class="text-center mb-10 mb-md-0">
                                <!--begin::Illustration-->
                                <img src="{{ $item['icon_url'] ?? './theme/media/avatars/300-1.jpg' }}" class="mh-125px mb-9" alt="" />
                                <!--end::Illustration-->
                                <!--begin::Heading-->
                                <div class="d-flex flex-center mb-5">
                                    <!--begin::Badge-->
                                    <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">{{ $index + 1 }}</span>
                                    <!--end::Badge-->
                                    <!--begin::Title-->
                                    <div class="fs-5 fs-lg-3 fw-bold text-gray-900">{{ $item['title'] }}</div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Description-->
                                <div class="fw-semibold fs-6 fs-lg-4 text-muted">{{ $item['details'] }}</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Story-->
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        <!--end::Container-->
    </div>
@endif
