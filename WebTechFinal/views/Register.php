<?php
	$requireError="";
	$nameLengthError1="";
	$nameLengthError2="";
	$emailLengthError="";
	$emailError="";
	$passLengthError="";
	$passStrenthError="";
	$repassError="";
	$msg="";
	$msg2="";
	$nameCharError="";
include('../css/regCss.php');
include("../control/regCheck.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		EcomPort - Everything you need in one place
	</title>
	<script src="../js/regisCheck.js"></script>
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
<div class="register">
	<span>Registration</span>
	
	<form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" enctype="multipart/form-data">
		<input type="name" id="name" name="name" placeholder="Name"> <?php echo $nameLengthError1; ?> <?php echo $nameCharError; ?>
		<input type="email" id="username" name="username" placeholder="Email"> <?php echo $emailLengthError; ?> <?php echo $emailError; ?>
		<input type="ad" id="ad" name="ad" placeholder="Address">
		<br>
		<label>Date of birth:</label>
		<input type="date" id="dob" name="dob" placeholder="Date of Birth">
		<br>
		<br>
		<label>Gender:</label>
		<input type="radio" id="female" name="gender" value="female">Female
		<input type="radio" id="male" name="gender" value="male">Male
		<input type="radio" id="other" name="gender" value="other">Other
		<br>
		<br>
		<label>User Type:</label>
		<input type="radio" id="seller" name="utype" value="seller">Seller
		<input type="radio" id="customer" name="utype" value="customer">Customer
		<br>
		<br>
		<input type="password" id="password" name="password" placeholder="Password">
		<input type="password" id="retpass" name="retpass" placeholder="Confirm Password">
		<?php echo $passLengthError; ?> <?php echo $passStrenthError; ?> <?php echo $repassError; ?>
		<input type="submit" id="submit" name="submit" value="Signin">
		
		<?php echo $msg2;?>
		<?php echo $msg;?>

<p id="mytext"></p>
		
	</form>
</div>
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