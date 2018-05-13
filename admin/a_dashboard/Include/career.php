



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
				<title>INFIX ICT SOLUTIONS</title>
		 
			<link href="../../photos/sm.png" rel="shortcut icon" type="image/png">
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
			<div class="content-wrapper "style="background-color:#ecf0f5;">
				<div class="col-md-12 row no-print " >
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
				
				
				
				
				
				
<!-- Invoice of application -->
    <section class="invoice row no-print"style="margin-top:70px;">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header" >  <center> 
         <img class="img-responsive" src="../../img/logo.png" alt="Chania" width="120"  >  <aa style="color:gray;"><i class="fa fa-globe"></i> Job/Intern Application</aa>	</center> 
            <small class="pull-right">Date: 2/10/2014</small>
          </h2>
        </div>
      </div>
     <div class="row invoice-info">
        <div class="col-sm-12 invoice-col  ">
           From 
          <address>
			<b>Applicant Name:</b>   Md. Abdulla Al Mamun </br>
			<b>Gender:</b>   Male</br>
			<b>Email Address:</b>   tusar8145@gmail.com</br>
			<b>Phone Number:</b> 01795621796</br>
          </address>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped well">
            <tbody>
            <tr>
              <td></br></td>
			  <td><b>City:</b></td>
              <td>Dhaka</td>
              <td><b>Apply For:</b></td>
              <td>Web Delopers</td>
             
            </tr>
            <tr>
			<td></br></td>
              <td><b>State/Region:</b></td>
              <td >Dhaka</td>
              <td><b>Applicable to:</b></td>
              <td>Full-time</td>
               
            </tr>
            <tr>
			<td></br></td>
              <td><b>Zip code:</b></td>
              <td>1205</td>
              <td><b>Previous Experience:</b></td>
              <td>3 years</td>
            
            </tr>
            <tr>
			<td></br></td>
              <td><b>Country:</b></td>
              <td>Bangladesh</td>
              <td><b>Skills</b></td>
              <td>HTML CSS JS PHP</td>
             
            </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <p class="lead">Checkup Report:</p>
          <p class="text-muted well well-sm no-shadow f3" style="margin-top: 10px;color:green;">
            After processing user ip address, MAC Address, And HTTP cookie,We determine that  The user (ip) is seems legal.
          </p>
        </div>
        <div class="col-xs-6">
          <p class="lead">Application Date: 2/22/2014</p>
          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Applicant ID:</th>
                <td>1510111</td>
              </tr>
              <tr>
                <th style="width:50%">Total Applicant:</th>
                <td>25</td>
              </tr>
              <tr>
                <th>Status:</th>
                <td>New apply</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped  ">
 
            <tbody>
            <tr style="background-color: lightgray;" >
              <td></br></td>
			  <td style=" color: green;"><b>Signature of Managing Director </b></td>
			  <td style=" color: green;"><b>Signature of  Controller</b></td>
            </tr>
            <tr>
			<td></br></td>     
               <td style="color:lightgray;">. . . . . . . . . .</td>
			   <td style="color:lightgray;">. . . . . . . . . .</td>  
            </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row no-print">
        <div class="col-xs-12">
          <li onclick="window.print();"><a href="career.php"><i class="fa fa-print"></i> Print Application Form</a></li>	            
		<button type="button" class="btn btn-primary btn-danger pull-right" style="margin-left: 5px;"><i class="fa fa-close"></i> Denied</button>
          <button type="button" class="btn btn-primary pull-right" style="margin-left: 5px;"><i class="fa fa-download"></i> View CV</button>
		<button type="button" class="btn btn-success pull-right"><i class="fa fa-check"></i> Approved</button>
        </div>
      </div>
    </section>		

	
	
	
 
 
	
	
				<section class="content container-fluid row no-print"style="margin-top:20px;background-color:#ecf0f5;">								
					<div class="col-md-12" style="padding-top:20px;">
						<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">									
							
							<div class="col-md-12 "style="margin-top:-30px;" >
							 
								<div  class=" fixed">
									<div class="box box-info box box-solid box-default">
										
										<div class="box-header with-border">
											<h3 class="box-title">Crypto Alert Form</h3>
										</div>
			
 
			
										<form class="form-horizontal">
											<div class="box-body">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>												
													<div class="col-sm-10">
														<input type="text"name="a1" ng-model="a1"  class="form-control"   placeholder="Enter ...">
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Email</label>											
													<div class="col-sm-10">
														<input type="text" name="a2" ng-model="a2" class="form-control"  placeholder="Enter ...">
													</div>
												</div>											
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Phone </label>												
													<div class="col-sm-10">
														<input type="text" name="a3" ng-model="a2" class="form-control"  placeholder="Enter ...">
													</div>
												</div>											
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Details</label>												
													<div class="col-sm-10">
														<input type="text" name="a3" ng-model="a2" class="form-control"  placeholder="Enter ...">
														
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
							
						<!--	<div class="col-md-12 "style="" >
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
							</div>		-->								
																
							
							
							<div class="col-md-12"style="background-color:#fff;margin-top:-30px;">
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