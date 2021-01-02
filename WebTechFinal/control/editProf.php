<?php
    include_once('dbconn.php');

    if(isset($_REQUEST['update'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$ad = $_REQUEST['address'];
		$pass = $_REQUEST['password'];
        $uid = $_REQUEST['id'];

			
			$connection = new db();
			$conobj=$connection->OpenCon();
			
			$MyQuery=$connection->updateUserData($conobj,"user", $name, $email, $ad, $pass, $uid);

            
            if($MyQuery==true){

				
                
                header('location: ../views/Profileseller.php');
            }

         }
        else{
            echo "email address already exists";

        
    }
?>