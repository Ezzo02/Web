<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:login.php");
    }
    $jsonData = file_get_contents('gallery.json');

    $images = json_decode($jsonData, true);

    if ($images === null) {
        die('Error decoding JSON file');
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
                <li><a href="../php/home.php" class="link">Home</a></li>
                <li><a href="gallery.php" class="link active">Gallery</a></li>
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
    
    <div class="galleryinfo">

        <?php if (!empty($images)): ?>
        <?php foreach ($images as $image): ?>
            <a href="#<?php echo $image['id']; ?>" class="linkgallery">
            <div class="containergallery">
                <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>" class="my-img-ga" />
            </div>
            </a>

            <div class="lightboxga" id="<?php echo $image['id']; ?>">
            <a href="#" class="close-button">&times;</a>
            <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>" />
            </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p>No images found.</p>
        <?php endif; ?>
    </div>
    <script>
        function redirectToLogin() {
            window.location.href = '../php/login.php';
        }
    </script>
</body>
</html>
