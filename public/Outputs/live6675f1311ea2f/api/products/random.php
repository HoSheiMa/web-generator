<?php
include '../../dashboard/configs.php';

// Prepare the SQL query to select random products
$stmt = $conn->prepare("SELECT * FROM products ORDER BY RAND() LIMIT 12");

// Execute the query
$stmt->execute();

// Fetch all results
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Convert the results to JSON
$json = json_encode($products);

// Set the Content-Type to application/json
header('Content-Type: application/json');

// Output the JSON
echo $json;
