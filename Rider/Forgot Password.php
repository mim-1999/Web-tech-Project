<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<script>
    function checkEmail()
{//document.getElementById("email").style.backgroundColor = "red";
    if (document.getElementById("email").value == "") 
    {
        document.getElementById("emailErr").innerHTML = "Email can not be blank";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
    }
    else if(document.form.email.value.indexOf("@")<1||document.form.email.value.indexOf("@")+2>document.form.email.value.lastIndexOf(".")||document.form.email.value.lastIndexOf(".")+2>=document.form.email.value.length)
    {
        document.getElementById("emailErr").innerHTML = "Invalid Email Format";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
    }
    else
    {
        document.getElementById("emailErr").innerHTML = "";
        document.getElementById("email").style.borderColor = "black";
    }
}
</script>    
</head>
<body class="banner">

<?php 
session_start();
if (isset($_SESSION['name'])){header("location:welcome.php");}
else{require 'header.php';}
require 'Controller/savePassword.php';
?>

<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset>
  <legend>Forgot Password</legend>

  <label for="email">Enter Email :</label>
  <input type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()" onclick="checkEmail()">
  <span class="error" id="emailErr"> <?php echo $emailErr;?></span><hr>

  <input type="submit" value="Submit">
 </fieldset>
</form> 

<?php 
echo $msg;?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require 'footer.php';?>
</body>
</html>