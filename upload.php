<?php 
session_start();

if (isset($_SESSION['auth'])) {

   $uid = $_SESSION['auth_user']['user_id']; 
    echo $uid;
}
else {
  echo "Not Logged In";
}

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "db_conn.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";


	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 1250000000000000000000000000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: register2.php?error=$em");
		}
		else{
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'Photos/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO test_db(id,image_url) 
				        VALUES('$uid','$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: hompage.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: register2.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: register2.php?error=$em");
	}

}else {
	header("Location: register2.php");
}