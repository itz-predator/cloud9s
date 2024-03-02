<?php
	include'../../db.php';
	if(isset($_POST['Email'])){
		$email= mysqli_real_escape_string($con,$_POST['Email']);
		$password=$_POST['Password'];
		if(empty($email) || empty($password)){
		
		}else{
			$sql="SELECT  *  FROM user WHERE email='$email'";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)){
			    $row = mysqli_fetch_assoc($result);
				if($row['password']==$password){
					$_SESSION['id']= $row['id'];
					$_SESSION['ins']="Login Successfully";
					header('location: ../../user/index.php');
					exit();
				}else{
					$_SESSION['ins']="Password is invalid";
					header('location: ../index.php');
				}
			}else{
				$_SESSION['ins']="Email Id is invalid";
				header('location: ../index.php');
			}
				
		}
		
	}
?>