<?php 
	include "db_conn.php"; 
	<?php
    session_start();

    if (isset($_SESSION['auth'])) {

        $uid = $_SESSION['auth_user']['user_id']; 
     }
     else {
       echo "Not Logged In";
     }
?>
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="register.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM test_db WHERE id=3";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
                <img src="Photos/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>
</body>
</html>
              