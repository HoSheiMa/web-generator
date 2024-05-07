@extends('layouts.dashboard')

@section('content')
    <!-- Display a payment form -->
    <div class="card">
        <div class="card-body">
            <form id="kt_modal_new_card_form" method="POST" action="/payment" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="">
                <!--begin::Input group-->
                @csrf
                <h1>Membership</h1>
                <!--begin::Radio group-->
                <div data-kt-buttons="true" class="my-7">
                    <!--begin::Radio button-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5">
                        <!--end::Description-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                <input required class="form-check-input" type="radio" name="plan" value="startup" />
                            </div>
                            <!--end::Radio-->

                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                    Startup
                                </h2>
                                <div class="fw-semibold opacity-50">
                                    Best for startups
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Description-->

                        <!--begin::Price-->
                        <div class="ms-5">
                            <span class="mb-2">$</span>
                            <span class="fs-2x fw-bold">
                                3.99
                            </span>
                            <span class="fs-7 opacity-50">/
                                <span data-kt-element="period">10 Projects</span>
                            </span>
                        </div>
                        <!--end::Price-->
                    </label>
                    <!--end::Radio button-->

                    <!--begin::Radio button-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5 active">
                        <!--end::Description-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                <input required class="form-check-input" type="radio" name="plan" checked="checked" value="advanced" />
                            </div>
                            <!--end::Radio-->

                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                    Advanced
                                    <span class="badge badge-light-success ms-2 fs-7">Most popular</span>
                                </h2>
                                <div class="fw-semibold opacity-50">
                                    Best for 100+ team size
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Description-->

                        <!--begin::Price-->
                        <div class="ms-5">
                            <span class="mb-2">$</span>
                            <span class="fs-2x fw-bold">
                                7.99
                            </span>
                            <span class="fs-7 opacity-50">/
                                <span data-kt-element="period">30 Projects</span>
                            </span>
                        </div>
                        <!--end::Price-->
                    </label>
                    <!--end::Radio button-->

                    <!--begin::Radio button-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6">
                        <!--end::Description-->
                        <div class="d-flex align-items-center me-2">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                <input required class="form-check-input" type="radio" name="plan" value="enterprise" />
                            </div>
                            <!--end::Radio-->

                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                    Enterprise
                                </h2>
                                <div class="fw-semibold opacity-50">
                                    Best value for 1000+ team
                                </div>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Description-->

                        <!--begin::Price-->
                        <div class="ms-5">
                            <span class="mb-2">$</span>
                            <span class="fs-2x fw-bold">
                                10.99
                            </span>
                            <span class="fs-7 opacity-50">/
                                <span data-kt-element="period">50 Projects</span>
                            </span>
                        </div>
                        <!--end::Price-->
                    </label>
                    <!--end::Radio button-->
                </div>

                <h1>Payment Details</h1>

                <!--end::Radio group-->
                <div class="d-flex flex-column my-7 fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                        <span class="required">Name On Card</span>


                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify a card holder's name" data-bs-original-title="Specify a card holder's name"
                            data-kt-initialized="1">
                            <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span> </label>
                    <!--end::Label-->

                    <input required type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe">
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-invalid">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                    <!--end::Label-->

                    <!--begin::Input wrapper-->
                    <div class="position-relative">
                        <!--begin::Input-->
                        <input required type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111">
                        <!--end::Input-->

                        <!--begin::Card logos-->
                        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                            <img src="/metronic8/demo4/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px">
                            <img src="/metronic8/demo4/assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px">
                            <img src="/metronic8/demo4/assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px">
                        </div>
                        <!--end::Card logos-->
                    </div>
                    <!--end::Input wrapper-->
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                        <div data-field="card_number" data-validator="notEmpty">Card member is required</div>
                    </div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-10">
                    <!--begin::Col-->
                    <div class="col-md-8 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                        <!--end::Label-->

                        <!--begin::Row-->
                        <div class="row fv-row fv-plugins-icon-container">
                            <!--begin::Col-->
                            <div class="col-6">
                                <select name="card_expiry_month" required class="form-select form-select-solid " data-kt-initialized="1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-6">
                                <select name="card_expiry_year" required class="form-select form-select-solid ">
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">CVV</span>


                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter a card CVV code" data-bs-original-title="Enter a card CVV code"
                                data-kt-initialized="1">
                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span> </label>
                        <!--end::Label-->

                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input required type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv">
                            <!--end::Input-->

                            <!--begin::CVV icon-->
                            <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                <i class="ki-outline ki-credit-cart fs-2hx"></i>
                            </div>
                            <!--end::CVV icon-->
                        </div>
                        <!--end::Input wrapper-->
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5">
                        <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                        <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->

                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked">
                        <span class="form-check-label fw-semibold text-muted">
                            Save Card
                        </span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Input group-->


                <!--begin::Actions-->
                <div class="text-center pt-15">
                    <a href="/" class="btn btn-light me-3">
                        Discard
                    </a>

                    <button type="submit" id="kt_button_1" class="btn btn-primary">
                        <span class="indicator-label">
                            Pay
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // Element to indecate
        var button = document.querySelector("#kt_button_1");

        // Handle button click event
        button.addEventListener("click", function() {
            button.setAttribute("data-kt-indicator", "on");
        });
    </script>
@endsection
@section('css')
    <style>

    </style>
@endsection
