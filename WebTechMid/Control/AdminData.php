
<?php
    session_start();
    include('dbconn.php');

    if(isset($_REQUEST['signin']))
    {

        $user = trim($_REQUEST['username']);
            
            $db = new db();
            $conn=$db->OpenCon();
           // $sql = "select * from activedirectory where UserName='".$user."' and Password='".$pass."'";
            $dsql="SELECT * FROM `user` WHERE `UserName`='".$user."' AND `UserTypeID`=1 ";
			$result = mysqli_query($conn, $dsql);

	if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {
     $name=$row["UserName"];
  }
}
        }

?>