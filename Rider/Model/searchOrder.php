<!DOCTYPE html>
<html>
<head>
<title>Search OrderStatus</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="banner">
<?php 

session_start();
if (isset($_SESSION['name'])){require 'header2.php';}

else{header("location:Login.php");}
?>
<div class="div">
<fieldset style="width: 20%;">
<legend>SEARCH</legend>
<form method="post">
<input type="text" name="id" placeholder="<?php if(isset($_POST['id'])){echo $_POST['id'];}?>" required> <hr>
<input type="submit" name="search" value="Search By Id">
</form>
</fieldset>
</div>
<?php
require 'Controller/search.php';
require 'footer.php';
?>
</body>
</html> 