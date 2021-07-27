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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bg.css">
</head>
<body>

    
<header>

<div id="menu" class="fas fa-bars"></div>

<nav class="navbar">
    <a href="hompage.php">Home</a>
    <a href="register.php">Register</a>
    <a href="profile.php">Profile</a>
    <a href="view.php">Bride/Groom</a>
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

    
    <section class="prevent" id="prevent">

    <h1 class="heading"> Bride/Groom </h1>

        <div class="box-container">  
                <?php
                $con = mysqli_connect('localhost','root','','wow_ji');
                $ans = mysqli_select_db($con,"wow_ji");

                $sql = "SELECT * FROM test_db";
                $res = mysqli_query($con,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($images = mysqli_fetch_assoc($res)) {  
                ?>
                        
                <div class="alb">
                    <a href="">
                        <img src="Photos/<?=$images['image_url']?>"> 
                    </a>
                </div>
                        
                <?php } }?>
        </div>
    </section>

</body>

</html>