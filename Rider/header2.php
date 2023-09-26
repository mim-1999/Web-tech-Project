<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href='https://css.gg/log-out.css' rel='stylesheet'>

</head>

<body>

<h1 style="color:black; background-color: darkgrey; "><img src="images/logo.png" width="150" height="150">Urgent E-Pharma System </h1>	
<br><br>
<div class="right">
	<h2 style="background-color: darkgrey;"><b><?php echo "Logged in as Rider- ".$_SESSION['name'].""; ?></b><h2>
</div>

<div class="vertical-menu">
 <a href=""><i class='fas fa-bars'></i><b> Dashboard</b></a>
 <a href="Welcome.php"><i class="fa fa-fw fa-home"></i> Home</a>
 <a href="View Profile.php"><i class='far fa-user-circle'></i> View Profile</a>
 <a href="Edit Profile.php"><i class="fas fa-user-edit"></i> Edit Profile</a>
 <a href="Change Profile Picture.php"><i class='fas fa-file-image'></i> Change Profile Picture</a>
 <a href="Change Password.php"><i class="fa fa-key icon"></i> Change Password</a>
 <a href="ShowOrders.php"><i class='fas fa-shopping-cart'></i> Available Order</a>
 <a href="Order Status.php"><i class='fas fa-shipping-fast'></i> Order Status</a>
 <a href="Review.php"><i class='fa fa-star checked'></i> Review</a>
 <a href="Controller/Logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
 
<br>


</body>
</html>