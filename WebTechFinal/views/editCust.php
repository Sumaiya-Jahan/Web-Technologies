<?php
session_start();
include('../css/cusHomeCss.php');
include('../css/HomeCss.php');
include('../control/dbconn.php');
if(isset($_SESSION['user'])){
	$uid=$_SESSION['user'];
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
			<a href="Profile.php">Profile</a>

			<a href="../control/logout.php">Logout</a>
		</div>
	</nav>
	
	<div class="nav2">
		<a href="CustomerHome.php">Home</a>

		<a href="yourPurchase.php">Your Purchase</a>
</div>
</header>
<?php

			$connection = new db();
			$conobj=$connection->OpenCon();
			
			$MyQuery=$connection->CheckUser2($conobj,"user", $uid);

            while($row = $MyQuery->fetch_assoc()){
            
        ?>
				<div class="container">
					<div class ="row">
						<div class="col-1">
					<form name="editProfile" method="post" action="../control/editProfCust.php" enctype="multipart/form-data">
                        <table>
                        <tr>
                            <td>Name </td>
                            <td><input type="text" name="name" id="name" value="<?=$row['name']?>"></td>
                        </tr>
                        <tr>
                            <td>Email </td>
                            <td><input type="email" name="email" id="email" value="<?=$row['email']?>"></td>
                        </tr>
                        <tr>
                            <td>Address </td>
                            <td><input type="address" name="address" id="address" value="<?=$row['address']?>"></td>
                        </tr>
						<tr>
                            <td>Password </td>
                            <td><input type="pass" name="password" id="password" value="<?=$row['password']?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input name="update" id="update" value="Update" type="submit"></td>
                        </tr>
                        </table>
                        <input type="text" name="id" value="<?=$row['uid']?>" hidden>
                    </form>
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
<?php }else{
	header("location: Home.php");
} ?>