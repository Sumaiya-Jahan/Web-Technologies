<?php
$requireError="";
$nameLengthError1="";
$nameLengthError2="";
$emailLengthError="";
$emailError="";
$contactError="";
$passLengthError="";
$passStrenthError="";
$repassError="";
$msg="";
$msg2="";
$nameCharError="";
$nameCharError2="";
include("../Control/SignUpSellerLogic.php");

if (isset($_POST['cancel'])){
header("location: SignUp.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Sign-Up
	</title>
	<img src = "ecomPort.jpg">
<h1 style="text-align:center"> Sign-Up </h1>
</head>
<body>
<form name="registercustomer" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td>
				Firstname:
			</td>
			<td>
				<input type="name" name="firstname">  <?php echo $nameLengthError1; ?>  <?php echo $nameCharError; ?>
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				Lastname:
			</td>
			<td>
				<input type="name" name="lastname">  <?php echo $nameLengthError2; ?>  <?php echo $nameCharError2; ?>
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				Email:
			</td>
			<td>
				<input type="email" name="username">  <?php echo $emailLengthError; ?>  <?php echo $emailError; ?>
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				Mobile No:
			</td>
			<td>
				<input type="no" name="contact">  <?php echo $contactError; ?>
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				Address:
			</td>
			<td>
				<input type="ad" name="ad">
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
				<tr>
			<td>
				Date Of Birth:
			</td>
			<td>
				<input type="date" name="dob">
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		<tr>
			<td>
				Gender:
			</td>
			<td>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="other" checked>Other
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				Profile	Picture:
			</td>
			<td>
				<input type="file" name="profilepic" id="profilepic">
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				Shop Name:
			</td>
			<td>
				<input type="name" name="sname">
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				Password:
			</td>
			<td>
				<input type="password" id="password" name="password">  <?php echo $passLengthError; ?>  <?php echo $passStrenthError; ?>
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				Confirm Password:
			</td>
			<td>
				<input type="password" id="confirm_password" name="retpass">  <?php echo $repassError; ?>
			</td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
			</td>
			
			<td>
				<input type="submit" value="Signup" name="signup"> 
				<input type="submit" value="Cancel" name="cancel"> 
			</td>
		</tr>
	</table>
</form> 
<br>
<?php echo $requireError; ?>
<?php echo $msg; ?>
<?php echo $msg2; ?>
</body>
</html>