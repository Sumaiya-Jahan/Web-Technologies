<?php
	session_start();
	include_once('../Control/dbconn.php');
	if(isset($_SESSION['user'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Profile</title>
  
</head>
<body>
    <?php
    $db=new db();
    $con =$db->OpenCon();
    $sql = "SELECT * FROM `user` WHERE `UserTypeID`=3";
    $getType="SELECT * FROM `usertype` WHERE `TypeID`=3";
    $type=mysqli_query($con,$getType);
    $userType=mysqli_fetch_assoc($type);
    
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        if($row['UserName'] == $_SESSION['user']){
            $uid = $row['UserName'];
    ?>
                    <form action="../View/SignOut.php">
	<table>
                        <tr>
                            <th>Name:</th>
                            <td><?=$row['FirstName']?> <?=$row['LastName']?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td><?=$row['UserName']?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Type:</th>
                            <td><?=$userType['TypeName']?></td>
                        </tr>
                        <tr>
                            <th>FirstName:</th>
                            <td><?=$row['FirstName']?></td>
                        </tr>

                        <tr>
                            <th>LastName:</th>
                            <td><?=$row['LastName']?></td>
                        </tr>
                        <tr>
                            <th>Address:</th>
                            <td><?=$row['Address']?></td>
                        </tr>
                        <tr>
                            <th>Contact:</th>
                            <td><?=$row['ContactNo']?></td>
                        </tr>
						<tr>
                            <th></th>
                            <td><img src="../images/<?=$row['profilepic']?>"></td>
                        </tr>
						<tr>
                            <th></th>
                            <td><input type="submit" name="" value="Signout"></td>
                        </tr>
                    </table>
					</form>
         
</body>
</html>
<?php
        }
    }
}
else{
header('location:Login.php');

}