<?php
$firstname = '';
$lastname = '';
$username = '';
$email = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password)) {
        echo "All fields are required. Please fill out the complete form.";
    } else {
        $csvFile = 'users.csv';
        $file = fopen($csvFile, 'a');
        fputcsv($file, [$firstname, $lastname, $username, $email, $password]);
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
                <input type="text" name="username" class="input-field" placeholder="Username" value="<?php echo $username; ?>">
                <i class="bx bx-user"></i>
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