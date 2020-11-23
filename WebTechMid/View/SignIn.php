<?php
if (isset($_POST['cancel'])){
header("location: Home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Sign-In
	</title>
	<img src = "ecomPort.jpg">
<h1 style="text-align:center"> Sign-In </h1>
</head>
<body>
<form action="../Control/SignInLogic.php" method="post">
	<table align="center">
		<tr>
			<td>
				Email:
			</td>

			<td>
				<input type="email" name="username">
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
				<input type="password" name="password">
			</td>
		</tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>

			<td>
				<input type="checkbox" name="remember" value="1">Remeber me
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
				<input type="submit" value="Signin" name="signin"> 
				<input type="submit" value="Cancel" name="cancel"> 
				
			</td>
		</tr>
	</table>
</form> 
</body>
</html>
