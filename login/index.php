<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();


if(isset($_POST['btn-login']))
{
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtupass']);
	
	if($user_login->login($email,$upass))
	{
		$user_login->redirect('../user');
	}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login </title>
	<link href="../photos/sm.png" rel="shortcut icon" type="image/png">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
				<link href="../my/css.css" rel="stylesheet" type="text/css">
	</head>
	
	<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
  <body id="login"class=" "style="background:#02b0e2">

		<div class="container">
		<div class="signup-form-container">
 
<?php 
		if(isset($_GET['inactive']))
		{
			?>
            <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
			</div>
            <?php
		}
		?>
        <form class="form-signin" method="post">
        <?php
        if(isset($_GET['error']))
		{
			?>
            <div class='alert alert-success'>
				<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Wrong Details!</strong> 
			</div>
            <?php
		}
		?>
			<form class="" method="post" >
				<div class="form-header">
					<h3 class="form-title"><i class="fa fa-user"></i><span class="glyphicon glyphicon-user"></span> Sign In</h3>
					
					<div class="pull-right">
						<h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
						</div>
					
				</div>
				
				<div class="form-body">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
							<input   id="email" type="text" class="form-control" autocomplete="on"  maxlength="50"placeholder="Email address"name="txtemail"autofocus="true"  required >
						</div> 
						<span class="help-block" id="error"></span>                     
					</div>					
									
 					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
							<input  type="password" id="name" class="form-control" placeholder="Password" name="txtupass" required">
						</div>
						<span class="help-block" id="error"></span>
					</div>
						<a href="fpass">Forgot password? </a>			
					</div>				
				
				<div class="form-footer">
					<button type="submit" class="btn btn-info" id="btn-signup"name="btn-login"><span class="glyphicon glyphicon-log-in"></span> Sign In</button>
										<a href="signup" style="float:right;" class="btn btn-large"> <span class="glyphicon glyphicon-tag"></span> Sign up   </a>
				</div>
				
			</form>
			
			
			
			
			
		</div> 
	</div> <!-- /container -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<script src="assets/jquery-1.12.4-jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery.validate.min.js"></script>
    <script src="assets/register.js"></script>
  </body>
</html>