<?php
include './configs.php';
include './theme.php';
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate input parameters
    if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])) {
        $error = 'Invalid input';
    } else {
        $name = trim($_POST['name']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];

        if (empty($name) || $email === false || empty($password)) {
            $error = 'Invalid input values';
        } else {
            // Check if email already exists
            $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            if ($stmt->fetchColumn() > 0) {
                $error = 'Email already exists';
            } else {
                // Hash the password
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Prepare the SQL query to insert the new record
                $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");

                // Bind the parameters
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

                // Execute the query
                if ($stmt->execute()) {
                    // Redirect to login page
                    header('Location: ./login.php');
                    exit;
                } else {
                    $error = 'Failed to register user';
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Register</title>
    <?php echo $css ?>
</head>

<body class="authentication-bg">
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 shadow-lg">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center w-75 m-auto">
                                <h4 class="text-muted text-center font-18"><b>Register</b></h4>
                                <p class="text-muted mb-4">Enter your name, email address, and password to create your account.</p>
                            </div>
                            <form method="post" action="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input class="form-control" type="text" id="name" required="" placeholder="Enter your name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password">
                                </div>
                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary" type="submit" name="submit">Register</button>
                                </div>
                                <?php
                                if (isset($error)) {
                                    echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already have an account? <a href="./login.php" class="text-primary fw-medium ms-1">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $js ?>
</body>

</html>