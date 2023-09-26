<?php  
require_once '../Model/model.php';


if (isset($_POST['saveOrder'])) 
{
	
	$data['location'] = $_POST['location'];
	$data['orderstatus'] = $_POST['orderstatus'];
	if (isset($_POST['display'])) 
	{
		$data['display'] = "YES";
	}
	else
		$data['display'] = "NO";

  if (addOrder($data)) 
  {
  	echo 'Successfully added!!';
     header("location:http://localhost/Project/displayOrder.php");
  
  }
} 
else 
{
	echo 'You are not allowed to access this page.';
}
?>