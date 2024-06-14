@if ($visible)
    <!-- features start -->
    <section class="section-sm" id="features">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4 pb-1">
                        <h3 class="mb-3">
                            {{ $title }}
                        </h3>
                        <p class="text-muted">
                            {{ $details }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            @foreach (collect($items)->chunk(3) as $group_items)
                <div class="row">
                    @foreach ($group_items as $item)
                        <div class="col-lg-4">
                            <div class="features-box">
                                <div class="features-img mb-4">
                                    <img src="{{ $item['icon_url'] ?? './theme/images/icons/layers.png' }}" alt="" />
                                </div>
                                <h4 class="mb-2">{{ $item['title'] }}</h4>
                                <p class="text-muted">
                                    {{ $item['details'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

            <!-- end row -->


            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- features end -->
@endif
