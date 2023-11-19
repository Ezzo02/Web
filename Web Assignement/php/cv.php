<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
?>
 
 <!DOCTYPE html>
 <html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sara's Resume</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 </head>
 <body class="cv">
    <nav class="nav">
        <div class="nav-logo">
            <p>Hello</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="../php/home.php" class="link">Home</a></li>
                <li><a href="../php/gallery.php" class="link">Gallery</a></li>
                <li><a href="cv.php" class="link active">CV</a></li>
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

    <div class="main">
        <div class="left">
            <br>
            <div class="profile-img">
                <img src="../images/sara.jpg">
            </div>


            <div class="box1">
                <div class="heading">
                    <p>CONTACT</p>
                </div>
                <p class="p1"><i class="material-icons icons1">call</i>+96176080032</p>
                <p class="p1"><i class="material-icons icons1">email</i>saraezzeddin@outlook.sa</p>
            </div>


            <div class="box1">
                <div class="heading">
                    <p>LANGUAGES</p>
                </div>

                <p class="p1">
                    C++
                    <div class="skill-container">
                        <div class="skillc"></div>
                    </div>
                </p>

                <p class="p1">
                    Java
                    <div class="skill-container">
                        <div class="skilljava"></div>
                    </div>
                </p>

                <p class="p1">
                    Python
                    <div class="skill-container">
                        <div class="skillpython"></div>
                    </div>
                </p>
            </div>

            <div class="box1">
                <div class="heading">
                    <p>SKILLS</p>
                </div>

                <p class="p1">
                    Backend Development
                    <div class="skill-container">
                        <div class="skillbe"></div>
                    </div>
                </p>

                <p class="p1">
                    Problem Solving
                    <div class="skill-container">
                        <div class="skillps"></div>
                    </div>
                </p>

                <p class="p1">
                    Leadership
                    <div class="skill-container">
                        <div class="skillleader"></div>
                    </div>
                </p>
            </div>

            <div class="box1">
                <div class="heading">
                    <p>HOBBIES</p>
                </div>

                <div class="hobbies">
                    <i class="material-icons icons2">camera_roll</i>
                    <i class="material-icons icons2">sports_basketball</i>
                    <i class="material-icons icons2">volunteer_activism</i>
                    <i class="material-icons icons2">cake</i>
                    <i class="material-icons icons2">movie_edit</i>
                </div>
                
            </div>

        </div>


        <div class="right">
            <div class="name2">
                <h1>SARA EZZEDDINE</h1>
                <p>BACKEND DEVELOPER</p>
            </div>

            <div class="box2">
                <h2>ABOUT ME <i class="material-icons icons3">perm_identity</i></h2>
                <p class="p2">I am a senior student at LAU, passionately pursuing my Bachelor's degree in Computer Science. In addition to my academic journey, I proudly serve as a part-time backend developer at Murex, 
                    where I engage in crafting innovative solutions in the world of technology. 
                    My love for problem-solving extends beyond the workplace, as I am an avid competitive programmer, constantly honing my skills in algorithmic challenges and coding competitions. 
                    Outside of the digital realm, I am dedicated to making a positive impact on my community. 
                    I volunteer with the Red Cross, contributing my time and effort to humanitarian causes, and I also have the privilege of serving as a trainer in the youth sector, where I aim to inspire 
                    and empower the next generation of leaders. Through my diverse experiences, I strive to embrace every opportunity for growth and give back to the world that has shaped me.</p>
            </div>


            <div class="box2">
                <h2>EDUCATION <i class="material-icons icons3">border_color</i></h2>
                <p class="p3">2020-Now <span>BACHELOR'S IN COMPUTER SCIENCE</span></p>
                <p class="p2">
                    I am currently enrolled in the Bachelor's program in Computer Science at the Lebanese American University. 
                    This educational endeavor has been an exhilarating exploration of the digital realm, 
                    where I've delved into programming, algorithms, data structures, and various facets of computer science.
                </p>

                <p class="p3">2014-2020 <span>LEBANESE BACCALAUREATE IN LIFE SCIENCES</span></p>
                <p class="p2">
                    In my formative years at Al Bayader School, I honed my scientific skills and cultivated a deep appreciation for life sciences. 
                    This rigorous educational foundation instilled in me a strong sense of curiosity and problem-solving, qualities that continue to drive my pursuit of knowledge and innovation.
                </p>
            </div>


            <div class="box2">
                <h2>EXPERIENCE <i class="material-icons icons3">work</i></h2>
                <p class="p3">2023-Now <span>Developer at Murex</span></p>
                <p class="p2">
                    I currently hold a part-time position as a C++ Backend Developer at Murex, where I contribute to the development and optimization of the MX3 platform. 
                    My role involves enhancing backend components, collaborating with cross-functional teams, and addressing complex challenges to ensure the platform's performance and reliability.
                </p>
                <p class="p3">2023-2023 <span>Murex Internship</span></p>
                <p class="p2">
                    While interning at Murex, I had the opportunity to enhance the efficiency and agility of our development process by 
                    transitioning legacy collections in C++ to modern STL containers. 
                    This initiative resulted in improved performance and a more streamlined workflow.
                </p>
            </div>
        </div>


    </div>

    <script>
        function redirectToLogin() {
            window.location.href = '../index.php';
        }
    </script>
    
 </body>
 </html>

