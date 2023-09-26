<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<link rel="stylesheet" href="style.css">
</head>
<body class= "banner">
    <body class = "navbar">

<?php
session_start();
if (isset($_SESSION['name']))
{require 'header2.php';}
else{require 'header.php';}
 ?>
 <br><br><br><br>
<h1 style="text-align: center;color:red;">Welcome to our Company</h1> 
<h3 style="text-align: center; color:blue; " >Ready to serve you immediately</h3>
<br><br><br><br><br><br><br><br>	
<?php require 'footer.php';?>

</body>
</html>