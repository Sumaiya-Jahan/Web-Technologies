<?php
include('../css/homeCss.php');
include('../control/dbconn.php');
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
			<a href="login.php">Sign-In</a>
			
			or

			<a href="Register.php">Create Account</a>
		</div>
	</nav>
	
	<div class="nav2">
		<a href="Home.php">Home</a>
		
		<a href="About.php">About Us</a>

		<a href="Contact.php">Contact Us</a>
</div>

</header>
<?php

			$connection = new db();
			$conobj=$connection->OpenCon();
          
			$MyQuery=$connection->GetPost($conobj,"posts", "1");

            while($row = $MyQuery->fetch_assoc()){
                ?>
				<div class="container">
					<div class ="row">
						<div class="col-1">
							<h3><?php echo $row['title'];?></h3>
							<img src="../images/<?=$row['image']?>" alt="">
							<h4><?=$row['description']?></h4>
							<p>Price: <?=$row['price']?></p>
							<a href="../control/buy.php?pid=<?=$row['pid']?>">Buy</a>
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
	</body>
</html>

</div>
</html>