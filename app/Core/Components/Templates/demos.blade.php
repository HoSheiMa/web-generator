@if ($visible)
    <!-- available demos start -->
    <section class="section bg-light" id="demo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center mb-3">
                        <h3>{{ $title }}</h3>
                        <p class="text-muted">
                            {{ $details }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                @if (isset($demos) && count($demos) > 0)
                    @foreach ($demos as $demo)
                        <div class="col-lg-4 col-md-6">
                            <div class="demo-box bg-white mt-4 p-2">
                                <a href="#" class="text-dark">
                                    <img src="{{ $demo['image_url'] }}" alt="" class="img-fluid mx-auto d-block" />
                                    <div class="p-3 text-center">
                                        <h5 class="mb-0">{{ $demo['title'] }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
                <!-- end col -->
            </div>
            <!-- end row -->
            @if (isset($more_demos_button_visible) && $more_demos_button_visible)
                <div class="row">
                    <div class="col-12">
                        <div class="text-center mt-4">
                            <a href="{{ $more_demos_button_url }}" class="btn btn-info navbar-btn">
                                More Demos <i class="mdi mdi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- available demos end -->
@endif
