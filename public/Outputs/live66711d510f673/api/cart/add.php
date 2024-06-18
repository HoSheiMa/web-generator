<?php
include '../../dashboard/configs.php';

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
    exit;
}

// Validate input parameters
if (!isset($_POST['product_id']) || !isset($_POST['count'])) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input']);
    exit;
}

$user_id = $_SESSION['user_id'];
$product_id = filter_var($_POST['product_id'], FILTER_VALIDATE_INT);
$count = filter_var($_POST['count'], FILTER_VALIDATE_INT);

if ($product_id === false || $count === false || $count <= 0) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input values']);
    exit;
}

// Check if the product is already in the cart
$stmt = $conn->prepare("SELECT count FROM cart WHERE user_id = :user_id AND product_id = :product_id");
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
$stmt->execute();
$existingCartItem = $stmt->fetch(PDO::FETCH_ASSOC);

if ($existingCartItem) {
    // Update the count if the product is already in the cart
    $newCount = $existingCartItem['count'] + $count;
    $updateStmt = $conn->prepare("UPDATE cart SET count = :count WHERE user_id = :user_id AND product_id = :product_id");
    $updateStmt->bindParam(':count', $newCount, PDO::PARAM_INT);
    $updateStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $updateStmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    if ($updateStmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Product count updated in cart']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to update product count in cart']);
    }
} else {
    // Insert a new record if the product is not in the cart
    $insertStmt = $conn->prepare("INSERT INTO cart (user_id, product_id, count) VALUES (:user_id, :product_id, :count)");
    $insertStmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $insertStmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    $insertStmt->bindParam(':count', $count, PDO::PARAM_INT);
    if ($insertStmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Product added to cart']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add product to cart']);
    }
}
