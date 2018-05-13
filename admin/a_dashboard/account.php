



<?php $currentPage1 = 'Admin'; ?>
<?php $currentPage2 = 'account'; ?>









<?php
	$d1="";	
	$d2="";	
	$x2="";	
	$x1="";	
	
	include('session.php');
	
	if(!isset($_SESSION['login_user'])){
		header("location: index.php"); // Redirecting To Home Page
	}
	
	function phpAlert($msg) {
		
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}

	
	
	if(isset($_POST['admin'])){
		
		$d1=$_POST['d1'];
		$d2=$_POST['d2'];
 
 
		 
		
		$sqlx ="UPDATE login SET password='$d2' where  password='$d1' "  ;
		
		
        try{
	 
            $update_Result = mysqli_query($conn, $sqlx);
			
            if($update_Result)
            {
                if(mysqli_affected_rows($conn) > 0)
                {
					
					
					phpAlert("Password Change Successful");
					
					}else{
					
					 phpAlert("Your Old Password Doesn't match");
				}
			}
			} catch (Exception $ex) {
			
            
		}
	}	
	

	
	
	if(isset($_POST['md'])){
		
		$x1=$_POST['x1'];
		$x2=$_POST['x2'];
 
 
		 
		
		$sqlx ="UPDATE login SET id='$x2' where  id='$x1' "  ;
		
		
        try{
	 
            $update_Result = mysqli_query($conn, $sqlx);
			
            if($update_Result)
            {
                if(mysqli_affected_rows($conn) > 0)
                {
					
					
					phpAlert("PIN Change Successful");
					
					}else{
					
					 phpAlert("Your Old PIN Doesn't match");
				}
			}
			} catch (Exception $ex) {
			
            
		}
	}		
	
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Refugee Caregiver Organization</title>
		 
			<link href="../../img/logosm3.jpg" rel="shortcut icon" type="image/png">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">     
		<link rel="stylesheet" href="animate/animate.css">	
		<link rel="stylesheet" href="animate/animate.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
		
	</head>
	
	
	
	<body  class="hold-transition skin-blue sidebar-mini skin-blue sidebar-mini wysihtml5-supported fixed">
		<div class="wrapper"scroll="no" style="overflow: hidden">
		

     <?php include('menu.php');?>			
			
			

			
			
			<!-- Main content ------------------------------------------------------------------------------------------------------------------------ ------------------------------------------>
	<div class="content-wrapper"style="background-color:rgb(53, 121, 160);">
				<div class="col-md-12 " >
					<div  class=" fixed">
						<div class="box box-info box box-solid box-default">
							
							<div class="box-header with-border">
								<div class="col-md-12"style="padding:0px;margin:0px;">
									<div class="col-md-3">
										
									</div>
									<div class="col-md-5">
										<div class="container hidden-xs">
 	
										</div>				
									</div>
									<div class="col-md-4">
 		
									</div>
									
									
									
								</div>
							</div>	
						</div>
					</div>
				</div>
				
										<div class="col-md-3 "  >
										</div>
										<div class="col-md-6 "  >
								<div  class=" fixed">
									<div class="box box-info box box-solid box-default">
										
										<div class="box-header with-border">
											<h3 class="box-title">You Can Change Your Password</h3>
										</div>
										
										<form class="form-horizontal"method="POST" action="account">
											<div class="box-body">
												<div class="form-group">
											
													<div class="col-sm-10">
														<input type="password"name="d1" ng-model="a1"  class="form-control"   placeholder="Old Password">
													</div>
												</div>																		
												<div class="form-group">
																							
													<div class="col-sm-10">
														<input type="password"name="d2" ng-model="a1" pattern=".{4,}"   required title="4 characters minimum"   class="form-control"   placeholder="New Password">
													</div>
												</div>													
											</div>
											<div class="box-footer">
												 
												<button type="submit" name="admin"     class="btn btn-info pull-right">Update</button>
											</div>
										</form>									
									</div>
								</div>
							</div>		
										<div class="col-md-3 "  >
										</div>	
			</div>
			
								
		
			
			
			
			<!--End Main content ----------------------------------------------------------------------------------------------------------------------------------------------------------------->				
			
			
			<aside class="control-sidebar control-sidebar-dark">
				<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
					<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
					<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
				</ul>
				
				<div class="tab-content">					
					<div class="tab-pane active" id="control-sidebar-home-tab">
						<h3 class="control-sidebar-heading">Recent Activity</h3>						
						<div class="box-header with-border ">							
						</div>
						<ul class="control-sidebar-menu">
							<div class="box-header with-border ">								
							</div>
							<li>
								<a href="javascript:;">
									<i class="menu-icon fa fa-birthday-cake bg-red"></i>									
									<div class="menu-info">
										<h4 class="control-sidebar-subheading">No Activity</h4>									
										<p>Will be 23 on April 24th</p>
									</div>
								</a>
							</li>
						</ul>				
					</div>
					<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
					<div class="tab-pane" id="control-sidebar-settings-tab">
						<form method="post">
							<h3 class="control-sidebar-heading">General Settings</h3>
							
							<div class="form-group">
								<label class="control-sidebar-subheading">
									Report panel usage
									<input type="checkbox" class="pull-right" checked>
								</label>								
								<p>
									Some information about this general settings option
								</p>
							</div>
						</form>
					</div>
				</div>
			</aside>
			

		

		<!-- jQuery 3 -->
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.min.js"></script>
		
	</body>
</html>