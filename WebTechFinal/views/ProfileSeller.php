<?php
	session_start();
	include('../css/HomeCss.php');
	include_once('../control/dbconn.php');
	if(isset($_SESSION['user'])){ 
	$user=$_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		EcomPort - Everything you need in one place
	</title>
</head>
<body>
<header>
	<nav>
		<div class="logo">
			<a href="Home.php">Ecom-Port</a>
		</div>
		<div class="nav1">
			<a href="ProfileSeller.php">Profile</a>

			<a href="../control/logout.php">Logout</a>
		</div>
	</nav>
	
	<div class="nav2">
		<a href="Post.php">Home</a>

		<a href="NewPost.php">New Post</a>
</div>

</header>
<?php

			$connection = new db();
			$conobj=$connection->OpenCon();
          
			$MyQuery3=$connection->CheckUser2($conobj,"user", $user);

            while($row3 = $MyQuery3->fetch_assoc()){
                ?>
				<div class="container">
					<div class ="row">
						<div class="col-1">
							<tr><h3>Name</h3></tr>
							<tr><?php echo $row3['name'];?></tr>
							<tr><h3>Email</h3></tr>
							<tr><?php echo $row3['email'];?></tr>
							<tr><h3>Address</h3></tr>
							<tr><?php echo $row3['address'];?></tr>
							<tr><h3>Date of Birth</h3></tr>
							<tr><?php echo $row3['dob'];?></tr>
							<tr><h3>Gender</h3></tr>
							<tr><?php echo $row3['gender'];?></tr>
							<tr><h3>Balance</h3></tr>
							<tr><?php echo $row3['balance'];?></tr>
							<br>
							<br>
							<br>
							<tr>
							<td><a href="editSeller.php">Edit Profile</a></td>
							</tr>
							<br>
							<br>
						</div>
					</div>
				</div>
				<?php
                
            }
        ?>
</body>

<div class="footer">
<footer class="footer-distributed">

			<div class="footer-left">
				<h3>About<span>EcomPort</span></h3>

				<p class="footer-company-name">Copyright &copy;ecomPort.com 2019-2020.</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>Ganda, Savar
						 A 5/36</span>
						Dhaka</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+8801937818192</p>
					<p>+8801910200871</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@eduonix.com">support@ecomPort.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the company</span>
					We are an ecommerce company, comitted to provide the best online  shopping experience.</p>
			</div>
		</footer>
		</div>
</html>
<?php }
else{
	header("location: Home.php");
} ?>