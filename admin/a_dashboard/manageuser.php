



<?php $currentPage1 = 'Client'; ?>
<?php $currentPage2 = 'manageuser'; ?>









<?php
$rowcount1="";	
$rowcount2="";	
$rowcount3="";	
$b1="";	
$d1="";	
	include('session.php');
	
	if(!isset($_SESSION['login_user'])){
		header("location: index.php"); // Redirecting To Home Page
	}
	
	function phpAlert($msg) {
		
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	
	
									
								//Query to be executed;
								$qry1="select * from payment where p1>0";
								//Performs a query on the database;
								$result1=mysqli_query($conn,$qry1);
								//Gets the number of rows in a result;
								$rowcount1=mysqli_num_rows($result1);
								//Fetches all result rows as an associative array;														 
								//Query to be executed;
								
								//Query to be executed;
								$qry2="select * from payment where p2>0";
								//Performs a query on the database;
								$result2=mysqli_query($conn,$qry2);
								//Gets the number of rows in a result;
								$rowcount2=mysqli_num_rows($result2);
								//Fetches all result rows as an associative array;														 
								//Query to be executed;
								
								//Query to be executed;
								$qry3="select * from tbl_users ";
								//Performs a query on the database;
								$result3=mysqli_query($conn,$qry3);
								//Gets the number of rows in a result;
								$rowcount3=mysqli_num_rows($result3);
								//Fetches all result rows as an associative array;														 
								//Query to be executed;		
	
		if(isset($_POST['report'])){
		
		$b1=$_POST['b1'];


		 
		
		$sqlx ="UPDATE payment SET p1=p1+'7' where  userID='$b1' "  ;
		
		
        try{
	 
            $update_Result = mysqli_query($conn, $sqlx);
			
            if($update_Result)
            {
                if(mysqli_affected_rows($conn) > 0)
                {
					
					
					phpAlert("7 Days Reward Successful (R/I/U).");
					
					}else{
					        $bp1="7";
							$sqlp = "INSERT INTO payment (userID,p1) VALUES ('$b1','$bp1')";
							$update_Result = mysqli_query($conn, $sqlp); 
					phpAlert("7 Days Reward Successful (R/I/U).");
				}
			}
			} catch (Exception $ex) {
			
             
		}
	}
	if(isset($_POST['alert'])){
		
		$d1=$_POST['d1'];
 
 
		 
		
		$sqlx ="UPDATE payment SET p2=p2+'7' where  userID='$d1' "  ;
		
		
        try{
	 
            $update_Result = mysqli_query($conn, $sqlx);
			
            if($update_Result)
            {
                if(mysqli_affected_rows($conn) > 0)
                {
					
					
					phpAlert("7 Days Reward Successful (A/P).");
					
					}else{
					$bp2="7";
							$sqlp = "INSERT INTO payment (userID,p2) VALUES ('$b1','$bp2')";
							$update_Result = mysqli_query($conn, $sqlp); 
					 phpAlert("7 Days Reward Successful (A/P).");
				}
			}
			} catch (Exception $ex) {
			
            
		}
	}
		if(isset($_POST['noti'])){
		

 
 
		 
		
		$sqlx ="UPDATE tbl_users SET a15='seen' where  a15='unseen' "  ;
		
		
        try{
	 
            $update_Result = mysqli_query($conn, $sqlx);
			
            if($update_Result)
            {
                if(mysqli_affected_rows($conn) > 0)
                {
					
					
					
					
					}else{
					
					 
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
			<div class="content-wrapper"style="background-color:#ecf0f5;">
				<div class="col-md-12 " >
					<div  class=" fixed">
						<div class="box box-info box box-solid box-default">
							
							<div class="box-header with-border">
								<div class="col-md-12"style="padding:0px;margin:0px;">
									<div class="col-md-3">
										
									</div>
 
									<div class="col-md-4">
 			
									</div>
									
								</div>
							</div>	
						</div>
					</div>
				</div>
				
				<section class="content container-fluid"style="padding:0px;background-color:#ecf0f5;">								
					<div class="col-md-12" style="padding-top:20px;">
						<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">									
							<div class="row">
							
									<div class="col-md-12">
										<div class="col-md-4">
											<!-- small box -->
											<div class="small-box bg-aqua">
												<div class="inner">
													<h3><?php echo $rowcount3; ?></h3>
													
													<p>Total User</p>
												</div>
												<div class="icon">
													<i class="ion ion-bag"></i>
												</div>
											</div>
										</div>							
 										
 									
									</div>
							
	
							<div class="col-md-12"style="background-color:#fff;">
	 
		 
            <div class=" "style="padding: 0px;margin-bottom: 0px;">
                <iframe src="manageuser_iframe.php" width="100%" height="400px" frameborder="0" marginwidth='0' marginheight='0'></iframe>
            </div> 								
				<!--			<div class="col-md-5 "  >
								<div  class=" fixed">
									<div class="box box-info box box-solid box-default">
										
										<div class="box-header with-border">
											<h3 class="box-title"> (Reward-1)</h3>
										</div>
										
										<form class="form-horizontal"method="POST" action="manageuser">
											<div class="box-body">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">userID</label>												
													<div class="col-sm-10">
														<input type="text"name="b1" ng-model="a1"  class="form-control"   placeholder="Enter ...">
													</div>
												</div>																		
												
											</div>
											<div class="box-footer">
												 
												<button type="submit" name="report"     class="btn btn-info pull-right">Submit</button>
											</div>
										</form>									
									</div>
								</div>
							</div>							
								
							<div class="col-md-5 "  >
								<div  class=" fixed">
									<div class="box box-info box box-solid box-default">
										
										<div class="box-header with-border">
											<h3 class="box-title"> (Reward-2)</h3>
										</div>
										
										<form class="form-horizontal"method="POST" action="manageuser">
											<div class="box-body">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">userID</label>												
													<div class="col-sm-10">
														<input type="text" name="d1"   class="form-control"   placeholder="Enter ...">
													</div>
												</div>																		
												
											</div>
											<div class="box-footer">
												 
												<button type="submit" name="alert"     class="btn btn-info pull-right">Submit</button>
											</div>
										</form>									
									</div>
								</div>
							</div>	-->							
								
							</div>
							
							
							</div>
							
						</div>
					</div>							
				</section>
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
			
			
			<div class="control-sidebar-bg"></div>
		</div>
		
		<script>
			$(document).ready(function(){
				$("#myBtn").click(function(){
					$("#myModal").modal();
				});
			});
		</script>
		<script>  
			var app = angular.module("sa_app", []);
			app.controller("controller", function($scope, $http) {
				$scope.btnName = "Insert";
				$scope.insert = function() {
					
					if ($scope.a1 == null) {
						alert("Enter Your a Heading");
						}else if ($scope.a2 == null) {
						alert("Enter Your Tag");
						}else if ($scope.a3 == null) {
						alert("Enter Your Brief");
						} else if ($scope.a4 == null) {
						alert("Enter Your Details");
						} else {
						$http.post(
						"crypto/user/insert.php", {
							'a1': $scope.a1,
							'a2': $scope.a2,
							'a3': $scope.a3,
							'a4': $scope.a4,
							'a5': $scope.a5,
							'a6': $scope.a6,
							'a7': $scope.a7,
							 
						    'btnName': $scope.btnName,
							'id': $scope.id
							
						}
						).success(function(data) {
							alert(data);
							$scope.a1 = null;
							$scope.a2 = null;
							$scope.a3 = null;
							$scope.a4 = null;
							$scope.a5 = null;
							$scope.a6 = null;
							$scope.a7 = null;
						 
							$scope.btnName = "Insert";
							$scope.show_data();
						});
					}
				}
				$scope.show_data = function() {
					$http.get("crypto/user/display.php")
					.success(function(data) {
						$scope.names = data;
					});
				}
				$scope.update_data = function(a1, id, a2, a3, a4, a5, a6, a7) {
					
                 	$scope.a1 = a1;
					$scope.id = id;
					$scope.a2 = a2;
					$scope.a3 = a3;
					$scope.a4 = a4;
					$scope.a5 = a5;
					$scope.a6 = a6;
					$scope.a7 = a7;
					
					$scope.btnName = "Update";
				}
				$scope.delete_data = function(id) {
					if (confirm("Are you sure you want to delete?")) {
						$http.post("crypto/user/delete.php", {
							'id': id
						})
						.success(function(data) {
							alert(data);
							$scope.show_data();
						});
						} else {
						return false;
					}
				}
			});
		</script>  
		
 
		<!-- jQuery 3 -->
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.min.js"></script>
		
	</body>
</html>