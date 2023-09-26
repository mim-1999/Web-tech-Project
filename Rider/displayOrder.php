
<!DOCTYPE html>
<html>
<head>
<title>Display Order Status</title>
<style>
#tables {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tables td, #tables th {
  border: 1px solid #ddd;
  padding: 8px;
  
}
tables, th, td {
  border: 1px solid black;
  padding: 8px;
}

#tables tr:nth-child(even){background-color: #f2f2f2;}

#tables tr:hover {background-color: #ddd;}

#tables th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<link rel="stylesheet" href="style.css">
</head>
<body class="banner">
<?php 

session_start();
if (isset($_SESSION['name'])){require 'header2.php';}

else{header("location:Login.php");} 

if (!isset($_POST['id'])) 
{
  require_once ('Model/model.php');
  $orders = showAllorders();
}
?>

<div class="div">
<fieldset style="width:100%;">
<legend>Display</legend>
<table id="tables">
<thead>
<tr>
<th>Order ID</th>
<th>Order Location</th>
<th>Order Status</th>

</tr>
</thead>
<body>
<?php 
foreach ($orders as $i => $order): 
if ($order['Display'] == "YES" || isset($_POST['id'])):
?>
<tr>

<td><?php echo $order['id'] ?></td>
<td><?php echo $order['Order Location'] ?></td>
<td><?php echo $order['Order Status'] ?></td>



 <?php endif; endforeach; ?>
</body>
</table>
</fieldset>
</body>
</html>