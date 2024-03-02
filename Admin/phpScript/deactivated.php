<?php
	include'../../db.php';
	$id=$_REQUEST['uid'];
	$sql="UPDATE user set status=0 where id='$id'";
	$result=mysqli_query($con,$sql);
	if($result==true){
		header('location: ../deactivated_user.php?ins=1');
	}
	else{
		header('location: ../activated_user.php?error=0');	
	}
?>
