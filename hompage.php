<?php
    include('config.php');

    session_start();

    if (isset($_SESSION['auth'])) {

        $uid = $_SESSION['auth_user']['user_id']; 
     }
     else {
       echo "Not Logged In";
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WoW-Ji Matrimony website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/homepage.css">


</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="hompage.php">Home</a>
        <a href="register.php">Register</a>
        <a href="profile.php">Profile</a>
        <a href="bride-groom.php">Bride/Groom</a>
        <a href="contact.html">contact</a>
    </nav>
    <?php
    
        if(isset($_SESSION['auth'])) {
            ?>
            <form action=logoutcode.php method="POST">
                <button type="submit" name="logout_btn" class="btn">Logout</button>
            </form>
            <?php
        } else {
            ?>
            <a href="LoginF.php" class="btn">Login</a>
        <?php

        }

    ?>

    <div class="scroll-bar"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3 class="hello">Welcome To,</h3>
        <h3 class="name">W<span><i class="fa fa-heart" aria-hidden="true"></i></span>W-ji</h3>
        <p>Many have found their perfect match at WoW-Ji Matrimony!</p>
        <p>You too can find a life partner</p>
        <a href="register.php" class="btn">Register</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading">Our Statistics</h1>

    <div class="row">

        <div class="progress-bar">

            <h3 class="title">Our Profiles</h3>

            <div class="progress">
                <h3>Perfect Match<span>95%</span></h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>Verified Mobile Numbers<span>85%</span></h3>
                <div class="bar"><span></span></div>
            </div>
            <div class="progress">
                <h3>Visitors Growth<span>60%</span></h3>
                <div class="bar"><span></span></div>
            </div>

        </div>

        <div class="presonal-info">

            <h3 class="title">Our Achievements</h3>

            <div class="box-container">

                <div class="box">
                    <h3><span>WOW-ji Matrimony</span> - the pioneer in online matrimony, is the most trusted matrimony service for 
                        Many of Indians worldwide. WoW-Ji Matrimony has been recognised as the most trusted 
                        online matrimony service by the Brand Trust Report. We have also been featured in Limca Book of 
                        records for most number of documented marriages online. Our purpose is to build a better 
                        Bharat through happy marriages.</h3>
                    
                </div>
                
            </div>

        </div>

    </div>

    <div class="counter">

        <div class="box">
            <h3>>>3+</h3>
            <p>years of experience</p>
        </div>
        <div class="box">
            <h3>>>500+</h3>
            <p>happy clients</p>
        </div>
        <div class="box">
            <h3>>>100+</h3>
            <p>Verified Profile</p>
        </div>
        <div class="box">
            <h3>>>25+</h3>
            <p>awards won</p>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading">Happy Stories</h1>

    <div class="box-container">
        
        <div class="box">
            <span class="number">01</span>
            <h3>Srikant & Shikha</h3>
            <p>Thanks for all the sincere efforts your website provides to make it so easy to find a life partners.
               I also found my perfect soulmate on WoW-Ji.com
            </p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <span class="number">02</span>
            <h3>Nitin & Purnima</h3>
            <p>I am very thankful to WoW-Ji.com because I have got my soulmate Thank you very much WoW-Ji Team, 
                who guided me time to time regarding the best way to find my partner.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <span class="number">03</span>
            <h3>Gaurav & Nisha</h3>
            <p>We got married 4 months back and it's been a success story since. Thanks WoW-Ji.com for helping me to get my perfect soulmate.
                 Services are really excellent and user friendly.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <span class="number">04</span>
            <h3>Nitin & Jaya</h3>
            <p>I searched the profile and decided to meet in person, Then we met and decided that we can spend all our life together. 
                Thanks WoW-Ji team, for providing a platform where love stories are made.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <span class="number">05</span>
            <h3>Anurag & Shruti</h3>
            <p>Thanks a lot WoW-Ji.com your support was wonderful in choosing a perfect match. Thanks to WoW-Ji.com through which I met my life partner. 
                Services are really excellent and user friendly.</p>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <span class="number">06</span>
            <h3>Nishan & Sanchi</h3>
            <p>Our hearty thanks to WoW-Ji.com to help us in finding our soulmate. We met through WoW-Ji.com , but after meeting we realised that we are just made for each other. 
            Thanks WoW-Ji.com for helping me find and meet my soul partner.</p>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>


<!-- Footer-->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>About Us</h3>
            <p>We believe choosing a life partner is a big and important decision, and hence work towards giving a simple and secure matchmaking experience for you and your family. Each profile registered with us goes through a manual screening process before going live on site,
                 we provide superior privacy controls for Free, and also verify contact information of members.
                 You can register for Free and search according to your specific criteria, Regular custom mails and notifications make the process easier and take you closer to your Jeevansathi!</p>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Twitter</a>
        </div>

        <div class="box">
            <h3>Contact Us</h3>
            <div class="info">
                <i class="fas fa-phone"></i>
                <p>+91 123-456-7890 <br> +91 987-654-3210</p>
            </div>

            <div class="info">
                <i class="fas fa-envelope"></i>
                <p> WoW-Ji@gmail.com</p>
            </div>

            <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <p> Pune, India - 411017</p>
            </div>

        </div>

    </div>

    <h1 class="credit">&copy; copyright @2021 by <span>WoW-Ji.com</span> </h1>
</div>

<!-- Footer-->

<!-- custom js file link  -->
<script src="javascript/home.js"></script>


</body>
</html>