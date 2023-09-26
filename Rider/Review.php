
<!DOCTYPE html>
<html>
<head>
<title>Review</title>
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
require_once 'Controller/reviewinfo.php';

$reviews = fetchAllReviews();
?>

<div class="div">
<fieldset style="width:100%;">
<h3 style="text-align: center">Review</h3>
<table id="tables">
     <thead style="color: red;">
		<tr>
			<th>Order Id</th>
			<th>Review</th>
				
		</tr>
	</thead>
	<tbody>
		<?php foreach ($reviews as $i => $review): ?>
			<tr>
			
				<td><?php echo $review['id'] ?></td>
				<td><?php echo $review['Review'] ?></td>
            
            </tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
        </div>
</body>
</table>
</fieldset>
<?php require 'footer.php';?>
</body>
</html>