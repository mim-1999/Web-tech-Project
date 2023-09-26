<!DOCTYPE html>  
<html>  
<head>  
<title>View Profile</title>
<link rel="stylesheet" href="style.css">
</head>  
<body class="banner">
<?php 

session_start();
if (isset($_SESSION['name'])){require 'header2.php';}

else{header("location:Login.php");} 

require 'Controller/showData.php';

?> 

<div class="div">
<fieldset>
<legend>PROFILE</legend>

<div class="justLeft">
  <p>Name           :   <?php echo $name ?></p><hr>
  <p>ID             :   <?php echo $id ?></p><hr>
  <p>Email          :   <?php echo $email ?></p><hr>
  <p>Gender         :   <?php echo $gender ?></p><hr>
  <p>Date of Birth  :   <?php echo $dob ?></p>
</div> 

<div class="justRight">
<img src="images/pic.png" alt="Profile Picture" style="width:55% ; right:20%"
  src="Uploads/<?php 
  if ($image!=null){echo $image; $_SESSION['pic']=$image;} 
  else{echo "images/pic.png";}
  ?>" alt="Profile Picture">
  <div class="textCenter"> <a href="Change Profile Picture.php" >Change Profile Picture</a>
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
<a href="Edit Profile.php">Edit Profile</a>
<a href="Change Password.php">Change Password</a>
</fieldset>
 
</div>


<?php require 'footer.php';?>
</body>  
</html> 