<?php
    session_start();
    include('dbconn.php');

    if(isset($_REQUEST['submit']))
    {

        $user = trim($_REQUEST['username']);
        $pass = trim($_REQUEST['password']);
		
		if(empty($user)||empty($pass))
		{
			$requireError="Please Enetr Email and Password to login";
		}else{

            $d = new db();
            $conn=$d->OpenCon();

			$mm=$d->CheckUser($conn, "user", $user, $pass);
			
			$row = $mm->fetch_assoc();
			
            $count = $d->CheckUser($conn, "user", $user, $pass)->num_rows;
			
			if($count > 0 ){

                $_SESSION['user'] = $user;
				
				if($row['status'] == 1){
					$u=$row['name'];

                if($row['utype'] == "seller"){
					setcookie('flag', $user, time()+(30*86400), '/');
                    header('location:../views/Post.php');
                }
                else if($row['utype'] == "customer"){
					setcookie('flag', $user, time()+(30*86400), '/');
                    header('location:../views/CustomerHome.php');
                }
                else if($row['utype'] == "admin"){
					setcookie('flag', $user, time()+(30*86400), '/');
                    header('location:../views/Admin.php');
                }
				}
				else{
					header('location:../views/login.php');
				}
            }
            else{
                echo "invalid username/password.";
            }
    

        }

    }else{
        //header('location:../views/Home.php');

    }
?>