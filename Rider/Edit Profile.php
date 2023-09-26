<!DOCTYPE html>  
<html>  
<head>  
<title>Edit Profile</title> 
<link rel="stylesheet" href="style.css">
</head>  
<body class="banner">
<?php 

session_start();

if (isset($_SESSION['name'])){require 'header2.php';}
else{header("location:Login.php");}

require 'Controller/showData.php';
require 'Controller/storeData.php';
?> 

<div class="div">
<fieldset>
<legend>EDIT PROFILE</legend>                 
  <form method="post"> 
  <label for="name">Name :</label>
  <input type="text" id="name" name="name" value="<?php echo $name ?>">
  <span class="error"> <?php echo $nameErr;?></span><hr>

  <p>ID             :   <?php echo $id ?></p><hr>

  <label for="email">Email :</label>
  <input type="text" id="email" name="email" value="<?php echo $email ?>">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <label for="gender">Gender :</label>
  <input type="radio" id="male" name="gender" value="<?php echo $gender ?>">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="<?php echo $gender ?>">
  <label for="female">Female</label> 
  <input type="radio" id="other" name="gender" value="<?php echo $gender ?>">
  <label for="other">Other </label> 
  <span class="error"> <?php echo $genderErr;?></span>

  <hr>
  <label for="dob">Date of Birthday :</label>
  <input type="date" id="dob" name="dob" value="<?php echo $dob ?>">
  <span class="error"> <?php echo $dobErr;?></span>

  <hr>

<input type="submit" name="submit" value="Submit">
</form>  
</fieldset>
</div> 
<?php require 'footer.php';?>
</body>  
</html>  