@if ($visible)
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="/home.php">
                @if (isset($navbar_logo) && $navbar_logo)
                    <img src="{{ $navbar_logo }}" alt="LOGO" class="logo-light logo-dark">
                @else
                    <span class="text-white">{{ $navbar_title }}</span>
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                    @foreach ($navbar_menulinks as $link)
                        <li class="nav-item @if (isset($link['active']) && $link['active']) active @endif">
                            <a style="color: rgba(40, 40, 46, 0.8)" class="nav-link @if (isset($link['disabled']) && $link['disabled']) disabled @endif"
                                href="{{ $link['link'] }}">{{ $link['title'] }}</a>
                        </li>
                    @endforeach
                    @if (isset($enable_cart) && $enable_cart == true)
                        <li class="menu-item ">
                            <!--begin::Menu link-->
                            <a style="color: rgba(40, 40, 46, 0.8)" class="nav-link   " href="./cart.php" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                <i class="mdi mdi-cart text-gray-900 fs-2tx"></i>
                                <span id="cart-count" class="badge badge-circle badge-danger ms-2">0</span>
                            </a>
                            <!--end::Menu link-->
                        </li>
                        <li class="menu-item ">
                            <!--begin::Menu link-->
                            <a style="color: rgba(40, 40, 46, 0.8)" class=" nav-link  " href="./orders.php" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">
                                My Orders
                            </a>
                            <!--end::Menu link-->
                        </li>
                        <script>
                            // Define the URL to fetch from
                            // Use fetch to get the data
                            setInterval(() => {
                                fetch('./api/cart/count.php')
                                    .then(response => {
                                        // Check if the response is ok (status is in the range 200-299)
                                        if (!response.ok) {
                                            throw new Error('Network response was not ok ' + response.statusText);
                                        }
                                        // Parse the JSON from the response
                                        return response.json();
                                    })
                                    .then(data => {
                                        // Log the JSON data to see its structure
                                        console.log(data);

                                        // Access the 'total_count' value in the JSON data
                                        if (data.total_count !== undefined) {
                                            // console.log('Count:', data.total_count);
                                            document.querySelector('#cart-count').innerHTML = data.total_count
                                        } else {
                                            console.log('Count not found in the response');
                                        }
                                    })
                                    .catch(error => {
                                        // Handle any errors that occurred during fetch
                                        console.log('There was a problem with the fetch operation:', error);
                                    });
                            }, 2500);
                        </script>
                    @endif
                </ul>
                <button class="btn btn-info navbar-btn">Try for Free</button>
            </div>
        </div>
    </nav>
@endif
