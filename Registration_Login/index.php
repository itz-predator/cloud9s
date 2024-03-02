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
		<div class="main-grid">
			<div class="agile-grids">	
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Registration / Login Form</h2>
					</div>					
					<div class="forms-grids">
						<div class="forms3">
						<div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation register-form">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
										<h3>Registration Form :</h3>
									</div>
									<div class="form-body form-body-info">
										<form action="phpScript/registration.php" method="post"> 
											<div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" name="name" placeholder="Username" required="">
											</div>
											<div class="form-group has-feedback">
												<input type="email" class="form-control" name="email" placeholder="Email" data-error="That email address is invalid" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												<span class="help-block with-errors">Please enter a valid email address</span>
											</div>
											<div class="form-group">
											  <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" name="password" placeholder="Password" required="">
											  <span class="help-block">Minimum of 6 characters</span>
											</div>
											<div class="form-group">
											  <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" name="c_password" placeholder="Confirm password" required="">
											  <div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
												<div class="radio">
													<label>
													  <input type="radio" name="gender" required="" value="Female">
													  Female
													</label>
												</div>
												<div class="radio">
													<label>
													<input type="radio" name="gender" required="" value="Male">
													Male
													</label>
												</div>
											</div>
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="terms" data-error="Before you wreck yourself" required="">
														I have Read and Accept Terms and Conditions.
													</label>
													<div class="help-block with-errors"></div>
												</div>
											</div>											
											<center>
											<div class="form-group">
											<input type="submit" value="Submit"/>
											</center>			
											</div>
										</form>
									</div>
								</div>
							</div>							
							<div class="panel panel-widget agile-validation">
								<div class="validation-grids validation-grids-right login-form">
									<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										<div class="input-info">
											<h3>Login form :</h3>
										</div>
										<div class="form-body form-body-info">
											<form  action="phpScript/login.php" method="post">
												<div class="form-group has-feedback">
													<input type="email" class="form-control" name="Email" placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												</div>
												<div class="form-group">
													<input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword1" name="Password" placeholder="Password" required="">
												</div>
												<div class="bottom">
													<div class="form-group">
														<div class="checkbox">
															<label>
																<input type="checkbox" id="terms1" data-error="Before you wreck yourself" required="">
																Remember me
															</label>

															<div class="help-block with-errors"></div>
														</div>
													</div>	
													<br>
													<br>
													<br>												
													<center>
													<div class="form-group" >
														<input type="submit" value="Login"/>
													</div>
													<div class="clearfix"> </div>
												</div>
												</center>
												<a href="forgetPass.php" style="color:white;">Forget Password</a>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"> </div>
						</div>
					</div>
				</div>			
			</div>
		</div>		
		<!-- footer -->
		<div class="footer">
		<center><a href="../index.php"><h4 style="color:red;">Back To Home </h4></a></center>
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
