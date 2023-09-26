
<!DOCTYPE html>
<html>
<head>
<title>Edit Order</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="banner">
<?php 
session_start();

if (isset($_SESSION['name'])){require 'header2.php';}
else{header("location:Login.php");}

require_once 'Model/model.php';
require_once 'Controller/updateOrder.php';
if(isset($_GET['id']))
{
  $order = showOrder($_GET['id']);  
}
else
{
  header('Location: displayOrder.php');
}
?>
<form method="POST">
 <fieldset style="width: 15%;">
  <legend>EDIT ORDER</legend>

  <label for="id">Order ID</label><br>
  <input type="text" id="id" name="id" value="<?php echo $order['id'] ?>"><br>

  <label for="location">Order Location</label><br>
  <input type="text" id="location" name="location" value="<?php echo $order['Order Location'] ?>">
  <br>
  <label for="orderstatus">Order Status</label><br>
  <input type="text" id="location" name="location" value="<?php echo $order['Order Status'] ?>"><br>

  <hr> 

  <input type="checkbox" id="display" name="display"<?php if($order['Display']== "YES"){echo "checked";} ?>>
  <label for="display">Display</label><br>

  <hr>
  
  <input type="submit" name = "updateOrder" value="Save">

 </fieldset>
</form>
</body>
</html>