
 
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
		
	</head>
	
	
	
	<body   >
		<div class="wrapper"scroll="no" style="overflow: hidden">
			
			
 	
			
			<!-- Main content ------------------------------------------------------------------------------------------------------------------------ ------------------------------------------>
		 
 
				
				<section class="content container-fluid"style="background-color:rgb(53, 121, 160);">								
					<div class="col-md-12" style="padding-top:20px;">
						<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">									
							<div class="row">
							
 
							
	
							<div class="col-md-12"style="background-color:#fff;">
															<div  class=" fixed">
									<div class="box box-info box box-solid box-default">
										<div class="box-header with-border">
											<h3 class="box-title">Currently Registered User (ALL)</h3>
										</div>
								</div>
							</div>
								<div class="box box-success ">								
										<table class="table table-bordered"style="width: 100%;">
											<tr>
												<th>userID</th>
												<th>userName</th>
												<th>Email</th>	
 
												<th>FirstName</th>
												<th>LastName</th>
												<th>Address</th>
												<th>City</th>
												<th>State/Region</th>
												<th>Zip code</th>
												<th>Country</th>
												
											</tr>
											<tr ng-repeat="x in names">
												<td>{{x.userID}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.userName}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.userEmail}}</td>
 
												<td  style=" text-overflow: ellipsis;">{{x.a1}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.a2}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.a3}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.a4}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.a5}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.a6}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.a7}}</td>

												 

												<td>
 
												</td>
											</tr>
										</table>
									
								</div>
 					
								
 							
								
							</div>
							
							
							</div>
							
						</div>
					</div>							
				</section>
			 
			<!--End Main content ----------------------------------------------------------------------------------------------------------------------------------------------------------------->				
			
 
			
			
			 
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
					$http.get("crypto/user2/display.php")
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