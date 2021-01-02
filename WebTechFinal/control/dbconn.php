<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "ecomport2";
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn, $table, $username, $password)
 {
	$result = $conn->query("SELECT * FROM ".$table." where email='".$username."' and password='".$password."'");
	return $result;
 }
 
 function CheckUser2($conn, $table, $username)
 {
	$result12 = $conn->query("SELECT * FROM ".$table." where email='".$username."'");
	return $result12;
 }
 
 function CheckUser3($conn, $table, $username)
 {
	$result20 = $conn->query("SELECT * FROM ".$table." where uid='".$username."'");
	return $result20;
 }
 
 function GetUserByStat($conn, $table, $stat)
 {
	$result2 = $conn->query("SELECT * FROM ".$table." where status='".$stat."'");
	return $result2;
 }
 
 function GetUser($conn, $table, $ut, $stat)
 {
	$result3 = $conn->query("SELECT * FROM ".$table." where utype!='".$ut."' and status='".$stat."'");
	return $result3;
 }
 
 function GetPost($conn, $table, $stat)
 {
	$result4 = $conn->query("SELECT * FROM ".$table." where status='".$stat."'");
	return $result4;
 }
 
 function GetPost2($conn, $table, $pid)
 {
	$result5 = $conn->query("SELECT * FROM ".$table." where pid='".$pid."'");
	return $result5;
 }
 
 
function insertData($conn, $table, $Name, $UserName, $Address, $DOB, $Gender, $UserType, $Pass)
{
	$query="INSERT INTO ".$table." (name, email, address, dob, gender, utype, password) VALUES('".$Name."', '".$UserName."', '".$Address."', '".$DOB."', '".$Gender."', '".$UserType."', '".$Pass."')";
	$sql = $conn->query($query);
	return $sql;
}

function insertPost($conn, $table, $title, $des, $uid, $price,$img)
{
	$query2="INSERT INTO ".$table." (title, description, uid, price, image) VALUES('".$title."', '".$des."', '".$uid."', '".$price."', '".$img."')";
	$sql2 = $conn->query($query2);
	return $sql2;
}

function updatebalance($conn, $table, $bal, $user)
{
	$query0 = "UPDATE ".$table." SET balance = '".$bal."' WHERE email = '".$user."'";
	$sql0 = $conn->query($query0);
	return $sql0;		
}

function updatebalance2($conn, $table, $bal, $user)
{
	$query33 = "UPDATE ".$table." SET balance = '".$bal."' WHERE uid = '".$user."'";
	$sql33 = $conn->query($query33);
	return $sql33;		
}

function updatebalance3($conn, $table, $bal, $user)
{
	$query99 = "UPDATE ".$table." SET balance = '".$bal."' WHERE uid = '".$user."'";
	$sql99 = $conn->query($query99);
	return $sql99;		
}

function updatepost($conn, $table, $bid, $pid)
{
	$query3 = "UPDATE ".$table." SET bid = '".$bid."' WHERE pid = '".$pid."'";
	$sql3 = $conn->query($query3);
	return $sql3;		
}

function updateU($conn, $table, $stat, $UID)
{
	$query4 = "UPDATE ".$table." SET status = '".$stat."' WHERE uid = '".$UID."'";
	$sql4 = $conn->query($query4);
	return $sql4;		
}

function updateP($conn, $table, $stat, $pid)
{
	$query4 = "UPDATE ".$table." SET status = '".$stat."' WHERE pid = '".$pid."'";
	$sql4 = $conn->query($query4);
	return $sql4;		
}

function updateUserData($conn, $table, $name, $email, $address, $pass, $uid)
{
	$query000 = "UPDATE ".$table." SET name = '".$name."', email = '".$email."', address = '".$address."', password = '".$pass."' WHERE uid = '".$uid."'";
	$sql000 = $conn->query($query000);
	return $sql000;		
}

function delUser($conn, $table, $UID)
{
	$query91 = "DELETE FROM ".$table." WHERE uid = '".$UID."'";
	$sql91 = $conn->query($query91);
	return $sql91;		
}

function delPost($conn, $table, $pid)
{
	$query911 = "DELETE FROM ".$table." WHERE pid = '".$pid."'";
	$sql911 = $conn->query($query911);
	return $sql911;		
}

function updateEmailRecord($conn, $table, $UserName, $UID)
{
	$query5 = "UPDATE ".$table." SET UserName = '".$UserName."' WHERE UID = '".$UID."'";
	$sql5 = $conn->query($query5);
	return $sql5;		
}

function updateEmail2Record($conn, $table, $UserName, $UID)
{
	$query6 = "UPDATE ".$table." SET UserName = '".$UserName."' WHERE UID = '".$UID."'";
	$sql6 = $conn->query($query6);
	return $sql6;		
}

function updateContactRecord($conn, $table, $ContactNo, $UID)
{
	$query7 = "UPDATE ".$table." SET ContactNo = '".$ContactNo."' WHERE UID = '".$UID."'";
	$sql7 = $conn->query($query7);
	return $sql7;		
}

function updateAdRecord($conn, $table, $Address, $UID)
{
	$query8 = "UPDATE ".$table." SET Address = '".$Address."' WHERE UID = '".$UID."'";
	$sql8 = $conn->query($query8);
	return $sql8;		
}

function updateDobRecord($conn, $table, $DOB, $UID)
{
	$query9 = "UPDATE ".$table." SET DOB = '".$DOB."' WHERE UID = '".$UID."'";
	$sql9 = $conn->query($query9);
	return $sql9;		
}

function updateGenderRecord($conn, $table, $Gender, $UID)
{
	$query10 = "UPDATE ".$table." SET Gender = '".$Gender."' WHERE UID = '".$UID."'";
	$sql10 = $conn->query($query10);
	return $sql10;		
}

function updateImageRecord($conn, $table, $profilepic, $UID)
{
	$query11 = "UPDATE ".$table." SET profilepic = '".$profilepic."' WHERE UID = '".$UID."'";
	$sql11 = $conn->query($query11);
	return $sql11;		
}

function updatePasswordRecord($conn, $table, $Pass, $UID)
{
	$query12 = "UPDATE ".$table." SET Password = '".$Pass."' WHERE UID = '".$UID."'";
	$sql12 = $conn->query($query12);
	return $sql12;		
}
	
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>