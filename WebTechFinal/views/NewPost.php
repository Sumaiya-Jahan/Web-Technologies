<?php
session_start();
include('../css/loginCss.php');
include_once('../control/dbconn.php');
if(isset($_SESSION['user'])){ 
?>
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
<?php

$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUser($conobj,"user", "admin", "1");
            while($row = $MyQuery->fetch_assoc()){
                if($row['email'] == $_SESSION['user']){
                    $uid = $row['uid'];
                }
            }
        ?>
<div class="login">
<form method="post" action="../control/newPost.php" enctype="multipart/form-data">
	<input type="text" name="id" value="<?=$uid?>" hidden></td>
    <input  type="text" name="title" placeholder="Title">
    <textarea  name="description" cols="70" rows="10" placeholder="Description"></textarea>
    <input  type="number" name="price" placeholder="Price">
	<br>
    Upload Image
	<input type="file" name="file" id="file">
	<input type="submit" name="submit" id="submit" value="Post">
</form>
</div>
</header>
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
<?php }else{
	header("location: Home.php");
} ?>