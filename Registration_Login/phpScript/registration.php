<?php
	include	'../../db.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$c_password=$_POST['c_password'];
	$gender=$_POST['gender'];
	$sql="SELECT * FROM user WHERE email='$email'";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	if(!$row){
		if($password==$c_password){
			$sql="INSERT INTO user(name,email,password,gender) VALUES('$name','$email','$password','$gender')";
			$result=mysqli_query($con,$sql);
			if($result==true) {
				$_SESSION['ins']="Your Registration Successfull Please Login!";
				header('location: ../index.php');
			} 
			else {
				$_SESSION['ins']="Your Registration Unsuccessfull Please try again!";
				header('location: ../index.php');
			}
		}
		else {
			$_SESSION['ins']="Your Confirm Password did not Match!";
			header('location: ../index.php');
		}
	}else{
		$_SESSION['ins'] = 'Email id is already exists.';
		header('location: ../index.php');
	}	
?>