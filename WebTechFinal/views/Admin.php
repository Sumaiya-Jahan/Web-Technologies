<?php
include('../css/adminCss.php');
session_start();
if(isset($_SESSION['user'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		EcomPort - Everything you need in one place
	</title>
	
	<script>
function showrequser() {
  var stat= "0";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "../control/memberReq.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("stat="+stat);


}

function showalluser() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "../control/allUser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();


}

function showallpost() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "../control/allPost.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();


}

function showreqpost() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "../control/newPostReq.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();


}
</script>
</head>
<body>
<header>
	<nav>
		<div class="logo">
			<a href="Home.php">Ecom-Port</a>
		</div>
		<div class="nav1">
			<a href="../control/logout.php">Logout</a>
		</div>
	</nav>
	
	<div class="nav2">
		<input type="submit" value="New Member Requests" onclick="showrequser()"> 
		
		<input type="submit" value="All User" onclick="showalluser()"> 
		
		<input type="submit" value="New posts requests" onclick="showreqpost()"> 
		
		<input type="submit" value="All posts" onclick="showallpost()">
	</div>
<p id="mytext"></p>
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
<?php }
else{
	header("location: Home.php");
} ?>