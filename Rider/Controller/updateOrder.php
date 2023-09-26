<?php
if (isset($_POST['updateOrder'])) 
{
	$data['id'] = $_POST['id'];
	$data['location'] = $_POST['location'];
	
	if (isset($_POST['display'])) 
	{
		$data['display'] = "YES";
	}
	else
		$data['display'] = "NO";

  if (updateOrder($_GET['id'], $data)) 
  {
  	echo 'Successfully updated!!';
  	header('Location: displayOrder.php');
  }
}
?>