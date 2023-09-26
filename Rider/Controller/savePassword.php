<?php 
$emailErr = "";
$email = $msg ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  require 'Controller/checkemail.php';
  if (!empty($_POST["email"]) && $_POST['email']==$email) 
  {
    $msg ="<h3>We will sent you an Email</h3>";
  }
  else if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  }
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";
    }
    else
    {
      $emailErr ="Invalid Email";
      $email=""; 
    }
  }
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>