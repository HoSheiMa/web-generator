
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

<div class="container">
    <div class="card m-5">
        <div class="card-body">
            <h1 class="card-title">Orders and Order Items</h1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>User ID</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Brand</th>
                            <th>Product Description</th>
                            <th>Count</th>
                            <th>Total</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody id="order-items-table-body">
                        <!-- Rows will be inserted here by JavaScript -->
                    </tbody>
                </table>
            </div>
            <nav>
                <ul class="pagination" id="pagination">
                    <!-- Pagination links will be inserted here by JavaScript -->
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Include Ubold JS -->
<script src="path/to/ubold/js/vendor.min.js"></script>
<script src="path/to/ubold/js/app.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadOrders = (page = 1) => {
            fetch(`./api/orders/get.php?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        const tbody = document.getElementById('order-items-table-body');
                        const pagination = document.getElementById('pagination');
                        tbody.innerHTML = '';
                        pagination.innerHTML = '';

                        const orders = {};

                        // Group data by order_id
                        data.data.forEach(item => {
                            if (!orders[item.order_id]) {
                                orders[item.order_id] = {
                                    order_id: item.order_id,
                                    user_id: item.user_id,
                                    address: item.address,
                                    status: item.status,
                                    order_items: []
                                };
                            }
                            orders[item.order_id].order_items.push(item);
                        });

                        // Populate table
                        Object.values(orders).forEach(order => {
                            const rowSpan = order.order_items.length;
                            const firstItem = order.order_items[0];
                            const firstRow = `
                            <tr>
                                <td rowspan="${rowSpan}">${order.order_id}</td>
                                <td rowspan="${rowSpan}">${order.user_id}</td>
                                <td rowspan="${rowSpan}">${order.address}</td>
                                <td rowspan="${rowSpan}">${order.status}</td>
                                <td>${firstItem.product_name}</td>
                                <td><img src="${firstItem.product_image}" alt="Product Image" class="img-thumbnail" style="max-width: 100px;"></td>
                                <td>${firstItem.product_price}</td>
                                <td>${firstItem.product_brand}</td>
                                <td>${firstItem.product_description}</td>
                                <td>${firstItem.count}</td>
                                <td>${firstItem.count * firstItem.product_price}</td>
                                <td>${firstItem.created_at}</td>
                            </tr>
                        `;
                            tbody.insertAdjacentHTML('beforeend', firstRow);

                            for (let i = 1; i < order.order_items.length; i++) {
                                const item = order.order_items[i];
                                const itemRow = `
                                <tr>
                                    <td>${item.product_name}</td>
                                    <td><img src="${item.product_image}" alt="Product Image" class="img-thumbnail" style="max-width: 100px;"></td>
                                    <td>${item.product_price}</td>
                                    <td>${item.product_brand}</td>
                                    <td>${item.product_description}</td>
                                    <td>${item.count}</td>
                                    <td>${item.count * item.product_price}</td>
                                    <td>${item.created_at}</td>
                                </tr>
                            `;
                                tbody.insertAdjacentHTML('beforeend', itemRow);
                            }
                        });

                        // Create pagination links
                        for (let i = 1; i <= data.total_pages; i++) {
                            const pageItem = document.createElement('li');
                            pageItem.classList.add('page-item');
                            if (i === data.current_page) {
                                pageItem.classList.add('active');
                            }
                            pageItem.innerHTML = `<a class="page-link" href="#">${i}</a>`;
                            pageItem.addEventListener('click', (e) => {
                                e.preventDefault();
                                loadOrders(i);
                            });
                            pagination.appendChild(pageItem);
                        }
                    } else {
                        console.error('Failed to fetch data:', data.message);
                    }
                })
                .catch(error => console.error('Error:', error));
        };

        loadOrders();
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
        