@if ($visible)
    <!-- clients start -->
    <section>
        <div class="container-fluid">
            <div class="clients p-4 bg-white">
                <div class="row">
                    @if (count($urls) == 0)
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="./theme/images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="./theme/images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="./theme/images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="client-images">
                                <img src="./theme/images/clients/6.png" alt="logo-img" class="mx-auto img-fluid d-block" />
                            </div>
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
