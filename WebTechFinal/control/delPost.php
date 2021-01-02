<?php
session_start();

include('dbconn.php');

$pid = "";
	if(isset($_GET['id'])){
		$pid= $_GET['id'];
        
		$connection = new db();
		$conobj=$connection->OpenCon();
		
		$MyQuery=$connection->delPost($conobj,"posts", $pid);
		
		header("location:../views/Admin.php");
		

	}

?>