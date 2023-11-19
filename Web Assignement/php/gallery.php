<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Gallery</title>
</head>
<body class="gallery">
    <nav class="nav">
        <div class="nav-logo">
            <p>Hello</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="home.php" class="link active">Home</a></li>
                <li><a href="#" class="link">Gallery</a></li>
                <li><a href="../php/cv.php" class="link">CV</a></li>
                <li><a href="../php/contact.php" class="link">Contact Me</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <?php
            if (isset($_SESSION["username"])) {
                echo '<span id ="right" style="color: white;">Welcome, ' . $_SESSION["username"] ;}?>
                <button class="btn white-btn" id="loginBtn" onclick="redirectToLogin()">Logout</button>
        </div>
    </nav>
    
    <h1>Gallery</h1>
    <div class="body">
        <div class="box">
            <div class="picture">
                <a href="picture1.html"><img src="images/image1.jpg" alt="Image 1"></a>
            </div>
        </div>
    
        <div class="box">
            <div class="picture">
                <a href="picture2.html"><img src="images/image2.jpg" alt="Image 2"></a>
             </div>
        </div>
    
        <div class="box">
            <div class="picture">
                <a href="picture3.html"><img src="images/image3.jpg" alt="Image 3"></a>
            </div>
        </div>
    </div>

    <script>
        function redirectToLogin() {
            window.location.href = '../php/login.php';
        }
    </script>
</body>
</html>
