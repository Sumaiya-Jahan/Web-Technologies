<?php
include('dbconn.php');

$Name = $_POST['name'];
$UserName = $_POST['uname'];
$Address = $_POST['ad'];
$DOB = $_POST['dob'];
$Gender = $_POST['gend'];
$UserType = $_POST['utype'];
$Pass = $_POST['pass'];


$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->insertData($conn, "user", $Name, $UserName, $Address, $DOB, $Gender, $UserType, $Pass);



if ($MyQuery == true) {
    echo "Registration Successful!";
  } else {
    echo "Could not Register";
  }