
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="./theme/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />
<link href="./theme/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" id="app-style" />
<link href="./theme/css/style.css" rel="stylesheet" type="text/css" id="app-style" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container-fluid">
            <!-- LOGO -->
            <a class="logo text-uppercase" href="/home.php">
                                    <span class="text-white">google</span>
                            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                                            <li class="nav-item ">
                            <a style="color: rgba(40, 40, 46, 0.8)" class="nav-link "
                                href="./home.php">Home</a>
                        </li>
                                            <li class="nav-item ">
                            <a style="color: rgba(40, 40, 46, 0.8)" class="nav-link "
                                href="./features.php">Features</a>
                        </li>
                                            <li class="nav-item ">
                            <a style="color: rgba(40, 40, 46, 0.8)" class="nav-link "
                                href="./demos.php">Demos</a>
                        </li>
                                            <li class="nav-item ">
                            <a style="color: rgba(40, 40, 46, 0.8)" class="nav-link "
                                href="./pricing.php">Pricing</a>
                        </li>
                                            <li class="nav-item ">
                            <a style="color: rgba(40, 40, 46, 0.8)" class="nav-link "
                                href="./faqs.php">Faqs</a>
                        </li>
                                            <li class="nav-item ">
                            <a style="color: rgba(40, 40, 46, 0.8)" class="nav-link "
                                href="./clients.php">Clients</a>
                        </li>
                                            <li class="nav-item ">
                            <a style="color: rgba(40, 40, 46, 0.8)" class="nav-link "
                                href="./contact.php">Contact</a>
                        </li>
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
                                    </ul>
                <button class="btn btn-info navbar-btn">Try for Free</button>
            </div>
        </div>
    </nav>

<div class="card card-flush py-4 flex-row-fluid m-5">
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h2>Cart Details</h2>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-175px">Product</th>
                        <th class="min-w-70px text-end">Qty</th>
                        <th class="min-w-100px text-end">Unit Price</th>
                        <th class="min-w-100px text-end">Total</th>
                        <th class="min-w-100px text-end"></th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">

                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <div class="text-center">
            <a href="./checkout.php" class="btn btn-primary p-4 w-350px">Checkout</a>
        </div>
    </div>
    <!--end::Card body-->
</div>

<script>
    const url = './api/cart/get.php';

    fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            if (data.error && data.error == "user_id is required") {
                location.assign('./dashboard/login.php')
            }
            let total = 0
            data.forEach(record => {
                total += record.product.price * record.count;
                document.querySelector('tbody').innerHTML += `
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url('${record.product.image}');"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <!--begin::Title-->
                                <div class="ms-5">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="fw-bold text-gray-600 text-hover-primary">${record.product.name}</a>
                                </div>
                                <!--end::Title-->
                            </div>
                        </td>
                        <td class="text-end">${record.count}</td>
                        <td class="text-end">$${record.product.price}.00</td>
                        <td class="text-end">$${record.product.price * record.count}.00</td>
                    </tr>
                `
            });
            document.querySelector('tbody').innerHTML += `
                
                    <tr>
                        <td colspan="4" class="text-end">Subtotal</td>
                        <td class="text-end">$${total}.00</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-end">Shipping Rate</td>
                        <td class="text-end">$55.00</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="fs-3 text-gray-900 text-end">Grand Total</td>
                        <td class="text-gray-900 fs-3 fw-bolder text-end">$${total + 55}.00</td>
                    </tr>
                
                `

        })
        .catch(error => {
            console.error('Error:', error);
        });
</script>

<!-- footer start -->
    <footer class="bg-dark footer">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <div class="pr-lg-4">
                        <div class="mb-4">
                                                            <span class="text-white">google dogs.com</span>
                                                    </div>
                        <p class="text-white-50">A Responsive Bootstrap 4 Web App Kit</p>
                        <p class="text-white-50">
                            Ubold is a fully featured premium admin template built on top of
                            awesome Bootstrap 4.1.3, modern web technology HTML5, CSS3 and
                            jQuery.
                        </p>
                    </div>
                </div>


                                    <div class="col-lg-2">
                        <div class="footer-list">
                            <ul class="list-unstyled">
                                                                    <li>
                                        <a href="./home.php"><i class="mdi mdi-chevron-right mr-2"></i>Home</a>
                                    </li>
                                                                    <li>
                                        <a href="./features.php"><i class="mdi mdi-chevron-right mr-2"></i>Features</a>
                                    </li>
                                                                    <li>
                                        <a href="./demos.php"><i class="mdi mdi-chevron-right mr-2"></i>Demos</a>
                                    </li>
                                                                    <li>
                                        <a href="./pricing.php"><i class="mdi mdi-chevron-right mr-2"></i>Pricing</a>
                                    </li>
                                                                    <li>
                                        <a href="./faqs.php"><i class="mdi mdi-chevron-right mr-2"></i>Faqs</a>
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                                    <div class="col-lg-2">
                        <div class="footer-list">
                            <ul class="list-unstyled">
                                                                    <li>
                                        <a href="./clients.php"><i class="mdi mdi-chevron-right mr-2"></i>Clients</a>
                                    </li>
                                                                    <li>
                                        <a href="./contact.php"><i class="mdi mdi-chevron-right mr-2"></i>Contact</a>
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                
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
                                <a href="/"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="/"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="/"><i class="mdi mdi-instagram"></i></a>
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

        <script src="./theme/js/jquery.min.js"></script>
<script src="./theme/js/bootstrap.bundle.min.js"></script>
<script src="./theme/js/jquery.easing.min.js"></script>
<script src="./theme/js/scrollspy.min.js"></script>
<script src="./theme/js/app.js"></script>
    </body>
</html>
        