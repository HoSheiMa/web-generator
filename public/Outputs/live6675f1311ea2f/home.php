
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
                                    <span class="text-white">google dogs.com</span>
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

<div class="z-index-2 mt-5">
        <!--begin::Container-->
        <div class="container  mt-5">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <!--begin::Title-->
                <h3 class="fs-2hx text-gray-900 " id="how-it-works">The Top products</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold mb-3">ٌYou can find whatever new brands and products in that list</div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row w-100 gy-10 mb-md-20" id="product-body-top">
                <!--begin::Col-->
            </div>
        </div>
        <!--end::Container-->
    </div>

    <script>
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };
        fetch("./api/products/top.php", requestOptions)
            .then(response => response.json()).then((products) => {
                let html = '';
                for (const product of products) {
                    html += `
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg border-0 h-100">
                            <div class="card-header bg-primary text-white text-center">
                                <h3 class="card-title">${product.name} - <span class="text-warning">${product.brand}</span></h3>
                            </div>
                            <div class="card-body text-center">
                                <img height="250" src="${product.image}" class="card-img-top mb-3" alt="${product.name}" style="object-fit: cover;">
                                <p class="card-text mt-3">${product.description}</p>
                                <p class="card-text"><strong>Price:</strong> $<span class="h4">${product.price}</span></p>
                                <button onclick="addToCart(${product.id})" class="btn btn-primary btn-block">Add to Cart</button>
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-muted">Free shipping on orders over $50!</small>
                            </div>
                        </div>
                    </div>
                    `;
                }
                document.querySelector('#product-body-top').innerHTML = html;
            })
            .catch(error => {
                alert('Something went wrong, please try again later.');
            });

        function addToCart(productId) {
            var requestOptions = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    'product_id': productId,
                    'count': 1
                })
            };
            fetch("./api/cart/add.php", requestOptions)
                .then(response => response.json()).then((response) => {
                    if (response.status === "error" && response.message === "User not logged in") {
                        return window.location.assign('dashboard/login.php');
                    }
                    if (response.status === "error") {
                        alert('Something went wrong, please try again later.');
                    } else {
                        alert('Added Item to the Cart');
                    }
                }).catch(error => {
                    alert('Something went wrong, please try again later.');
                });
        }
    </script>

<div class="z-index-2 mt-5">
        <!--begin::Container-->
        <div class="container  mt-5">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <!--begin::Title-->
                <h3 class="fs-2hx text-gray-900 " id="how-it-works">The Random Pick products</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold mb-3">ٌYou can find whatever new brands and products in that list</div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row w-100 gy-10 mb-md-20" id="product-body-random">
                <!--begin::Col-->
            </div>
        </div>
        <!--end::Container-->
    </div>

    <script>
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };
        fetch("./api/products/random.php", requestOptions)
            .then(response => response.json()).then((products) => {
                let html = '';
                for (const product of products) {
                    html += `
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg border-0 h-100">
                            <div class="card-header bg-primary text-white text-center">
                                <h3 class="card-title">${product.name} - <span class="text-warning">${product.brand}</span></h3>
                            </div>
                            <div class="card-body text-center">
                                <img height="250" src="${product.image}" class="card-img-top mb-3" alt="${product.name}" style="object-fit: cover;">
                                <p class="card-text mt-3">${product.description}</p>
                                <p class="card-text"><strong>Price:</strong> $<span class="h4">${product.price}</span></p>
                                <button onclick="addToCart(${product.id})" class="btn btn-primary btn-block">Add to Cart</button>
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-muted">Free shipping on orders over $50!</small>
                            </div>
                        </div>
                    </div>
                    `;
                }
                document.querySelector('#product-body-random').innerHTML = html;
            })
            .catch(error => {
                alert('Something went wrong, please try again later.');
            });

        function addToCart(productId) {
            var requestOptions = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    'product_id': productId,
                    'count': 1
                })
            };
            fetch("./api/cart/add.php", requestOptions)
                .then(response => response.json()).then((response) => {
                    if (response.status === "error" && response.message === "User not logged in") {
                        return window.location.assign('dashboard/login.php');
                    }
                    if (response.status === "error") {
                        alert('Something went wrong, please try again later.');
                    } else {
                        alert('Added Item to the Cart');
                    }
                }).catch(error => {
                    alert('Something went wrong, please try again later.');
                });
        }
    </script>

<div class="z-index-2 mt-5">
        <!--begin::Container-->
        <div class="container  mt-5">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <!--begin::Title-->
                <h3 class="fs-2hx text-gray-900 " id="how-it-works">The Recently added products</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold mb-3">ٌYou can find whatever new brands and products in that list</div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row w-100 gy-10 mb-md-20" id="product-body-recently">
                <!--begin::Col-->
            </div>
        </div>
        <!--end::Container-->
    </div>

    <script>
        var requestOptions = {
            method: 'GET',
            redirect: 'follow'
        };
        fetch("./api/products/recently.php", requestOptions)
            .then(response => response.json()).then((products) => {
                let html = '';
                for (const product of products) {
                    html += `
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg border-0 h-100">
                            <div class="card-header bg-primary text-white text-center">
                                <h3 class="card-title">${product.name} - <span class="text-warning">${product.brand}</span></h3>
                            </div>
                            <div class="card-body text-center">
                                <img height="250" src="${product.image}" class="card-img-top mb-3" alt="${product.name}" style="object-fit: cover;">
                                <p class="card-text mt-3">${product.description}</p>
                                <p class="card-text"><strong>Price:</strong> $<span class="h4">${product.price}</span></p>
                                <button onclick="addToCart(${product.id})" class="btn btn-primary btn-block">Add to Cart</button>
                            </div>
                            <div class="card-footer text-center">
                                <small class="text-muted">Free shipping on orders over $50!</small>
                            </div>
                        </div>
                    </div>
                    `;
                }
                document.querySelector('#product-body-recently').innerHTML = html;
            })
            .catch(error => {
                alert('Something went wrong, please try again later.');
            });

        function addToCart(productId) {
            var requestOptions = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    'product_id': productId,
                    'count': 1
                })
            };
            fetch("./api/cart/add.php", requestOptions)
                .then(response => response.json()).then((response) => {
                    if (response.status === "error" && response.message === "User not logged in") {
                        return window.location.assign('dashboard/login.php');
                    }
                    if (response.status === "error") {
                        alert('Something went wrong, please try again later.');
                    } else {
                        alert('Added Item to the Cart');
                    }
                }).catch(error => {
                    alert('Something went wrong, please try again later.');
                });
        }
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
        