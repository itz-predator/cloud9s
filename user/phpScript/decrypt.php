<?php
include '../../db.php';
require 'lib/aes.php';
require 'lib/aesctr.php';
$id=$_SESSION["id"];
$file_id=$_REQUEST['file_id'];
//$key=$_REQUEST['key'];
$sql="SELECT * from file_upload where file_id='$file_id' and userId='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$key=$row['file_key'];
//$namaFile = file_get_contents($_FILES['file']['tmp_name']);
$namaFile = file_get_contents("uploads/".$row['file_name']);
$encFile = AesCtr::decrypt($namaFile,$key,128);
$enkrip = file_put_contents("uploads/".$row['file_name'], $encFile);
if ($enkrip) {
	$sql="UPDATE file_upload SET status='1' WHERE file_id='$file_id' and userId='$id'";	
	$result=mysqli_query($con,$sql);
	if($result==true){
		$_SESSION['ins']="File Successfully Decrypted And Ready For Downloading";
		header('location: ../view_file.php');
	}
	else{
		$_SESSION['ins']="Failed To decrypt File";
		header('location: ../view_file.php');
	}
}
else{
	$_SESSION['ins']="File is Not Dencrypted";
	header('location: ../view_file.php');
}
?>