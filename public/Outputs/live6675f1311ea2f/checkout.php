
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

<div class="card m-5">
    <div class="card-body">
        <form id="kt_modal_new_card_form" method="POST" action="/payment" class="needs-validation" novalidate>
            <h1>Shipping Address</h1>
            <div class="mb-3">
                <label class="form-label" for="address">Address <span class="text-danger">*</span></label>
                <input required type="text" class="form-control" id="address" placeholder="Address" name="address" value="Cairo">
                <div class="invalid-feedback">Please provide a valid address.</div>
            </div>

            <h1>Payment Details</h1>
            <div class="mb-3">
                <label class="form-label" for="card_name">Name On Card <span class="text-danger">*</span></label>
                <input required type="text" class="form-control" id="card_name" placeholder="Card Holder's Name" name="card_name" value="Max Doe">
                <div class="invalid-feedback">Please provide the name on the card.</div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="card_number">Card Number <span class="text-danger">*</span></label>
                <div class="input-group">
                    <input required type="text" class="form-control" id="card_number" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111">
                    <span class="input-group-text">
                        <img src="/metronic8/demo4/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px">
                        <img src="/metronic8/demo4/assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px">
                        <img src="/metronic8/demo4/assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px">
                    </span>
                </div>
                <div class="invalid-feedback">Please provide a valid card number.</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-8">
                    <label class="form-label" for="card_expiry_month">Expiration Date <span class="text-danger">*</span></label>
                    <div class="row">
                        <div class="col">
                            <select name="card_expiry_month" id="card_expiry_month" required class="form-select">
                                <option value="">Month</option>
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
                        <div class="col">
                            <select name="card_expiry_year" id="card_expiry_year" required class="form-select">
                                <option value="">Year</option>
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
                    </div>
                    <div class="invalid-feedback">Please provide a valid expiration date.</div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="card_cvv">CVV <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input required type="text" class="form-control" id="card_cvv" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv">
                        <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                    </div>
                    <div class="invalid-feedback">Please provide a valid CVV.</div>
                </div>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <div>
                    <label class="form-label">Save Card for further billing?</label>
                    <div class="form-text">If you need more info, please check budget planning</div>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="saveCard" name="save_card" value="1" checked>
                    <label class="form-check-label" for="saveCard">Save Card</label>
                </div>
            </div>

            <div class="text-center">
                <a href="./home.php" class="btn btn-light me-3">Discard</a>
                <button type="button" onclick="checkout(this)" id="kt_button_1" class="btn btn-primary">
                    <span class="indicator-label">Pay</span>
                </button>
            </div>
        </form>
        <div id="success-message" style="display: none;" class="alert alert-success mt-3">
            Payment successful! Redirecting to home page...
        </div>
        <div id="error-message" style="display: none;" class="alert alert-danger mt-3"></div>
    </div>
</div>

<script>
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

    function checkout(btn) {
        const form = document.getElementById('kt_modal_new_card_form');
        const formData = new FormData(form);

        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });

        btn.setAttribute('data-kt-indicator', "on");

        fetch('./api/orders/checkout.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                if (result.status == "error") {
                    document.getElementById('error-message').innerText = result.message;
                    document.getElementById('error-message').style.display = 'block';
                    btn.removeAttribute('data-kt-indicator');
                    return;
                }
                btn.removeAttribute('data-kt-indicator');

                document.getElementById('success-message').style.display = 'block';
                setTimeout(() => {
                    window.location.href = './home.php';
                }, 3000);
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('error-message').innerText = 'Something went wrong. Please try again later.';
                document.getElementById('error-message').style.display = 'block';
                btn.removeAttribute('data-kt-indicator');
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
        