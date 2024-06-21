@if ($visible)
    <div class="z-index-2 mt-5">
        <!--begin::Container-->
        <div class="container  mt-5">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <!--begin::Title-->
                <h3 class="fs-2hx text-gray-900 " id="how-it-works">{{ $title }}</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold mb-3">{{ $details }}</div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row w-100 gy-10 mb-md-20" id="product-body-{{ $type }}">
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
        fetch("./api/products/{{ $type }}.php", requestOptions)
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
                document.querySelector('#product-body-{{ $type }}').innerHTML = html;
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
@endif
