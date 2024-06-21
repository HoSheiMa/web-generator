<?php

session_start();
include '../../dashboard/configs.php';
header('Content-Type: application/json');

$user_id = $_SESSION['user_id'];
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 5;
$offset = ($page - 1) * $limit;

try {
    // Count total orders for pagination
    $count_stmt = $conn->prepare("SELECT COUNT(*) FROM orders WHERE user_id = :user_id");
    $count_stmt->execute([':user_id' => $user_id]);
    $total_orders = $count_stmt->fetchColumn();
    $total_pages = ceil($total_orders / $limit);

    // Fetch orders and their matched order items for the current user
    $stmt = $conn->prepare("
        SELECT 
            o.id AS order_id, o.user_id, o.address, o.status,
            oi.product_name, oi.product_image, oi.product_price, 
            oi.product_brand, oi.product_description,
            oi.count, oi.created_at
        FROM 
            orders o
        LEFT JOIN 
            order_items oi ON o.id = oi.order_id
        WHERE 
            o.user_id = :user_id
        ORDER BY 
            o.id, oi.id
        LIMIT :limit OFFSET :offset
    ");
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['status' => 'success', 'data' => $results, 'total_pages' => $total_pages, 'current_page' => $page]);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
