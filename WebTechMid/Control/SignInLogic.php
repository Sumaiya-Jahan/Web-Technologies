<?php
    session_start();
    include('dbconn.php');

    if(isset($_REQUEST['signin']))
    {

        $user = trim($_REQUEST['username']);
        $pass = trim($_REQUEST['password']);
		//$rem = trim($_Request['remeber']);
        if($user == ""){
            echo "invalid or empty email..<br>";
        }else if($pass == ""){
            echo "invalid or empty password..";
        }else{
				setcookie('user', $user, time()+60*60*7);

            $db = new db();
            $conn=$db->OpenCon();

            $dsql = "select * from user where uid=(select uid from activedirectory where username='".$user."' and password='".$pass."')";

			
			$result = mysqli_query($conn, $dsql);
            $row = mysqli_fetch_assoc($result);
            

           
            
            $count = mysqli_num_rows($result);

			
            mysqli_close($conn);
			
			if($count > 0 ){

                $_SESSION['user'] = $user;

                if($row['UserTypeID'] == 1){
                    header('location:../View/ProfileAdmin.php');
                }
                else if($row['UserTypeID'] == 2){
                    header('location:../View/ProfileCustomer.php');
                }
                else if($row['UserTypeID'] == 3){
                    header('location:../View/ProfileSeller.php');
                }
            }
            else{
                echo "invalid username/password.";
            }
    

        }

    }else{
        header('location:../View/Home.php');

    }
?>