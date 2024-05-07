@extends('layouts.dashboard')

@section('content')
    <div class="row justify-content-center mb-3">
        <!--begin::Col-->
        <div class="col-md-6 pe-lg-10">
            <!--begin::Form-->
            <form action="" class="form mb-15 fv-plugins-bootstrap5 fv-plugins-framework" method="post" id="kt_contact_form">
                <h1 class="fw-bold text-gray-900 mb-9">Send Us Email</h1>

                <!--begin::Input group-->
                <div class="row mb-5">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="fs-5 fw-semibold mb-2">Name</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="" name="name">
                        <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                        <!--end::Label-->
                        <label class="fs-5 fw-semibold mb-2">Email</label>
                        <!--end::Label-->

                        <!--end::Input-->
                        <input type="text" class="form-control form-control-solid" placeholder="" name="email">
                        <!--end::Input-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="d-flex flex-column mb-5 fv-row">
                    <!--begin::Label-->
                    <label class="fs-5 fw-semibold mb-2">Subject</label>
                    <!--end::Label-->

                    <!--begin::Input-->
                    <input class="form-control form-control-solid" placeholder="" name="subject">
                    <!--end::Input-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="d-flex flex-column mb-10 fv-row fv-plugins-icon-container">
                    <label class="fs-6 fw-semibold mb-2">Message</label>

                    <textarea class="form-control form-control-solid" rows="6" name="message" placeholder="">        </textarea>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Input group-->

                <!--begin::Submit-->
                <button type="submit" class="btn btn-primary" id="kt_contact_submit_button">

                    <!--begin::Indicator label-->
                    <span class="indicator-label">
                        Send Feedback</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    <!--end::Indicator progress--> </button>
                <!--end::Submit-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="card mb-4 bg-light text-center ">
            <!--begin::Body-->
            <div class="card-body py-12">
                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic/assets/media/svg/brand-logos/facebook-4.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic/assets/media/svg/brand-logos/instagram-2-1.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic/media/svg/brand-logos/github.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic/media/svg/brand-logos/behance.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic/media/svg/brand-logos/pinterest-p.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic/media/svg/brand-logos/twitter.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->

                <!--begin::Icon-->
                <a href="#" class="mx-4">
                    <img src="/metronic/media/svg/brand-logos/dribbble-icon-1.svg" class="h-30px my-2" alt="">
                </a>
                <!--end::Icon-->
            </div>
            <!--end::Body-->
        </div> <!--end::Col-->
    </div>
@endsection
