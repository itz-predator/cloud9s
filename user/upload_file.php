<?php 
	session_start();
	 if(isset($_SESSION['ins']))
    {
    ?>
        <script>
           alert("<?php echo $_SESSION['ins']; ?>");
        </script>

      <?php
      unset($_SESSION['ins']);
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Cloud Storage || Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body>
<div class="header" id="ban">
		<div class="container">
			<div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
			</div>
			<div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-7" id="link-effect-7">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li class="active act"><a href="upload_file.php">Upload File</a></li>
							<li><a href="view_file.php">View Uploaded File</a></li>
							
							<li><a href="phpScript/logout.php">Logout</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
	<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<h1><a href="index.php">Secure File Storage on Cloud Using Cryptography</a></h1>
				<p style="font-size:20px;"><label class="of"></label>Upload File<label class="on"></label></p>
			</div>
		</div>
	</div>
<!-- banner -->

<div>
	<br>
	<center>
		<br><h3><form class="from-group"action="phpScript/upload.php" method="post" enctype="multipart/form-data" >		  
		Key For Encryption:<input type="text" name="key" id="key"><br><br>
		  <h3>Select Any File to upload:</h3><br>		  
		  <input type="file" name="file" id="fileToUpload" ><br/>
		  <input type="submit" value="Upload" name="submit" style="color:red">		 
		</form></h3>
	</center>
	<br>
	<br>
</div>
	<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<div class="container">
					<p>© 2022 All rights reserved | Designed by Cloud9</p>
				</div>
			</div>
</body>
</html>