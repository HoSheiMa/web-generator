@extends('layouts.dashboard')

@section('content')
    <!--begin::Form-->
    <form class="form" method="POST" action="/projects" enctype="multipart/form-data">
        @csrf
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card header-->
                <div class="card-title fs-3 fw-bold">Project Form</div>
                <!--end::Card header-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Row-->
                <div class="row  ">
                    <!--begin::Col-->
                    <div class="col-xl-3 ">
                        <div class="fs-6 fw-semibold mt-2 mb-3"> Upload Project Logo</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9 ">
                        <!--begin::Progress-->
                        <div class="d-flex flex-column">
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/metronic/media/svg/brand-logos/aven.svg)"></div>
                                    <!--end::Preview existing avatar-->

                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change"
                                        data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                        <i class="ki-outline ki-pencil fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Cancel-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel"
                                        data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                        <i class="ki-outline ki-cross fs-2"></i> </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove"
                                        data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                        <i class="ki-outline ki-cross fs-2"></i> </span>
                                    <!--end::Remove-->
                                </div>
                                <!--end::Image input-->

                                <!--begin::Hint-->
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>

                        </div>
                        <!--end::Progress-->
                    </div>
                    <div class="col-xl-3 mt-4">
                        <div class="fs-6 fw-semibold mt-2 mb-3">PROJECT NAME</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->

                    <div class="col-xl-9 mt-4">
                        <div class="fv-row fv-plugins-icon-container">
                            <input type="text" class="form-control form-control-solid" name="name" required>
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                    </div>




                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8 mt-4">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">THEME</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9">
                        <!--begin::Row-->
                        <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                            <!--begin::Col-->

                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4 col-lg-12 col-xxl-4">
                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                    <!--begin::Radio button-->
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                        <input class="form-check-input d-none" type="radio" checked value="metronic" name="theme" />

                                    </span>
                                    <!--end::Radio button-->
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div><span><img alt="Logo" src="/metronic/media/logos/demo-58.svg"class="mh-25px m-3"> </span></div>
                                        <div><span class="fs-4 fw-bold mb-1 d-block">Metronic <span class="badge badge-warning">Soon</span>
                                            </span>
                                            <span class="fw-semibold fs-7 text-gray-600">Top #1 Theme in Worldwide
                                            </span>
                                        </div>
                                    </div>

                                </label>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4 col-lg-12 col-xxl-4">
                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                    <!--begin::Radio button-->
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                        <input class="form-check-input d-none" type="radio" checked value="ubold" name="theme" />

                                    </span>
                                    <!--end::Radio button-->

                                    <div class="d-flex justify-content-center align-items-center">
                                        <div><span><img alt="Logo" src="/metronic/media/logos/logo-sm (1).png"class="mh-25px m-3"> </span></div>
                                        <div><span class="fs-4 fw-bold mb-1 d-block">Ubold</span>
                                            <span class="fw-semibold fs-7 text-gray-600">Simple Theme build on Bootstrap structure</span>
                                        </div>

                                    </div>






                                </label>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-8 mt-4">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">BUSINESS MODEL</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9">
                        <!--begin::Row-->
                        <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                            <!--begin::Col-->

                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4 col-lg-12 col-xxl-4">
                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                    <!--begin::Radio button-->
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                        <input class="form-check-input d-none" type="radio" checked value="ecommerce" name="type" />

                                    </span>
                                    <!--end::Radio button-->


                                    <div class="d-flex justify-content-center align-items-center">
                                        <div><span><img alt="Logo" src="/metronic/media/logos/E-commerceLogo.png"class="mh-25px m-5"> </span></div>
                                        <div><span class="fs-4 fw-bold mb-1 d-block">E-commerce <span class="badge badge-warning">New</span>
                                            </span>
                                            <span class="fw-semibold fs-7 text-gray-600">e-commerce that deliver phyiscal or degtail project
                                            </span>
                                        </div>

                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-4 col-lg-12 col-xxl-4">
                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                    <!--begin::Radio button-->
                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                        <input class="form-check-input d-none" type="radio" checked value="portfolio" name="type" />

                                    </span>
                                    <!--end::Radio button-->
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div><span><img alt="Logo" src="/metronic/media/logos/briefcase.png"class="mh-25px m-5"> </span></div>
                                        <div><span class="fs-4 fw-bold mb-1 d-block">Portfolio</span>
                                            <span class="fw-semibold fs-7 text-gray-600">Online space that showcases your best work
                                            </span>
                                        </div>

                                    </div>

                                </label>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                <div class="row mb-8 mt-4">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                        <div class="fs-6 fw-semibold mt-2 mb-3">BRIEF</div>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9">
                        <textarea required name="details" class="form-control form-control-solid" rows="5">Give brief about your idea ....</textarea>
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-8 mt-4">
                    <!--begin::Col-->
                    <div class="col-xl-3">
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-xl-9">
                        <h5>Agree to Terms and Conditions</h5>
                        <p>I am entitled to display the Web Hybrid logo on every project <br /> created through the
                            company's website</p>

                        <form>
                            <div class="form-group">
                                <div class="form-check">
                                    <input required type="checkbox" class="form-check-input" id="agreeCheckbox">
                                    <label class="form-check-label" for="agreeCheckbox">I agree to the <a href="#">Terms and
                                            Conditions</a></label>
                                </div>
                            </div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <!--begin::Row-->

                <!--end::Row-->
                <!--begin::Row-->



                <!--end::Row-->
                <!--begin::Row-->

                <!--end::Row-->
            </div>
            <!--end::Card body-->
            <!--begin::Card footer-->
            <div class="card-footer d-flex justify-content-end py-6">
                <a href="/home" class="btn btn-light btn-active-light-primary me-2">Discard</a>
                <button type="submit" class="btn btn-primary" id="kt_button_1">
                    <span class="indicator-label">
                        Create
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>

                <script>
                    // Element to indecate
                    var button = document.querySelector("#kt_button_1");

                    // Handle button click event
                    button.addEventListener("click", function() {
                        button.setAttribute("data-kt-indicator", "on");
                    });
                </script>
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Card-->
    </form>
@endsection
