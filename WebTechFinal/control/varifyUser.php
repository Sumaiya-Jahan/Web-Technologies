<?php
session_start();

include('dbconn.php');

$uid = "";
	if(isset($_GET['id'])){
		$uid= $_GET['id'];
        
		$connection = new db();
		$conobj=$connection->OpenCon();
		
		$MyQuery=$connection->updateU($conobj,"user", "1", $uid);
		
		header("location:../views/Admin.php");
		

	}

?>