<?php
if (isset($_POST['cancel'])){
header("location: Home.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<img src = "ecomPort.jpg">
</head>
<header>
		<h1>
		<nav>
			<table>
			<h1>
				<tr>
					Sign Up For
				</tr>
				<tr>
				</tr>
				<tr>
				</tr>
				<tr>
				</tr>
				<tr>
					<td>
						<a href="SignUpCustomer.php">Customer</a>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
					</td>
					<td>
						<a href="SignUpSeller.php">Seller</a>
					</td>
				</tr>
			</table>
		</nav>
		</h1>
</header>
<body>
<form action="" method="post">
	<table>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Cancel" name="cancel"> 
				
			</td>
		</tr>
	</table>
</form> 
</body>
</html>