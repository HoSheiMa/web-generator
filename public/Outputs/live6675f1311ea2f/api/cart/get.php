<?php
include '../../dashboard/configs.php';
session_start();
// Set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Get the user_id from the session
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if ($user_id === null) {
    echo json_encode(["error" => "user_id is required"]);
    exit();
}

// Prepare and execute the SQL statement to fetch all cart records
$stmt = $conn->prepare("SELECT * FROM carts WHERE user_id = :user_id");
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch product data and inject it into cart records
foreach ($cartItems as &$item) {
    $productStmt = $conn->prepare("SELECT * FROM products WHERE id = :product_id");
    $productStmt->bindParam(':product_id', $item['product_id'], PDO::PARAM_INT);
    $productStmt->execute();
    $product = $productStmt->fetch(PDO::FETCH_ASSOC);
    $item['product'] = $product;
}

// Output the cart items with injected product data as JSON
echo json_encode($cartItems);
