<?php
session_start();

include('dbconn.php');

$uid = "";
	if(isset($_GET['id'])){
		$uid= $_GET['id'];
        
		$connection = new db();
		$conobj=$connection->OpenCon();
		
		$MyQuery=$connection->delUser($conobj,"user", $uid);
		
		header("location:../views/Admin.php");
		

	}

?>