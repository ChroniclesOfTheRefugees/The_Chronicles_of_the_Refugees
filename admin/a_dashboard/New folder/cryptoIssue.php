



<?php $currentPage1 = 'Crypto'; ?>
<?php $currentPage2 = 'Issue'; ?>









<?php
	
		$rowcount1="";	
	include('session.php');
	
	if(!isset($_SESSION['login_user'])){
		header("location: index.php"); // Redirecting To Home Page
	}
	
	function phpAlert($msg) {
		
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	
										//Query to be executed;
								$qry1="select * from issue LIMIT 1, 18446744073709551615";
								//Performs a query on the database;
								$result1=mysqli_query($conn,$qry1);
								//Gets the number of rows in a result;
								$rowcount1=mysqli_num_rows($result1);
								//Fetches all result rows as an associative array;														 
								//Query to be executed;		
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<title>INFIX ICT SOLUTIONS</title>
		 
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
		
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css'>
		<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
		<link rel="stylesheet" href="../../css/style3.css">
		
		
	</head>
	
	
	
	<body  class="hold-transition skin-blue sidebar-mini skin-blue sidebar-mini wysihtml5-supported fixed">
		<div class="wrapper"scroll="no" style="overflow: hidden">
			
			
 	
			
			
			
			
			
			<!-- Main content ------------------------------------------------------------------------------------------------------------------------ ------------------------------------------>
			<div class="content-wrapper"style="background-color:#ecf0f5;">
				<section class="content container-fluid"style="padding:0px;background-color:#ecf0f5;">								
					<div class="col-md-12" style="padding-top:20px;">
						<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">									
						<body ng-controller="RegisterCtrl"  ;>	
							<div class="col-md-5 "style="margin-top:-30px;" >
								<div  class=" fixed">
									<div class="box box-info box box-solid box-default">
										
										<div class="box-header with-border">
											<h3 class="box-title">Crypto Alert Form</h3>
										</div>
										
										<form class="form-horizontal">
											<div class="box-body">		
 
							<div class="input-field col s6">
								<input id="last-name"  type="text"name="a4" ng-model="a4"  class="form-control  validate"  required>
								<label for="last-name">Full Name</label>
							</div>							<div class="input-field col s6">
								<input id="last-name"  type="text"name="a2" ng-model="a2"  class="form-control  validate"  required>
								<label for="last-name">Full Name</label>
							</div>							<div class="input-field col s6">
								<input id="last-name"  type="text"name="a3" ng-model="a3"  class="form-control  validate"  required>
								<label for="last-name">Full Name</label>
							</div>		
							
<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"style="padding:0;margin:0;"><input id="checkbox1" name="a1[0]"  ng-model="a1[0]" value="Graphics" type="checkbox"  >
	<label for="checkbox1">Graphics Design</label>
		</div>    
 										<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox2"   name="a1[1]" ng-model="a1[1]"  value="Web" type="checkbox"  >
											<label for="checkbox2">Web Development</label>
										</div>    
										
											</div>
											<div class="box-footer">
 												<button type="submit" name="insert" ng-click="insert()" value="{{btnName}}" class="btn btn-info pull-right">Submit</button>
											</div>									<button ng-disabled="form-register.$invalid" class="waves-effect waves-light btn done">
									<i class="material-icons left">done</i> Done
								</button>
										</form>									
									</div>
								</div>
							</div>
							</body>
							
							<div class="col-md-12"style="background-color:#fff;margin-top:-30px;">
								<div class="box box-success ">
 
									<div class="col-md-12">
										<table class="table table-bordered"style="width: 100%;">
											<tr>
												<th>ID</th>
												<th>Submit Date</th>
												<th>View</th>	
												<th>Header</th>																					
												<th>Edit</th>
												<th>Delete</th>
											</tr>
											<tr ng-repeat="x in names">
												<td>{{x.id}}</td>
												<td  style=" white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">{{x.a5}}</td>
												<td>{{x.a8}}</td>
												<td style="  white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 120px;">{{x.a1}}</td>												
												
												<td>
													<button class="btn btn-success btn-xs" ng-click="update_data( x.a1, x.id, x.a2, x.a3, x.a4 )">
														<span class="glyphicon glyphicon-edit"></span> Edit
													</button>
												</td>
												<td>
													<button class="btn btn-danger btn-xs" ng-click="delete_data(x.id )">
														<span class="glyphicon glyphicon-trash"></span> Delete
													</button>
												</td>
											</tr>
										</table>
									</div>
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
						"crypto/issue/insert.php", {
							'a1': $scope.a1,
							'a2': $scope.a2,
							'a3': $scope.a3,
							'a4': $scope.a4,
						    'btnName': $scope.btnName,
							'id': $scope.id
							
						}
						).success(function(data) {
							alert(data);
							$scope.a1 = null;
							$scope.a2 = null;
							$scope.a3 = null;
							$scope.a4 = null;
							$scope.btnName = "Insert";
							$scope.show_data();
						});
					}
				}
				$scope.show_data = function() {
					$http.get("crypto/issue/display.php")
					.success(function(data) {
						$scope.names = data;
					});
				}
				$scope.update_data = function(a1, id, a2, a3, a4) {
					
                 	$scope.a1 = a1;
					$scope.id = id;
					$scope.a2 = a2;
					$scope.a3 = a3;
					$scope.a4 = a4;
					
					$scope.btnName = "Update";
				}
				$scope.delete_data = function(id) {
					if (confirm("Are you sure you want to delete?")) {
						$http.post("crypto/issue/delete.php", {
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
		
		
		<script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js'></script>
<script  src="../../css/style3.js"></script>
		
	</body>
</html>