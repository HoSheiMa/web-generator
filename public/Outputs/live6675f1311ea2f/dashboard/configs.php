<?php
// Define the root directory

define('ENV_MODE', ('debug')); // local / debug / production


if (ENV_MODE == "debug") {
    define('ROOT_DIR', 'http://127.0.0.1:8000/Outputs/live66748fe350531');
    define('STORAGE_PATH', dirname(__FILE__) . '/../');
} else {
    define('ROOT_DIR', dirname(__FILE__));
    define('STORAGE_PATH', dirname(__FILE__) . '/../');
}
// Define other directory constants
define('CSS_DIR', ROOT_DIR . '/css');
define('JS_DIR', ROOT_DIR . '/js');
define('IMAGES_DIR', ROOT_DIR . '/images');
define('INCLUDES_DIR', ROOT_DIR . '/includes');


// connections
$servername = "localhost";
$username = "root";
$password = "";
$database = "output_example_database";

try {
    $conn = $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
