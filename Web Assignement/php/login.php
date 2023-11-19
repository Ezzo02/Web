<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $usernameOrEmail = isset($_POST['usernameOrEmail']) ? $_POST['usernameOrEmail'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Validate and sanitize data if needed

    // Read user data from the CSV file
    $csvFile = 'users.csv';
    $file = fopen($csvFile, 'r');
    
    // Loop through each row in the CSV file
    while (($row = fgetcsv($file)) !== false) {
        // Check if the entered credentials match any user in the file
        if (($row[0] === $usernameOrEmail || $row[2] === $usernameOrEmail) && $row[3] === $password) {
            fclose($file);
            // Redirect the user to a success page or perform other actions
            header("Location: ../success.php");
            exit();
        }
    }

    fclose($file);

    // If no matching user is found, display an error message
    echo "Invalid email or password. Please try again.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <title>Login & Registration</title>
</head>
<body class="login-body">
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <p>Sara</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="login.html" class="link active">Home</a></li>
                <li><a href="#" class="link">Personal Site</a></li>
                <li><a href="#" class="link">Gallery</a></li>
                <li><a href="#" class="link">CV</a></li>
                <li><a href="../contact.html" class="link">Contact Me</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn">Sign In</button>
            <button class="btn" id="registerBtn">Sign Up</button>
        </div>
    </nav>
    <div class="form-box">
        <form action="login.php" method="POST">
            <div class="top">
                <span>Don't have an account? <a href="register.php">Sign Up</a></span>
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" name="email" class="input-field" placeholder="Email">
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