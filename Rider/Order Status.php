<!DOCTYPE html>
<html>
<head>
<title>Order Status</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="banner">
<?php 

session_start();

if (isset($_SESSION['name'])){require 'header2.php';}
else{header("location:Login.php");}



?> 
<form action="Controller/saveOrder.php" method="POST" enctype="multipart/form-data">
<div class="div">
 <fieldset style="width: 60% ,margin:20%">
  <legend>Status</legend>

  <label for="id">Order ID</label><br>
  <input style="width:400px;height:20px;" type="text" id="id" name="id"><br>

  <label for="location">Order Location</label><br>
  <input style="width:400px;height:20px;"  type="text" id="location" name="location"><br>

  <label for="orderstatus">Order Status</label><br>
  <select style="width:400px;height:20px;"  name="orderstatus" id="orderstatus">
				<option value="">Select</option>
				<option value="In transit">In transit</option>
				<option value="Out for delivery">Out for delivery</option>
				<option value="Delivered">Delivered</option>
			</select>

  <hr>

  <input type="checkbox" id="display" name="display">
  <label for="display">Display</label><br>

  <hr>
  
  <input type="submit" name = "saveOrder" value="Save"  >

 </fieldset>
</div>
<?php require 'footer.php';?>
</form>
</body>
</html>