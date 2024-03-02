<?php
	include	'../../db.php';
	require 'lib/aes.php';
	require 'lib/aesctr.php';
	$id=$_SESSION['id'];
	$sql="SELECT  *  FROM user WHERE id='$id'";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	$name=$row['name'];
	$email=$row['email'];
	$key = $_POST['key'];
    if (isset($_POST["submit"])) {
        $pname=$_FILES["file"]["name"];
        $tname=file_get_contents($_FILES["file"]["tmp_name"]);
        //$uploads='uploads/';
        $encFile = AesCtr::encrypt($tname, $key, 128);
        $enkrip = file_put_contents("uploads/".$pname, $encFile);
        //move_uploaded_file($tname,$uploads.$pname);
   
            
        $sql="INSERT INTO file_upload(userId,name,email,file_key,file_name)VALUE('$id','$name','$email','$key','$pname')";
        $result=mysqli_query($con, $sql);
        if ($result==true) {
            $_SESSION['ins']="File uploaded successfully";
            header('location: ../upload_file.php');
        } else {
            $_SESSION['ins']="Failed to Upload File";
            header('location: ../upload_file.php');
        }
    }
		
	

	
?>


