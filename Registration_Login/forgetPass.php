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
<!DOCTYPE html>
<head>
<title>Registration / Login Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Registration / Login form Responsive Widget, Login forms,Flat Pricing tables,Flat Drop downs  Sign up Web forms, Login sign up Responsive web Forms," />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body class="dashboard-page">
		<div class="main-grid" style="text-align: center; margin-top: 10%;">
			<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										<div class="input-info">
											<h3>Forget Password:</h3>
										</div>
										<div class="form-body form-body-info">
											<form  action="phpScript/forgetPass.php" method="post">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" name="email" placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required="" style="color:red;">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												</div>
												<div class="bottom">
													<center>
													<div class="form-group" >
														<input type="submit" value="Login"/>
													</div>
													<div class="clearfix"> </div>
												</div>
												</center>
											</form>
										</div>
									</div>
		</div>		
		<!-- footer -->
		<div class="footer">
			<center>
				<h4></br>
					<a href="../index.php" style="color:white;">
						Back To Home 
					</a>
				</h4>
			</center>
			<p style="color:red ;">© 2022 Designed by Cloud9<p>
		</div>
		<!-- //footer -->
		<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();				
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});
			});
		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="js/validator.min.js"></script>
		<!--//validator js-->
</body>
</html>
