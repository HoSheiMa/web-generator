@if ($visible)
    <!-- footer start -->
    <footer class="bg-dark footer">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <div class="pr-lg-4">
                        <div class="mb-4">
                            @if (isset($footer_logo) && $footer_logo)
                                <img src="{{ $footer_logo }}" alt="LOGO" class="logo-light logo-dark">
                            @else
                                <span class="text-white">{{ $footer_title }}</span>
                            @endif
                        </div>
                        <p class="text-white-50">{{ $title }}</p>
                        <p class="text-white-50">
                            {{ $details }}
                        </p>
                    </div>
                </div>


                @foreach (collect($footer_menulinks)->chunk(5) as $group_links)
                    <div class="col-lg-2">
                        <div class="footer-list">
                            <ul class="list-unstyled">
                                @foreach ($group_links as $link)
                                    <li>
                                        <a href="{{ $link['link'] }}"><i class="mdi mdi-chevron-right mr-2"></i>{{ $link['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left pull-none">
                        <p class="text-white-50">
                            2015 - 2020 © Ubold. Design by
                            <a href="https://coderthemes.com/" target="_blank" class="text-white-50">Coderthemes</a>
                        </p>
                    </div>
                    <div class="float-right pull-none">
                        <ul class="list-inline social-links">
                            <li class="list-inline-item text-white-50">Social :</li>
                            <li class="list-inline-item">
                                <a href="{{ $facebook }}"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $twitter }}"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $instagram }}"><i class="mdi mdi-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </footer>
    <!-- footer end -->
@endif
