@if ($visible)
    <!-- clients start -->
    <section>
        <div class="container-fluid">
            <div class="clients p-4 bg-white">
                <div class="row">
                    @if (count($urls) == 0)
                        <div class="d-flex flex-center flex-wrap position-relative px-5">
                            <!--begin::Client-->
                            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Fujifilm" data-bs-original-title="Fujifilm" data-kt-initialized="1">
                                <img src="assets/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px" alt="">
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Vodafone" data-bs-original-title="Vodafone" data-kt-initialized="1">
                                <img src="assets/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px" alt="">
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="KPMG International" data-bs-original-title="KPMG International"
                                data-kt-initialized="1">
                                <img src="assets/media/svg/brand-logos/kpmg.svg" class="mh-30px mh-lg-40px" alt="">
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Nasa" data-bs-original-title="Nasa" data-kt-initialized="1">
                                <img src="assets/media/svg/brand-logos/nasa.svg" class="mh-30px mh-lg-40px" alt="">
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Aspnetzero" data-bs-original-title="Aspnetzero" data-kt-initialized="1">
                                <img src="assets/media/svg/brand-logos/aspnetzero.svg" class="mh-30px mh-lg-40px" alt="">
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="AON - Empower Results" data-bs-original-title="AON - Empower Results"
                                data-kt-initialized="1">
                                <img src="assets/media/svg/brand-logos/aon.svg" class="mh-30px mh-lg-40px" alt="">
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Hewlett-Packard" data-bs-original-title="Hewlett-Packard"
                                data-kt-initialized="1">
                                <img src="assets/media/svg/brand-logos/hp-3.svg" class="mh-30px mh-lg-40px" alt="">
                            </div>
                            <!--end::Client-->
                            <!--begin::Client-->
                            <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" aria-label="Truman" data-bs-original-title="Truman" data-kt-initialized="1">
                                <img src="assets/media/svg/brand-logos/truman.svg" class="mh-30px mh-lg-40px" alt="">
                            </div>
                            <!--end::Client-->
                        </div>
                    @else
                        @foreach ($urls as $url)
                            <div class="col-md-3">
                                <div class="client-images">
                                    <img src="{{ $url }}" alt="logo-img" class="mx-auto img-fluid d-block" />
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- clients end -->
@endif
