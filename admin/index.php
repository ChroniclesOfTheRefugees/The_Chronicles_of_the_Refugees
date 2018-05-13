<?php
	include('login.php'); // Includes Login Script
	if(isset($_SESSION['login_user'])){
		header("location:a_dashboard/account.php"); // Redirecting To Profile Page
	}
?> 


<!DOCTYPE html>
<html lang="en">
	
	<head>
	<title>Admin</title>
			<link href="../photos/sm.png" rel="shortcut icon" type="image/png">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
	</head>
	
	<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
	
</head>
<body id="login"style="height: 10%;background-color:#3C8DBC;">
	
	<div class="container">
		<div class="signup-form-container">
			
			
			
			
			
			
			
			
			<form class=" " action="" method="post" role="form" class="contactForm lead">		
				<div class="form-header">
					<h3 class="form-title"><i class="fa fa-user"></i><span class="glyphicon glyphicon-user"></span> Admin</h3>
					
					<div class="pull-right">
						<h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
					</div>
					
				</div>
				
				
				
				<div class="form-body">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
							<input   id="email" type="text" class="form-control"   maxlength="50"placeholder="User Email"name="username" autofocus="true"  required >
						</div> 
						<span class="help-block" id="error"></span>                     
					</div>					
					
 					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
							<input  type="password" id="name" class="form-control" placeholder="Password" name="password" required">
						</div>
						<span class="help-block" id="error"></span>
					</div>
					
				</div> 
				
				
				<span style="padding-left:20px;padding-bottom:10px;color:orange;"><?php echo $error; ?></span>
				<div class="form-footer">
					<button type="submit" class="btn btn-info" id="btn-signup"name="submit" value=" Login "><span class="glyphicon glyphicon-log-in"></span> Sign In</button>
 
				</div>
				
 
				
			</form>  
			
			
		</div> 
	</div> <!-- /container -->
	<!-- extra_slide Desktop-->			   
	
	
	<!-- slide Desktop-->												 			
	
 
	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>



<!-- Core JavaScript Files -->
<script src="js/jquery.min.js"></script>	 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

<!--    <script type="text/javascript" src="js/jquery.js"></script> -->
<script type="text/javascript" src="js/main.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1680778521954588';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
		</body>
		
	</html>
