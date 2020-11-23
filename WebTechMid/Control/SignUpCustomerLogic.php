<?php
include("dbconn.php");

if(isset($_REQUEST['signup']))
{
    $firstName=trim($_REQUEST['firstname']);

    $lastName=trim($_REQUEST['lastname']);

    $username=trim($_REQUEST['username']);

    $contact=trim($_REQUEST['contact']);
    $address=trim($_REQUEST['ad']);
    $dob=trim($_REQUEST['dob']);

    $gender=trim($_REQUEST['gender']);

    $img=$_FILES['profilepic'];

    $pass=trim($_REQUEST['password']);

    $retPass=trim($_REQUEST['retpass']);

    $regex="/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
	
	$uppercase = preg_match('@[A-Z]@', $pass);
	$lowercase = preg_match('@[a-z]@', $pass);
	$number    = preg_match('@[0-9]@', $pass);
	$specialChars = preg_match('@[^\w]@', $pass);
	
	$number2    = preg_match('@[0-9]@', $firstName);
	$specialChars2 = preg_match('@[^\w]@', $firstName);
	$number3    = preg_match('@[0-9]@', $lastName);
	$specialChars3 = preg_match('@[^\w]@', $lastName);
	
	$requireError="";
	$nameLengthError1="";
	$nameLengthError2="";
	$emailLengthError="";
	$emailError="";
	$contactError="";
	$passLengthError="";
	$passStrenthError="";
	$repassError="";
	$dojError="";
	$ppError="";
	$msg="";
	$msg2="";
	$nameCharError="";
	$nameCharError2="";

    if(empty($firstName)||empty($lastName)||empty($username)||empty($contact)||empty($address)||empty($dob)||empty($gender)||empty($img)||empty($pass)||empty($retPass))
    {
        $requireError="All The Fields are Required";
    }
	else if(strlen($firstName)>20)
	{
		$nameLengthError1="Input too long";
	}
	else if(strlen($lastName)>20)
	{
		$nameLengthError2="Input too long";
	}
	else if(strlen($contact)>14||strlen($contact)<11)
	{
		$contactError="Invalid Number";
	}
	else if(strlen($username)>40)
	{
		$emailLengthError="Input to long";
	}
	else if(strlen($pass)<6)
	{
		$passLengthError="Password shoud be atleast 6 char";
	}
	else if(preg_match($regex,trim($username))==false)
	{
		$emailError="Invalid Email";
	}
	else if(trim($pass)!=trim($retPass))
	{
		$repassError="Password does not match";
	}
	else if(!$uppercase || !$lowercase || !$number || !$specialChars)
	{
		$passStrenthError="Weak Password";
	}
	else if($number2 || $specialChars2)
	{
		$nameCharError="Name can not contain any special character";
	}
	else if($number3 || $specialChars3)
	{
		$nameCharError2="Name can not contain any special character";
	}
    else
    {
		$d=new db();
        $con = $d->OpenCon();
           
        $existUser="SELECT * FROM `activedirectory` WHERE `UserName`='.$username.'";
        $result=mysqli_query($con, $existUser);
        $count =mysqli_fetch_assoc($result);
       // echo($result);
        if(!empty($count["UserName"]))
        {
            echo("The user already exists");
        }
        else
        {
          
            $uid=uniqid();

            $fileName = $img['name'];
            $fileTempName = $img['tmp_name'];
            $fileSize = $img['size'];
            $fileNameNew='';
            $fileExt = explode('.',$fileName);
            $fileActExt = strtolower(end($fileExt));

            $allowed = array('jpg','jpeg','png');

            if(in_array($fileActExt, $allowed)){
                if($fileSize < 1000000000){
                    $fileNameNew = 'profile'.$uid.'.'.$fileActExt;
                    $fileDest = "../images/".$fileNameNew;

                    move_uploaded_file($fileTempName,$fileDest);
                   
                 
                    
                }
                else{
                    echo "file not uploaded";
                }
            }
            else{
                echo "file size erorr";
            }

				$insertUser="INSERT INTO `user`(`UID`, `UserName`, `FirstName`, `LastName`, `ContactNo`, `Address`, `UserTypeID`, `Gender`, `DOB`,`profilepic`)
             VALUES ('$uid','$username','$firstName','$lastName','$contact','$address','2','$gender','$dob','$fileNameNew')";
           
           $insertActiveDirectory="INSERT INTO `activedirectory`(`UID`, `UserName`, `Password`, `UserTypeID`)
            VALUES ('$uid','$username','$pass','2')";
           



             $UserQuery = mysqli_query($con, $insertUser);
            $ADQuery=mysqli_query($con,$insertActiveDirectory);
			
			if($UserQuery==False || $ADQuery==False)
			{
				$msg="User Exists!";
			}
			else
			{
				$msg2="Sign Up Complete!";
			}
		}

        }
    }




else
{
    var_dump($_REQUEST);
    //echo("unexpected request");
}