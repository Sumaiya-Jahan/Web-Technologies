<?php
    session_start();

    if(isset($_SESSION['user'])){
        include_once('dbconn.php');
        $pid = $_GET['pid'];
		$user=$_SESSION['user'];
		
		$connection = new db();
		$conobj=$connection->OpenCon();
          
		$MyQuery1=$connection->CheckUser2($conobj,"user", $user);
		$MyQuery2=$connection->GetPost2($conobj,"posts", $pid);
        //$con = getConnection();
        //$sql1 = "select * from users where email = '{$_SESSION['email']}'";
        //$sql2 = "select * from posts where p_id = {$pid}";

        //$result1 = mysqli_query($con, $sql1);
        //$result2 = mysqli_query($con, $sql2);
		while($row1 = $MyQuery1->fetch_assoc()) {
        //$row1 = mysqli_fetch_assoc($result1);
        $buyerID = $row1['uid'];
		$bBalance= $row1['balance'];
		}
		while($row2 = $MyQuery2->fetch_assoc()) {
        //$row2 = mysqli_fetch_assoc($result2);
        $sellerID = $row2['uid'];
		$sPrice= $row2['price'];
		}

        if($bBalance < $sPrice){
            echo "insufficient fund available";
        }
        else{
            $newBal = $bBalance - $sPrice;
			$MyQuery3=$connection->updatebalance($conobj,"user", $newBal, $user);
            /*$sql = "update users set balance = {$newBal} where email = '{$_SESSION['email']}'";
            mysqli_query($con, $sql);*/
			$MyQuery4=$connection->updatepost($conobj,"posts", $buyerID, $pid);
            /*$sql = "update posts set status = 3 and b_id = '{$buyerID}'  where p_id = {$pid}";
            mysqli_query($con, $sql);*/
			$MyQuery5=$connection->CheckUser3($conobj,"user", $sellerID);
            /*$sql = "select * from users where u_id = '{$sellerID}'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);*/
			while($row5 = $MyQuery5->fetch_assoc()) {
			$sBalance = $row5['balance'];
			}
            $sellerBal = $sBalance + $sPrice;
			$MyQuery5=$connection->updatebalance2($conobj,"user", $sellerBal, $sellerID);
            /*$sql = "update users set balance = {$sellerBal} where u_id = {$sellerID}";
            mysqli_query($con, $sql);*/

            header('location: ../views/YourPurchase.php');
        }
        
    }
	else{
		header('location: ../views/login.php');
	}
?>