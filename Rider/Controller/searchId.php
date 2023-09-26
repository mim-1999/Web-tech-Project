<?php
$searchByID = "";
require '../Model/model.php';
$data=showInfo($_GET['id']);
//echo $_GET['id'];
If($data!=null)
{

$id = $data["ID"];
$medicine = $data["Order Name"];
$price = $data["Order Price"];
$amount=$data["Order Amount"];
$location=$data["Order Location"];




echo "<table class='table'>";
echo "<tr>";
echo "<th class='table-dark'>Order ID</th>";
echo "<td  scope='row'>" . $id . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Order Name</th>";
echo "<td  scope='row'>" . $medicine . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Order Price</th>";
echo "<td  scope='row'>" . $price . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Order Amount</th>";
echo "<td  scope='row'>" . $amount . "</td>";
echo "<tr>";
echo "<th class='table-dark'>Order Location</th>";
echo "<td  scope='row'>" . $location . "</td>";

echo "</table>";
}
else if($data==null)
{
	$searchByID="ID not Found";
	echo $searchByID;
}

?>