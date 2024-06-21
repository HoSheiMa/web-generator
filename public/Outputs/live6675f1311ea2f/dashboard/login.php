<?php
include './configs.php';
include './theme.php';

if (isset($_POST['submit'])) {
    // getting the record for the given username
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$_POST['email']]);
    $user = $stmt->fetch();
    // verifying the password
    if ($user && password_verify($_POST['password'], $user['password'])) {
        // starts the session created if login info is correct
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['user'] = json_encode($user);
        header($user['role'] == "admin" ? "Location: ./index.php" : "Location: ../home.php");
        exit;
    } else {
        $error = "Login and password don't match";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
    <?php echo $css ?>
</head>

<body class="authentication-bg  ">
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 shadow-lg">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center w-75 m-auto">
                                <h4 class="text-muted text-center font-18"><b>Sign In</b></h4>
                                <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                            </div>
                            <form method="post" action="">
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password">
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>
                                <div class="mb-3 text-center">
                                    <button class="btn btn-primary" type="submit" name="submit">Log In</button>
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
                            <p class="text-muted">Don't have an account? <a href="./register.php" class="text-primary fw-medium ms-1">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $js ?>
</body>

</html>