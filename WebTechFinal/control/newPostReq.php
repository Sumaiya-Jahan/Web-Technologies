<?php
include('dbconn.php');


$connection = new db();
$conobj=$connection->OpenCon();

$MyQuery=$connection->GetPost($conobj,"posts", "0");



if ($MyQuery->num_rows > 0) {
    echo '<table border="3"><tr><th>Title</th><th></th><th>Description</th><th></th><th>Price</th><th></th><th>Image</th></tr>';
    while($row = $MyQuery->fetch_assoc()) {
      echo '<tr><td>'.$row["title"].'</td><td></td><td>'.$row["description"].'</td><td></td><td>'.$row["price"].'</td><td></td><td>'.$row["image"].'</td><td></td><td><a href="../control/varifyPost.php?id='.$row['pid'].'">Varify</a></td><td><a href="../control/delPost.php?id='.$row['pid'].'">Delete</a></td></tr>';
    }
    echo '</table>';
  } else {
    echo "0 results";
  }
  