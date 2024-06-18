@if ($visible)
    <div class="mb-n10 mb-lg-n20 z-index-2">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <!--begin::Title-->
                <h3 class="fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">{{ $title }}</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold">{{ $details }}
                </div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row w-100 gy-10 mb-md-20" id="product-body">
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
        fetch("./api/products/get.php", requestOptions)
            .then(response => response.json()).then((products) => {
                html = ``
                for (const product of products) {
                    html += `
                    <div class="col-md-4 px-5">
                          <div class="card">
            <div class="card-header">
                <h3 class="card-title"> ${product.name} - <span class="text-primary"> ${product.brand} </span></h3>
            </div>
            <div class="card-body">
                <img height="400" src="${product.image}" class="card-img-top" alt="${product.name}">
                <p class="card-text mt-3">${product.description}</p>
                <p class="card-text"><strong>Price:</strong> $<span style="font-size:36px">${product.price}</span></p>
                <button onclick="addToCart(${product.id})" class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
                        </div>
                    `
                }

                html += ""
                document.querySelector('#product-body').innerHTML = html;

            })
            .catch(error => {
                alert('something going wrong, please try again later')
            });

        function addToCart(productId) {
            var requestOptions = {
                method: 'POST',
                redirect: 'follow',
                'body': JSON.stringify({
                    'product_id': productId,
                    'count': 1,
                })
            };
            fetch("./api/cart/add.php", requestOptions)
                .then(response => response.json()).then((response) => {
                    if (response.status == "error" && response.message == "User not logged in") {
                        return window.location.assign('dashboard/login.php')
                    }
                    if (response.status == "error") {
                        alert('something going wrong, please try again later')
                    }
                }).catch(error => {
                    alert('something going wrong, please try again later')
                });
        }
    </script>
@endif
