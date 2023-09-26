<!DOCTYPE html>  
<html>  
<head>  
<title>Available Order</title> 
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
<script>
	function searchId(id)
{//document.getElementById("searchByID").style.backgroundColor = "red";
	if (document.getElementById("searchByID").value == "") 
    {
    	document.getElementById("txtHint").innerHTML =  "Information will be shown here...";
		document.getElementById("searchByIDErr").innerHTML = "ID Required";
		document.getElementById("searchByIDErr").style.color = "red";
		document.getElementById("searchByID").style.borderColor = "red";
		//document.getElementById("search").style.borderColor = "red";
	}
	else 
	{
		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
     	document.getElementById("txtHint").innerHTML = this.responseText;
     	}
  		};
    	xhttp.open("GET", "Controller/searchId.php?id="+id, true);
   		xhttp.send();
		document.getElementById("searchByIDErr").innerHTML = "";
		document.getElementById("searchByID").style.borderColor = "black";
		//document.getElementById("search").style.borderColor = "black";
	}
}
</script>
<link rel="stylesheet" href="style.css">
</head>  
<body class="banner">
<?php 

session_start();

if (isset($_SESSION['name'])){require 'header2.php';}
else{header("location:Login.php");}

require_once 'Controller/orderinfo.php';

$orders = fetchAllOrders();
?> 

<div class="div">
	<fieldset>

<div class="container">
	<div class="container-fluid, textCenter">
		<h1 style="text-align: center;">Search All Orders</h1>
		<h4>Enter Serial: 
			<input type="number" name="searchByID" id="searchByID" onkeyup="searchId(this.value)">
			<span id="searchByIDErr"></span>
		</h4>
	
	</div>
</div>

<div id="txtHint">
	<br>
<div>
<h3 style="text-align: center">Available Orders</h3>
<table id="tables">
     <thead style="color: red;">
		<tr>
			<th>Order Id</th>
			<th>Order Name</th>
			<th>Order Price</th>
            <th>Order Amount</th>
            <th>Order Location</th>
				
		</tr>
	</thead>
	<tbody>
		<?php foreach ($orders as $i => $order): ?>
			<tr>
			
				<td><?php echo $order['ID'] ?></td>
				<td><?php echo $order['Order Name'] ?></td>
				<td><?php echo $order['Order Price'] ?></td>
                <td><?php echo $order['Order Amount'] ?></td>
                <td><?php echo $order['Order Location'] ?></td>

			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</div>
</fieldset>
</div>
<br><br><br><br><br><br><br>

<?php require 'footer.php';?>
</body>  
</html>  