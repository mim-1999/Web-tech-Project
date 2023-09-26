<!DOCTYPE html>
<html>  
<head>  
<title>Change Profile Picture</title>
<link rel="stylesheet" href="style.css">
</head> 
<body class="banner">
 <?php 
session_start();
if (isset($_SESSION['name'])){ require 'header2.php';}
else {header("location:Login.php");}
require 'Controller/pictureUpload.php';
?>

<div class="div">
<fieldset>
<legend>PROFILE PICTURE</legend>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
  <img class="proPic1" src="images/pic.png"<?php 
  if (isset($_SESSION['pic'])){echo $_SESSION['pic'];} 
  else{echo "pic.png";}
  ?>" alt="Profile Picture"> 
  <input type="file" name="fileToUpload" id="fileToUpload">
  <hr>
  <input type="submit" value="Submit" name="submit">
</form>
</fieldset>
</div> 
<?php require 'footer.php';?>
</body>
</html>