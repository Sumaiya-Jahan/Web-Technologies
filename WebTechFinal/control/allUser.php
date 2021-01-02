<?php
include('dbconn.php');


$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetUser($conobj,"user", "admin", "1");



if ($MyQuery->num_rows > 0) {
    echo '<table border="3"><tr><th>Name</th><th></th><th>Email</th><th></th><th>Address</th><th></th><th>Date of Birth</th><th></th><th>Gender</th><th></th><th>User Type</th></tr>';
    while($row = $MyQuery->fetch_assoc()) {
      echo '<tr><td>'.$row["name"].'</td><td></td><td>'.$row["email"].'</td><td></td><td>'.$row["address"].'</td><td></td><td>'.$row["dob"].'</td><td></td><td>'.$row["gender"].'</td><td></td><td>'.$row["utype"].'</td><td></td><td><a href="../control/delUser.php?id='.$row['uid'].'">Delete</a></td></tr>';
    }
    echo '</table>';
  } else {
    echo "0 results";
  }