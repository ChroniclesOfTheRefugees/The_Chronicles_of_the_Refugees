



<?php $currentPage1 = 'Career'; ?>
<?php $currentPage2 = 'Career'; ?>









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
								$qry1="select * from alert LIMIT 1, 18446744073709551615";
								//Performs a query on the database;
								$result1=mysqli_query($conn,$qry1);
								//Gets the number of rows in a result;
								$rowcount1=mysqli_num_rows($result1);
								//Fetches all result rows as an associative array;														 
								//Query to be executed;	
	
	
	if(isset($_POST['send'])){
		
		$s1=$_POST['s1'];
		$s2=$_POST['s4'];
		 
		 
								 
								//Query to be executed;
								$qry7="select * from tbl_users, payment  where tbl_users.userID=payment.userID AND payment.p2>0 ";
								//Performs a query on the database;
								$result7=mysqli_query($conn,$qry7);
								//Gets the number of rows in a result;
								$rowcount7=mysqli_num_rows($result7);
								//Fetches all result rows as an associative array;
								$row7 = mysqli_fetch_all($result7,MYSQLI_ASSOC);
								//Iterating each row;
								for($i=$rowcount7-1;$i>=0;$i--)
								{
							     $contact=$row7[$i]['userEmail'];
								 $use=$row7[$i]['userName'];
								 phpAlert( $contact);
								 $subject = 'Crypto Alert Notification';
                              
								 
								 $message = "					
									Hello $use,
									<br /><br />
									A new Crypto Alert is added 
									 
									 <br /><br />
									 $s1
									 <br /><br />
									 $s2
									 <br /><br />
									<a href='http://www.matsolutionsinc.com/crypto_a'>Click here for goto Page</a>
									<br /><br />
									Thanks.";

								require_once('../../login/mailer/class.phpmailer.php');
								$mail = new PHPMailer();
								$mail->IsSMTP(); 
								$mail->SMTPDebug  = 0;                     
								$mail->SMTPAuth   = true;                  
								$mail->SMTPSecure = "ssl";                 
								$mail->Host       = "mail.matsolutionsinc.com";      
								$mail->Port       = 465;             
								$mail->AddAddress($contact);
								$mail->Username="support@matsolutionsinc.com";  
								$mail->Password="135host";            
								$mail->SetFrom('support@matsolutionsinc.com','MAT Solutions Inc');
								$mail->AddReplyTo("support@matsolutionsinc.com","MAT Solutions Inc");
								$mail->Subject    = $subject;
								$mail->MsgHTML($message);
								$mail->Send();
													
								}		 
	}
		
	
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<title>MAT Solutions Inc</title>
		 
			<link href="../../photos/sm.png" rel="shortcut icon" type="image/png">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/table.css">
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
									<div class="col-md-5">
										<div class="container hidden-xs">
											<div class="col-md-3">
												<button type="submit" id="myBtn"      class="btn btn-info pull-right">File Manager</button>
											</div>
											<!-- Modal -->
											<div class="modal fade" id="myModal" role="dialog" >
												<div class="modal-dialog"style="height:0px;width:1000px;">    
													<!-- Modal content-->
													<div class="modal-content"style="height:550px;">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">File Manager of cryptoReport</h4>
														</div>
														<div class="modal-body"style="height:430px;">
															<iframe src="uploads/report" width="100%" height="100%" frameborder="0" allowfullscreen overflow-x='hidden' overflow-y='hidden' marginwidth='0' marginheight='0'></iframe>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													</div>     
												</div>
											</div> 	
										</div>				
									</div>
									<div class="col-md-4">
										<ol class="breadcrumb"style="   margin-bottom: 0px; ">
											<!-- Notifications Menu -->
											
											<li onclick="window.print();"><a href="#"><i class="fa fa-print"></i> Print</a></li>					
										</ol>			
									</div>
									
								</div>
							</div>	
						</div>
					</div>
				</div>
						
				<section class="content container-fluid"style="padding:0px;background-color:#ecf0f5;">								
					<div class="col-md-12" style="padding-top:20px;">
						<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">									
							
							<div class="col-md-5 "style="margin-top:-30px;" >
							<div class="col-md-12 "style="" >
								<div  class=" fixed">
									<div class="box box-info box box-solid box-default">
										
										<div class="box-header with-border">
											<h3 class="box-title">Crypto Alert Form</h3>
										</div>
										
										<form class="form-horizontal">
											<div class="box-body">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Heading</label>												
													<div class="col-sm-10">
														<input type="text"name="a1" ng-model="a1"  class="form-control"   placeholder="Enter ...">
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>											
													<div class="col-sm-10">
														<input type="text" name="a2" ng-model="a2" class="form-control"  placeholder="Enter ...">
													</div>
												</div>											
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Brief</label>												
													<div class="col-sm-10">
														<textarea class="form-control" name="a3"    ng-model="a3" rows="2" placeholder="Enter ..."></textarea>
													</div>
												</div>											
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Details</label>												
													<div class="col-sm-10">
														<textarea class="form-control" name="a4" ng-model="a4" rows="8" placeholder="Enter ..."></textarea>
														
													</div>
												</div>
												
											</div>
											<div class="box-footer">
							

												<button type="submit" class="btn btn-default disable" >Clear</button>
												<button type="submit" name="insert" ng-click="insert()" value="{{btnName}}" class="btn btn-info pull-right">Submit</button>
											</div>
										</form>									
									</div>
								</div>
							</div>
							
							<div class="col-md-12 "style="" >
								<div  class=" fixed">
									<div class="box box-info box box-solid box-default">
										
										<div class="box-header with-border">
											<h3 class="box-title">Crypto Alert Mailer</h3>
										</div>
										
										<form class="form-horizontal"method="POST" action="cryptoAlert">
											<div class="box-body">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Heading</label>												
													<div class="col-sm-10">
														<input type="text"name="s1" ng-model="a1"  class="form-control"   placeholder="Enter ...">
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>											
													<div class="col-sm-10">
														<input type="text" name="s2" ng-model="a2" class="form-control"  placeholder="Enter ...">
													</div>
												</div>											
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Brief</label>												
													<div class="col-sm-10">
														<textarea class="form-control" name="s3"    ng-model="a3" rows="2" placeholder="Enter ..."></textarea>
													</div>
												</div>											
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Details</label>												
													<div class="col-sm-10">
														<textarea class="form-control" name="s4" ng-model="a4" rows="8" placeholder="Enter ..."></textarea>
														
													</div>
												</div>
												
											</div>
											<div class="box-footer">
							

												<button type="submit" class="btn btn-info pull-right" name="send">SEND</button>
												
											</div>
										</form>									
									</div>
								</div>
							</div>										
							</div>										
<table class="table table-fixed">
<thead>
<tr>
<th class="col-xs-1">#</th>
<th class="col-xs-5">President</th>
<th class="col-xs-3">Terms</th>
<th class="col-xs-3">Tenure</th>
</tr>
</thead>
<tbody>
<tr>
<td class="col-xs-1">1</td>
<td class="col-xs-5">George Washington</td>
<td class="col-xs-3">two</td>
<td class="col-xs-3">1789-1797</td>
</tr><tr>
<td class="col-xs-1">1</td>
<td class="col-xs-5">George Washington</td>
<td class="col-xs-3">two</td>
<td class="col-xs-3">1789-1797</td>
</tr><tr>
<td class="col-xs-1">1</td>
<td class="col-xs-5">George Washington</td>
<td class="col-xs-3">two</td>
<td class="col-xs-3">1789-1797</td>
</tr><tr>
<td class="col-xs-1">1</td>
<td class="col-xs-5">George Washington</td>
<td class="col-xs-3">two</td>
<td class="col-xs-3">1789-1797</td>
</tr><tr>
<td class="col-xs-1">1</td>
<td class="col-xs-5">George Washington</td>
<td class="col-xs-3">two</td>
<td class="col-xs-3">1789-1797</td>
</tr><tr>
<td class="col-xs-1">1</td>
<td class="col-xs-5">George Washington</td>
<td class="col-xs-3">two</td>
<td class="col-xs-3">1789-1797</td>
</tr>
<tr>
<td class="col-xs-1">2</td>
<td class="col-xs-5">John Adams</td>
<td class="col-xs-3">one</td>
<td class="col-xs-3">1797-1801</td>
</tr>
</tbody>
</table>								
							
							<div class="col-md-7"style="background-color:#fff;margin-top:-30px;">
								<div class="box box-success ">
									<div class="col-md-12">
										<div class="col-md-6">
											<!-- small box -->
											<div class="small-box bg-aqua">
												<div class="inner">
													<h3><?php echo $rowcount1; ?></h3>
													
													<p>Total Alert</p>
												</div>
												<div class="icon">
													<i class="ion ion-bag"></i>
												</div>
											</div>
										</div>							
										<div class="col-md-6">
											<!-- small box -->
											<div class="small-box bg-green">
												<div class="inner">
													<h3>?</h3>
													
													<p>Total View</p>
												</div>
												<div class="icon">
													<i class="ion ion-bag"></i>
												</div>
											</div>
										</div>										
									</div>
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
						"crypto/alert/insert.php", {
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
					$http.get("crypto/alert/display.php")
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
						$http.post("crypto/alert/delete.php", {
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