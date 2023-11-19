<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sara's Personal Website</title>
</head>
<body class="home">
    <nav class="nav">
        <div class="nav-logo">
            <p>Hello</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="home.php" class="link active">Home</a></li>
                <li><a href="../php/gallery.php" class="link">Gallery</a></li>
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
    
    <section id="coverhome">
        <div class="cover containerhome">
            <div>
                <h1>Hello,<span></span></h1>
                <h1>My Name is<span></span></h1>
                <h1>Sara<span></span></h1>
                <a href="../php/cv.php" type="button" class="cta">Portfolio</a>
            </div>
        </div>
    </section>

    <script>
        function redirectToLogin() {
            window.location.href = '../index.php';
        }
    </script>
</body>
</html>