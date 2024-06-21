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

<!-- Include Metronic JS -->
<script src="path/to/metronic/js/scripts.bundle.js"></script>
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
