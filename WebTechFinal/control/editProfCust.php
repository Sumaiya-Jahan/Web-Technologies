<?php
    include_once('dbconn.php');

    if(isset($_REQUEST['update'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$ad = $_REQUEST['address'];
		$pass = $_REQUEST['password'];
        $uid = $_REQUEST['id'];
        // if(checkUniqueEmail($email) || ){
			
			$connection = new db();
			$conobj=$connection->OpenCon();
			
			$MyQuery=$connection->updateUserData($conobj,"user", $name, $email, $ad, $pass, $uid);
            /*$sql = "update users set uname = '{$uname}', password = '{$pass}', email = '{$email}' where u_id = {$uid}";
            $con = getConnection();

            $result = mysqli_query($con, $sql);*/
            
            if($MyQuery==true){
                /*$sql = "select * from users where u_id = {$uid}";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $_SESSION['email'] = $row['email'];*/
				
                
                header('location: ../views/Profile.php');
            }

        // }
        // else{
        //     echo "email address already exists";
        // }
        
    }
?>