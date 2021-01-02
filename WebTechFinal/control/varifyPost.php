<?php
session_start();

include('dbconn.php');

$pid = "";
	if(isset($_GET['id'])){
		$pid= $_GET['id'];
        
		$connection = new db();
		$conobj=$connection->OpenCon();
		
		$MyQuery=$connection->updateP($conobj,"posts", "1", $pid);
		
		header("location:../views/Admin.php");
		

	}

?>