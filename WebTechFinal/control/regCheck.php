<?php
include("dbconn.php");

if(isset($_REQUEST['submit']))
{

    $name=trim($_REQUEST['name']);

    $username=trim($_REQUEST['username']);

    $address=trim($_REQUEST['ad']);
	
    $dob=trim($_REQUEST['dob']);

    $gender=trim($_REQUEST['gender']);
	
	$utype=trim($_REQUEST['utype']);

    $pass=trim($_REQUEST['password']);

    $retPass=trim($_REQUEST['retpass']);

    $regex="/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
	
	$regex2="/^[a-zA-Z\s]+$/";
	
	$uppercase = preg_match('@[A-Z]@', $pass);
	$lowercase = preg_match('@[a-z]@', $pass);
	$number    = preg_match('@[0-9]@', $pass);
	$specialChars = preg_match('@[^\w]@', $pass);
	
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

    if(empty($name)||empty($username)||empty($address)||empty($dob)||empty($pass)||empty($retPass)||empty($gender)||empty($utype))
    {
        $requireError="All The Fields are Required";
    }
	else if(strlen($name)>20)
	{
		$nameLengthError1="Input too long";
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
	else if(preg_match($regex2,trim($name))==false)
	{
		$nameCharError="Name can not contain any special character";
	}
    else
    {
		


		
		
		$d=new db();
        $conn = $d->OpenCon();
           
		
		/*$stmt = $con->prepare("INSERT INTO user (UID, UserName, FirstName, LastName, ContactNo, Address, UserTypeID, Gender, DOB, profilepic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"); 
		$stmt->bind_param("ssssssssss", $uid, $username, $firstName, $lastName, $contact, $address, $ut, $gender, $dob, $fileNameNew);
		$stmt->execute();
		
		$stmt2 = $con->prepare("INSERT INTO activedirectory (UID, UserName, Password, UserTypeID) VALUES (?, ?, ?, ?)"); 
		$stmt2->bind_param("ssss", $uid, $username, $pass, $ut);
		$stmt2->execute();*/
		
		//$d->insertLoginData($conn, "activedirectory", $uid, $username, $pass, $ut);
		
		
		if($d->insertData($conn, "user", $name, $username, $address, $dob, $gender, $utype, $pass)==True)
		{
			header('location: ../views/login.php');
		}
		else
		{
			$msg="User Exists!";
			//header('location: ../views/Register.php');
		}

    }
}
else{
	//header('location: ../views/Home.php');
}
?>