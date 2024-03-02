<?php
	include'../db.php';
	if(isset($_POST['email'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="SELECT  *  FROM admin WHERE email='$email' AND password='$password'";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)==1){
			header('location: ../Admin/index.php');
			exit();
		}
		else{
			
			echo "email and password is not correct";
			exit();
		}
	}
?>