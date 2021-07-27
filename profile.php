<?php 
	
    session_start();

    if (isset($_SESSION['auth'])) {

        $uid = $_SESSION['auth_user']['user_id']; 
     }
     else {
       echo "Not Logged In";
     }
?>

<!DOCTYPE html>
<html>
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  h2{
    text-align: center;
  }
  img{
    height: 300px;
    width: 300px;
  }
  .alb {
    justify-content: center;
    align-items: center;
  }
</style>
<body>


<div class="w3-container">
  <h2>Profile</h2>
  <!-- <p>If you different hover colors, add w3-hover-<em>color</em> classes to each tr element:</p> -->
  <hr>
<div class="img">
  <?php 
          $con = mysqli_connect('localhost','root','','wow_ji');
          $ans = mysqli_select_db($con,"wow_ji");

          $sql = "SELECT * FROM test_db WHERE id= $uid";
          $res = mysqli_query($con,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
                <img src="Photos/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>
</div>
    <hr>

<table class="w3-table-all">

  <tr class="w3-hover-green">
    <tr class="w3-hover-green">
      <td>Name</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["first_name"]." ".$row["last_name"];
              }   
          }
        ?>
      </td>
    </tr>

    <tr class="w3-hover-blue">
      <td>Profile Type: </td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["profile_of"];
              }   
          }
        ?>
      </td>
    </tr>

    <tr class="w3-hover-red">
      <td>Gender</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["gender"];
              }   
          }
        ?>
      </td>
    </tr>

    <tr class="w3-hover-yellow">
      <td>Email id</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["email"];
              }   
          }
        ?>
      </td>
    </tr>

    <tr class="w3-hover-green">
      <td>Phone Number</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["ph_number"];
              }   
          }
        ?>
      </td>
    </tr>    

    <tr class="w3-hover-blue">
      <td>Address</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["address"];
              }   
          }
        ?>
      </td>
    </tr>    

    <tr class="w3-hover-red">
      <td>Mother Tongue</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["mother_tongue"];
              }   
          }
        ?>
      </td>
    </tr>

    <tr class="w3-hover-yellow">
      <td>Date Of Birth</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["dob"];
              }   
          }
        ?>
      </td>
    </tr>

    <tr class="w3-hover-green">
      <td>Religion</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["religion"];
              }   
          }
        ?>
      </td>
    </tr>


    <tr class="w3-hover-blue">
      <td>State</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["state"];
              }   
          }
        ?>
      </td>
    </tr>

    <tr class="w3-hover-red">
      <td>City</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans)
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["city"];
              }   
          }
        ?>
      </td>
    </tr>
    <tr class="w3-hover-yellow">
      <td>PinCode</td>
      <td>
        <?php
          
          $con = mysqli_connect('localhost','root','','wow_ji');
          
          $ans = mysqli_select_db($con,"wow_ji");
          if(!$ans) 
          {
              die("<script>alert('Woops! Error connecting to database.')</script>");
          }
      
          $sql="SELECT * FROM  register where id = $uid";
      
          $result=$con->query($sql);
      
          if($result->num_rows>0)
          {
              while($row=$result->fetch_assoc())
              {
                  echo $row["pincode"];
              }   
          }
        ?>
      </td>
    </tr>


  </table>
</div>

</body>
</html> 