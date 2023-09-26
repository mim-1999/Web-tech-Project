<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>
<link rel="stylesheet" href="style.css">
<style>
.error {color: #FF0000;}
</style>
<script>  
		function validateform(){  
			var name=document.myform.name.value;  
			var password=document.myform.password.value;  
			var age=document.myform.age.value;  
			  
			if (name==null || name==""){  
			  alert("Name can't be blank");  
			  return false;  
			}
			else if (email==null || email==""){  
			  alert("Email can't be blank");  
			  return false;   
			} 
			
		}
		function checkEmpty() {
		  	if (document.myform.name.value = "") {
		  		alert("Name can't be blank");
		        return false;  
		  	}
		  }  
		function checkName() {
			if (document.getElementById("name").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}
			
        }
		function checkEmpty() {
		  	if (document.myform.email.value = "") {
		  		alert("Email can't be blank");
		        return false;  
		  	}
		  }   
		function checkEmail() {
			if (document.getElementById("email").value == "") {
			  	document.getElementById("emailErr").innerHTML = "Email can't be blank";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
			}else{
			  	document.getElementById("emailErr").innerHTML = "";
				document.getElementById("email").style.borderColor = "black";
			}
			
        }
		function checkPassword()
{//document.getElementById("confirm_password").style.backgroundColor = "red";
    if (document.getElementById("password").value == "") 
    {
		document.getElementById("passwordErr").innerHTML = "Password Required";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else if(document.getElementById("password").value.length<8)
	{
		document.getElementById("passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else if(document.getElementById("password").value != document.getElementById("password").value)
	{
		document.getElementById("passwordErr").innerHTML = "Password Dosen't Match";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("passwordErr").innerHTML = "";
		document.getElementById("password").style.borderColor = "black";
	}
}
		
        function checkConfirmPassword()
{//document.getElementById("confirm_password").style.backgroundColor = "red";
    if (document.getElementById("confirm_password").value == "") 
    {
		document.getElementById("confirm_passwordErr").innerHTML = "Retype The Same Password ";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("confirm_password").value.length<8)
	{
		document.getElementById("confirm_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("confirm_password").value != document.getElementById("password").value)
	{
		document.getElementById("confirm_passwordErr").innerHTML = "Password Doesn't Match";
		document.getElementById("confirm_passwordErr").style.color = "red";
		document.getElementById("confirm_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("confirm_passwordErr").innerHTML = "";
		document.getElementById("confirm_password").style.borderColor = "black";
	}
}

</script>  
</head>  
<body class="banner">
<?php 


if (isset($_SESSION['name'])){header("location:Welcome.php");}
else{  require 'header.php';}
require 'Controller/storeData.php';
?>
 
<div class="registration">
<fieldset style="width: 400px">
<legend>REGISTRATION</legend>                 
  <form name="form" method="post"> 
  <label for="name">Name :</label>
  <input type="text" id="name" name="name" onkeyup="checkName()" onblur="checkName()" onclick="checkName()">
  <span class="error" id="nameErr"> <?php echo $nameErr;?></span><hr>

  <label for="email">Email :</label>
  <input type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()" onclick="checkEmail()">
  <span class="error" id="emailErr"> <?php echo $emailErr;?></span><hr>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password" onkeyup="checkPassword()" onblur="checkPassword()" onclick="checkPassword()">
  <span class="error" id="passwordErr"> <?php echo $passwordErr;?></span><hr>

  <label for="confirm_password">Confirm Password :</label>
  <input type="password" id="confirm_password" name="confirm_password" onkeyup="checkConfirmPassword()" onblur="checkConfirmPassword()" onclick="checkConfirmPassword()">
  <span class="error" id="confirm_passwordErr"> <?php echo $confirm_passwordErr;?></span><hr>

  <fieldset style="width: 370px">
<legend> Gender</legend> 
  <input type="radio" id="male" name="gender" value="Male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="Female">
  <label for="female">Female</label> 
  <input type="radio" id="other" name="gender" value="Other">
  <label for="other">Other </label>  
  <span class="error"> <?php echo $genderErr;?></span><br>
  </fieldset><hr>

  <fieldset style="width: 370px">
  <legend>Date of Birthday</legend>
  <input type="date" placeholder="mm/dd/yyyy" name="dob" id="dob" onkeyup="checkdob()" onblur="checkdob()" onclick="checkdob()"> 
  <span class="error" id="dobErr"> <?php echo $dobErr;?></span>
  </fieldset><hr>

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>  
</fieldset>
</div>
<?php
echo $error;
echo "<br>";
echo $message;
echo "<br>";
?>
</div> 
<?php require 'footer.php';?>
</body>  
</html>  