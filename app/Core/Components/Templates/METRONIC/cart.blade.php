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
