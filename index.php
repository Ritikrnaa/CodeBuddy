<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ</title>
    <!--Link for styleSheet-->
    <link rel="stylesheet" href="style.css">
    <!--Link for javascript-->
    <script src="script.js"></script>
    <!--Link for Fontawesome-->
    <script src="https://kit.fontawesome.com/d413c7d05f.js" crossorigin="anonymous"></script>
    <!--Link for aos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <?php
    require "include/navbar.php";
    ?>
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Welcome to the</div>
                <div class="text-2">Code<span>Buddy</span></div>
                <div class="text-3">Where you can find 
                    <a href="" class="typewrite" data-period="2000" data-type='[ "Notes.", "Codes.", "Previous year papers." ]'></a>
                </div>
            </div>        
        </div>
    </section>
    <section class="about" id="about">
        <div class="max-width">
            <!-- <div class="img1">--><img src="img/and.png" alt="" class="img11"><!--</div> -->
            <div class="about-content" data-aos="slide-left" data-aos-offset="200" data-aos-duration="2000">
                <div class="text">About Us</div>
                <div class="text1">We are an organisation, which provide you with all the resources you need to learn and excel you examination like notes, popular coding questions and previous year question papers.</div>
            </div>
        </div>
    </section>
    <section class="Services" id="services">
        <div class="max-width">
            <div class="text"><center>Services</center></div>
            <div class="services-info" >
                <div class="content1"><a href="notes.php"><img src="img/notes.jpg" alt="" class="img"><div class="text1"><center>Notes</center></div></a></div>
                <div class="content1"><a href="login.php"><img src="img/code.jpg" alt="" class="img"><div class="text1"><center>Codes</center></div></a></div>
                <div class="content1"><a href=""><img src="img/paper.jpg" alt="" class="img"><div class="text1"><center>Previous year papers</center></div></a></div>
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <div class="max-width">
            <div class="team-info">
                <div class="text">Team</div>
                <img src="img/profile.jpg" alt="" class="profile-pic">
                <div class="profile-name">Ritik Rana</div>
                <div class="profile-pro">Website Developer</div>
                <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <div class="skills"></div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="max-width">
            <div class="contact-form">
                <div class="text">Contact Us</div>
                <div class="social-links">
                    <a href="" class="social"><i class="fa-brands fa-facebook-square"></i>&emsp;Facebook</a>
                    <a href="" class="social"><i class="fa-brands fa-twitter-square"></i>&emsp;Twitter</a>
                    <a href="" class="social"><i class="fa-brands fa-instagram"></i>&emsp;Instagram</a>
                </div>
                <form action="put">
                    <p class="form-content">Name:</p>
                    <input type="text" name="name" class="input"><br><br>
                    <p class="form-content">Email:</p>
                    <input type="email" name="email" id="email" class="input"><br><br>
                    <p class="form-content">Message:</p>
                    <textarea name="message" id="" cols="38" rows="100"></textarea><br><br>
                    <input type="submit" value="Submit" class="submit">
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="max-width">
            <center>Created By : Ritik Rana&emsp;&#169;&emsp;All rights reserved</center>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>