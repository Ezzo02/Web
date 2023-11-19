<?php
$firstname = '';
$lastname = '';
$email = '';
$password = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        echo "All fields are required. Please fill out the complete form.";
        // You might want to redirect the user back to the registration form or display an error message
        // header("Location: ../php/register.php");
        // exit();
    } else {
        // Write data to CSV file
        $csvFile = 'users.csv';
        $file = fopen($csvFile, 'a'); // 'a' mode to append to the file
        fputcsv($file, [$firstname, $lastname, $email, $password]);
        fclose($file);
        header("Location: ../php/login.php");
        exit();
    }
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
    <title>Registration</title>
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
                <li><a href="../php/contact.html" class="link">Contact Me</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn">Sign In</button>
            <button class="btn" id="registerBtn">Sign Up</button>
        </div>
    </nav>
    <div class="form-box">
        <form id="registrationForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <div class="top">
                <span>Have an account? <a href="login.php">Login</a></span>
                <header>Sign Up</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" name="firstname" class="input-field" placeholder="Firstname" value="<?php echo $firstname; ?>">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" name="lastname" class="input-field" placeholder="Lastname" value="<?php echo $lastname; ?>">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" name="email" class="input-field" placeholder="Email" value="<?php echo $email; ?>">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" class="input-field" placeholder="Password" value="<?php echo $password; ?>">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </form>

    </div>
</div>   



<script>
    document.getElementById('loginBtn').addEventListener('click', function() {
        window.location.href = 'login.php';
    });
</script>

<script>
    document.getElementById('registerBtn').addEventListener('click', function() {
        window.location.href = 'register.php';
    });
</script>
</body>
</html>