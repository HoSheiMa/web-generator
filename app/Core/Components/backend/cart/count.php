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

// Prepare and execute the SQL statement to get the sum of the count column
$stmt = $conn->prepare("SELECT SUM(count) as total_count FROM carts WHERE user_id = :user_id");
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();

// Fetch the result and output as JSON
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$total_count = $row['total_count'] !== null ? $row['total_count'] : 0;
echo json_encode(["total_count" => $total_count]);
