<?php
session_start();
include '../../dashboard/configs.php';

// Set header to handle JSON input and output
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

// Retrieve user ID from the session
$user_id = $_SESSION['user_id'];

// Retrieve data from the input
$address = $input['address'];
$card_expiry_month = $input['card_expiry_month'];
$card_expiry_year = $input['card_expiry_year'];
$card_name = $input['card_name'];
$card_number = $input['card_number'];
$card_cvv = $input['card_cvv'];

try {
    // Start a transaction
    $conn->beginTransaction();

    // Fetch all cart records for the user
    $stmt = $conn->prepare("SELECT * FROM carts WHERE user_id = :user_id");
    $stmt->execute([':user_id' => $user_id]);
    $cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($cart_items)) {
        throw new Exception("Cart is empty");
    }

    // Create a new order
    $stmt = $conn->prepare("INSERT INTO orders (user_id, address, status) VALUES (:user_id, :address, 'new')");
    $stmt->execute([':user_id' => $user_id, ':address' => $address]);
    $order_id = $conn->lastInsertId();

    // Prepare the statement to get product details
    $product_stmt = $conn->prepare("SELECT * FROM products WHERE id = :product_id");

    // Insert cart items into order_items table
    $order_items_stmt = $conn->prepare("
        INSERT INTO order_items (
            order_id, product_name, product_image, product_price, product_brand, 
            product_description, count, created_at
        ) VALUES (:order_id, :product_name, :product_image, :product_price, :product_brand, 
                  :product_description, :count, NOW())
    ");

    foreach ($cart_items as $item) {
        $product_stmt->execute([':product_id' => $item['product_id']]);
        $product = $product_stmt->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            $order_items_stmt->execute([
                ':order_id' => $order_id,
                ':product_name' => $product['name'],
                ':product_image' => $product['image'],
                ':product_price' => $product['price'],
                ':product_brand' => $product['brand'],
                ':product_description' => $product['description'],
                ':count' => $item['count']
            ]);
        } else {
            throw new Exception("Product not found for ID: " . $item['product_id']);
        }
    }

    // Insert transaction record
    $transaction_stmt = $conn->prepare("
        INSERT INTO transactions (
            card_expiry_month, card_expiry_year, card_name, card_number, card_cvv, order_id, user_id
        ) VALUES (:card_expiry_month, :card_expiry_year, :card_name, :card_number, :card_cvv, :order_id, :user_id)
    ");
    $transaction_stmt->execute([
        ':card_expiry_month' => $card_expiry_month,
        ':card_expiry_year' => $card_expiry_year,
        ':card_name' => $card_name,
        ':card_number' => $card_number,
        ':card_cvv' => $card_cvv,
        ':order_id' => $order_id,
        ':user_id' => $user_id
    ]);

    // Clear the user's cart
    $stmt = $conn->prepare("DELETE FROM carts WHERE user_id = :user_id");
    $stmt->execute([':user_id' => $user_id]);

    // Commit the transaction
    $conn->commit();

    // sleep for 3 seconds
    sleep(3);
    https: //www.canva.com/templates/EAGD32gAi9k-lifecycle-strategy-presentation/
    // Return success response
    echo json_encode(['status' => 'success', 'message' => 'Order placed successfully']);
} catch (Exception $e) {
    // Rollback the transaction if something failed
    $conn->rollBack();

    // sleep for 3 seconds
    sleep(3);

    // Return error response
    echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
}
