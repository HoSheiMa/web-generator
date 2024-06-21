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

        btn.setAttribute(', "on");

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
