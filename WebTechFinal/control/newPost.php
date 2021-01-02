<?php
    include('dbconn.php');
    session_start();

    if(isset($_REQUEST['submit'])){
        $uid            = trim($_REQUEST['id']);
        $title          = trim($_REQUEST['title']);
        $description    = trim($_REQUEST['description']);
        $price          = trim($_REQUEST['price']);
		$file = $_FILES['file'];
		
		$connection = new db();
		$conobj=$connection->OpenCon();

     
		
			
			$pid=uniqid();

            $fileName = $file['name'];
            $fileTempName = $file['tmp_name'];
            $fileSize = $file['size'];

            $fileExt = explode('.',$fileName);
            $fileActExt = strtolower(end($fileExt));

            $allowed = array('jpg','jpeg','png');

            if(in_array($fileActExt, $allowed)){
                if($fileSize < 1000000000){
                    $fileNameNew = 'post'.$pid.'.'.$fileActExt;
                    $fileDest = "../images/".$fileNameNew;

                    move_uploaded_file($fileTempName,$fileDest);
                    /*$sql = "update posts set image='{$fileNameNew}' where pid = '{$row['pid']}';";
                    mysqli_query($con, $sql);*/
					
					$MyQuery=$connection->insertPost($conobj,"posts", $title, $description, $uid, $price, $fileNameNew);

					if ($MyQuery==true){
                    header('location: ../views/Post.php');
					}
					else
					{
						header('location: ../views/Post.php');
					}
                    
                }
                else{
                    echo "file not uploaded";
                }
            }
            else{
                echo "error";
            }
        /*}
            }
            else{
                echo "error";
            }*/
     }
?>