<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" href="style.css">
<script>
  function checkCurrentPassword()
{//document.getElementById("current_password").style.backgroundColor = "red";
    if (document.getElementById("current_password").value == "") 
    {
		document.getElementById("current_passwordErr").innerHTML = "Current Password Required";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else if(document.getElementById("current_password").value.length<8)
	{
		document.getElementById("current_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("current_passwordErr").innerHTML = "";
		document.getElementById("current_password").style.borderColor = "black";
	}
}

function checkNewPassword()
{//document.getElementById("new_password").style.backgroundColor = "red";
    if (document.getElementById("new_password").value == "") 
    {
		document.getElementById("new_passwordErr").innerHTML = "New Password Required";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else if(document.getElementById("new_password").value.length<8)
	{
		document.getElementById("new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("new_passwordErr").innerHTML = "";
		document.getElementById("new_password").style.borderColor = "black";
	}
}
function checkRetypeNewPassword()
{//document.getElementById("retype_new_password").style.backgroundColor = "red";
    if (document.getElementById("retype_new_password").value == "") 
    {
		document.getElementById("retype_new_passwordErr").innerHTML = "Retype Password Required";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value.length<8)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value != document.getElementById("new_password").value)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "Password Dosen't Match";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "";
		document.getElementById("retype_new_password").style.borderColor = "black";
	}
}
</script>
</head>
<body class="banner">
 <?php 

session_start();

if (isset($_SESSION['name'])){ require 'header2.php';}
else{header("location:Login.php");}

require 'Controller/confirmPasswordChange.php';
 ?>


<div class="div">
<form method="post">

 <fieldset>
  <legend>CHANGE PASSWORD</legend>

  <label for="current_password">Current Password :</label>
  <input type="password" id="current_password" name="current_password" onkeyup="checkCurrentPassword()" onblur="checkCurrentPassword()" onclick="checkCurrentPassword()">
  <span class="error" id="current_passwordErr"> <?php echo $current_passwordErr;?></span><hr>
  <br>

  <label for="new_password">New Password :</label>
  <input type="password" id="new_password" name="current_password" onkeyup=" checkNewPassword()" onblur=" checkNewPassword()" onclick=" checkNewPassword()">
  <span class="error" id="new_passwordErr"> <?php echo $new_passwordErr;?></span><hr>
  <br>

  <label for="retype_new_password">Retype New Password :</label>
  <input type="password" id="retype_new_password" name="retype_new_password" onkeyup="checkRetypeNewPassword()" onblur="checkRetypeNewPassword()" onclick="checkRetypeNewPassword()">
  <span class="error" id="retype_new_passwordErr"> <?php echo $retype_new_passwordErr;?></span><hr>
  <br>

  <input type="submit" value="Submit">

 </fieldset>
</form>
<?php
echo $message;
?>
</div> 
<?php require 'footer.php';?>
</body>
</html>