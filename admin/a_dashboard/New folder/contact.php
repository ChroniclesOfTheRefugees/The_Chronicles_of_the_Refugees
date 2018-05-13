



 
<?php $currentPage2 = 'contact'; ?>


 


<?php
		error_reporting(0);
	
	include('session.php');
	
	if(!isset($_SESSION['login_user'])){
		header("location: index.php"); // Redirecting To Home Page
	}
	
	function phpAlert($msg) {
		
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	
	if(isset($_POST['sms'])){
		
		
		
		
		
		
		$sqlx ="UPDATE contact SET a15='seen' where  a15='unseen' "  ;
		
		
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
	//Query to be executed;
	$qry10="select * from subscribe ";
	//Performs a query on the database;
	$result10=mysqli_query($conn,$qry10);
	//Gets the number of rows in a result;
	$rowcount10=mysqli_num_rows($result10);
	
	//Fetches all result rows as an associative array;														 
	//Query to be executed;		
	
	if(isset($_POST['send'])){
		
		
		$s2=$_POST['ss4'];
		$subject =$_POST['aa3'];
		
		
		//Query to be executed;
		$qry7="select * from subscribe ";
		//Performs a query on the database;
		$result7=mysqli_query($conn,$qry7);
		//Gets the number of rows in a result;
		$rowcount7=mysqli_num_rows($result7);
		//Fetches all result rows as an associative array;
		$row7 = mysqli_fetch_all($result7,MYSQLI_ASSOC);
		//Iterating each row;
		for($i=$rowcount7-1;$i>=0;$i--)
		{
			$contact=$row7[$i]['email'];
			
			
			 'Newsletter from Infix ICT Solution';
			
			
			$message = "					
			Hello $contact,
			<br /><br />
			
			$s2"
			;
			
			require_once('../../login/mailer/class.phpmailer.php');
			$mail = new PHPMailer();
			$mail->IsSMTP(); 
			$mail->SMTPDebug  = 0;                     
			$mail->SMTPAuth   = true;                  
			$mail->SMTPSecure = "ssl";                 
			$mail->Host       = "smtp.infixict.com";      
			$mail->Port       = 465;             
			$mail->AddAddress($contact);
			$mail->Username="infixict@gmail.com";  
			$mail->Password="81451881s";            
			$mail->SetFrom('infixict@gmail.com','INFIX ICT SOLUTION');
			$mail->AddReplyTo("infixict@gmail.com","INFIX ICT SOLUTION");
			$mail->Subject    = $subject;
			$mail->MsgHTML($message);
			$mail->Send();
				phpAlert("Success");
	
		}		 
	}
	
	if(isset($_POST['reply'])){
		
	
		
		$contact=$_POST['a3'];
		$r2=$_POST['r4'];
			
 
		$subject = 'Reply From INFIX ICT SOLUTIONS';
		
		
		$message = "					
		Hello $contact,
		<br /><br />
		$r2";
		
			require_once('../../login/mailer/class.phpmailer.php');
			$mail = new PHPMailer();
			$mail->IsSMTP(); 
			$mail->SMTPDebug  = 0;                     
			$mail->SMTPAuth   = true;                  
			$mail->SMTPSecure = "ssl";                 
			$mail->Host       = "smtp.gmail.com";      
			$mail->Port       = 465;             
			$mail->AddAddress($contact);
			$mail->Username="tusar8145@gmail.com";  
			$mail->Password="81461881s";            
			$mail->SetFrom('tusar8145@gmail.com','INFIX ICT SOLUTION');
			$mail->AddReplyTo("tusar8145@gmail.com","INFIX ICT SOLUTION");
			$mail->Subject    = $subject;
			$mail->MsgHTML($message);
			$mail->Send();
				
		    phpAlert("Success");
		
	 	 
}





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
				<!-- upper bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="bower_components/note/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		
		
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
							<div class="row">
								
								<div class="col-md-12 "style="margin-top:-30px;" >
									<div  class=" fixed">
										<div class="box box-info box box-solid box-default">
											<div class="box-header with-border">
												<h3 class="box-title">Contact & Questions</h3>
											</div>
											<table class="table table-bordered">
												
												<form class="form-horizontal">
													<thead>
														<tr> 
															<th>S.N.</th>
															<th>Name</th>
															<th>Email</th>
															<th>Sub</th>
															<th>Phone</th>
															<th>Message</th>
															<th>Question</th>
															<th> </th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><input type="text"name="a1" ng-model="a1"  class="form-control"   placeholder=" ..."></td>
															<td><input type="text" name="a2" ng-model="a2" class="form-control"  placeholder=" ..."></td>
															<td><input type="text" name="a3" ng-model="a3" class="form-control"  placeholder=" ..."></td>
															<td><input type="text" name="a4" ng-model="a4" class="form-control"  placeholder=" ..."></td>
															<td><input type="text" name="a5" ng-model="a5" class="form-control"  placeholder=" ..."></td>
															<td><textarea type="text" name="a6" ng-model="a6" class="form-control" rows="5" id="comment"></textarea></td>
															<td><textarea type="text"name="a7" ng-model="a7" class="form-control" rows="5" id="comment"></textarea></td>
															
														</tr>
														
													</tbody>
												</table>
											</form>
											
										</div>
									</div>
								</div>
								
								
								<div   class="col-md-12"style="background-color:#fff;">
									<div class="box box-success ">								
										<table class="table table-bordered"style="width: 100%;">
											<tr>
												<th>S.N.</th>
												<th>Name</th>
												<th>Email</th>	
												<th>Sub</th>																					
												<th>Date</th>
												
											</tr>
											<tr ng-repeat="x in names">
												<td>{{x.id}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.a2}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.a3}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.a4}}</td>
												<td  style=" text-overflow: ellipsis;">{{x.time}}</td>
												
												
												<td>
													<button class="btn btn-success btn-xs" ng-click="update_data( x.id, x.id, x.a2, x.a3, x.a4, x.a5, x.a6, x.a7 )">
														<span class="glyphicon glyphicon-edit"></span> View
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
								
								
								<div class="col-md-6 "style="" >
									<div  class=" fixed">
										<div class="box box-info box box-solid box-default">
											
											<div class="box-header with-border">
												<h3 class="box-title">Reply to user</h3>
											</div>
											
											<form class="form-horizontal"method="POST" action="contact">
												<div class="box-body">
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">Email ID</label>												
														<div class="col-sm-10">
															<input type="text"name="a3" ng-model="a3"  ng-model="r3"   class="form-control"   placeholder="Enter ...">
														</div>
													</div>										
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-2 control-label">Reply</label>												
														<div class="col-sm-10">
															<textarea id="editor1" class="form-control" name="r4"   rows="8" placeholder="Enter ..."></textarea>
															
														</div>
													</div>
													
												</div>
												<div class="box-footer">
													
													
													<button type="submit" class="btn btn-info pull-right" name="reply">SEND</button>
													
												</div>
											</form>									
										</div>
									</div>
								</div>		
								<div class="col-md-6 "style="" >
									<div  class=" fixed">
										<div class="box box-info box box-solid box-default">
											
											<div class="box-header with-border">
												<h3 class="box-title">Newsletter (total recoded email=<?php echo $rowcount10; ?>)</h3>
											</div>
											
											<form class="form-horizontal"method="POST" action="contact">
												<div class="box-body">
													 <div class="form-group">
														<label for="inputEmail3" class="col-sm-2 control-label">Subject</label>												
														<div class="col-sm-10">
															<input type="text"name="aa3"    class="form-control"   placeholder="Enter ...">
														</div>
													</div>
													<div class="form-group">
														<label for="inputPassword3" class="col-sm-2 control-label">Details</label>												
														<div class="col-sm-10">
															<textarea class="form-control" name="ss4"   rows="8" placeholder="Enter ..."></textarea>
															
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
							"crypto/contact/insert.php", {
								'a1': $scope.a1,
								'a2': $scope.a2,
								'a3': $scope.a3,
								'a4': $scope.a4,
								'a5': $scope.a5,
								'a6': $scope.a6,
								
								
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
						$http.get("crypto/contact/display.php")
						.success(function(data) {
							$scope.names = data;
						});
					}
					$scope.update_data = function(a1, id, a2, a3, a4, a5, a6, a7 ) {
						
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
							$http.post("crypto/contact/delete.php", {
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
			
			
				<script>
					$(function () {
						// Replace the <textarea id="editor1"> with a CKEditor
						// instance, using default configuration.
						CKEDITOR.replace('editor1')
						//bootstrap WYSIHTML5 - text editor
						$('.textarea').wysihtml5()
					})
				</script>	
			
			<div class="control-sidebar-bg"></div>
		</div>
						<!-- Bootstrap WYSIHTML5 -->
<script src="bower_components/note/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

		<!-- jQuery 3 -->
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.min.js"></script>
		
	</body>
	</html>	