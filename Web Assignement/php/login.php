<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $csvFile = 'users.csv';
    $file = fopen($csvFile, 'r');
    
    while (($row = fgetcsv($file)) !== false) {
        if ($row[2] === $username && $row[4] === $password) {
            fclose($file);
            $_SESSION['username'] = $username;
            header("Location: ../php/contact.php");
            exit();
        }
    }

    fclose($file);
    echo "Invalid email or password. Please try again.";
}
session_unset(); 
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body class="login-body">
 <div class="wrapper">
    <div class="form-box">
        <form action="login.php" method="POST">
            <div class="top">
                <span>Don't have an account? <a href="register.php">Sign Up</a></span>
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" name="username" class="input-field" placeholder="Username">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </form>
    </div>
</div>   

<script>
    document.getElementById('registerBtn').addEventListener('click', function() {
        window.location.href = 'register.php';
    });
</script>

<script>
    document.getElementById('loginBtn').addEventListener('click', function() {
        window.location.href = 'login.php';
    });
</script>
</body>
</html>