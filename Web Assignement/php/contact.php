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
    <title>Contact us</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="contact">
    <nav class="nav">
        <div class="nav-logo">
            <p>Hello</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="../php/home.php" class="link">Home</a></li>
                <li><a href="../php/gallery.php" class="link">Gallery</a></li>
                <li><a href="../php/cv.php" class="link">CV</a></li>
                <li><a href="contact.html" class="link active">Contact Me</a></li>
            </ul>
        </div>
        <div class="nav-button">
        <?php
        if (isset($_SESSION["username"])) {
            echo '<span id ="right" style="color: white;">Welcome, ' . $_SESSION["username"] ;}?>
            <button class="btn white-btn" id="loginBtn" onclick="redirectToLogin()">Logout</button>
        </div>
    </nav>

    <section id="contact">
        <div class="contact container">
            <h1 class="section-title">Contact <span style="color: white;">Info</span></h1>
            <div class="items">
                <div class="contact-item">
                    <div class="icon">
                        <img src="../images/phone.png">
                    </div>
                    <div class="contact-info">
                        <h2>Phone</h2>
                        <h4>0096176080032</h4>
                    </div>
                </div>
    
                <div class="contact-item">
                    <div class="icon">
                        <img src="../images/email.png">
                    </div>
                    <div class="contact-info">
                        <h2>Email</h2>
                        <h4>saraezzeddin@outlook.sa</h4>
                    </div>
                </div>
    
                <div class="contact-item">
                    <div class="icon">
                        <img src="../images/linkedin.png">
                    </div>
                    <div class="contact-info">
                        <h2>LinkedIn</h2>
                        <h4><a href="https://www.linkedin.com/in/sara-ezzeddin/" class="linkedin-link">Sara Ezzeddine</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function redirectToLogin() {
            window.location.href = '../php/login.php';
        }
    </script>
    
</body>
</html>