<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
</style>
<script>  
		function validateform(){  
		var name=document.myform.name.value;  
		var password=document.myform.password.value;  
		  
		if (name==null || name==""){  
		  alert("Name can't be blank");  
		  return false;  
		}else if(password.length<6){  
		  alert("Password must be at least 6 characters long.");  
		  return false;  
		  }  
		}  
</script> 
</head>
<body class= "banner">
<body class="navbar">
<?php 
session_start();
if (isset($_SESSION['name'])){header("location:Welcome.php");}
else{require 'header.php';}
require 'Controller/LoginCheck.php';             
?>


<div>
<form name="myform" method="post" action="" onsubmit="return validateform()" >
<fieldset style="width: 420px">
<legend>LOGIN</legend>

  <label for="name">Name :</label>
  <input type="text" id="name" name="name" value="<?php if(isset($_COOKIE["name"])) { echo $_COOKIE["name"]; } ?>">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit"><a href="Forgot Password.php">Forgot Password?</a>
</fieldset>
</div>
 <?php require 'footer.php';?>
</form>
</body>
</html>