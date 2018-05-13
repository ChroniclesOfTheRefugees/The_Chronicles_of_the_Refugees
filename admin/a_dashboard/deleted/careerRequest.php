



<?php $currentPage1 = 'Career'; ?>
<?php $currentPage2 = 'Request'; ?>








<?php
	include('include/cRvariables.php');
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
	
	
	
	// Update
	if(isset($_POST['view'])){
		
		$v1=$_POST['v1'];
		$search_Query = "select * from career where  id='$v1' ";   
		$search_Result = mysqli_query($connect, $search_Query); 
		if($search_Result)
		{
			if(mysqli_num_rows($search_Result))
			{
				while($row = mysqli_fetch_array($search_Result))
				{
					$p1 = $row['a1'];
					$id = $row['id'];
					$p2 = $row['a2'];
					$p3 = $row['a3'];
					$p4 = $row['a4'];
					$p5 = $row['a5'];
					$p6 = $row['a6'];
					$p7 = $row['a7'];
					$p8 = $row['a8'];
					$p9 = $row['a9'];
					$p10 = $row['a10'];
					$p11 = $row['a11'];
					$p12 = $row['a12'];
					$p13 = $row['a13'];
					$p14 = $row['a14'];
					$p15 = $row['a15'];
					
					
				}
			}else{}
			}else{     
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
		
		  <link rel="stylesheet" href="../../bower_components/dataTables.bootstrap.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
		<style type="text/css">
			body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
			}
			table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
			}
			
			h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
			}
			
			table td {
			transition: all .5s;
			}
			
			/* Table */
			.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
			}
			
			.data-table th, 
			.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
			}
			.data-table caption {
			margin: 7px;
			}
			
			/* Table Header */
			.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
			}
			
			/* Table Body */
			.data-table tbody td {
			color: #353535;
			}
			.data-table tbody td:first-child,
			.data-table tbody td:nth-child(4),
			.data-table tbody td:last-child {
			text-align: left;
			}
			
			.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
			}
			.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
			}
			
			/* Table Footer */
			.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: left;
			}
			.data-table tfoot th:first-child {
			text-align: left;
			}
			.data-table tbody td:empty
			{
			background-color: #ffcccc;
			}
		</style>	
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
				
				<?php if ( $p2 === '') {echo '<!--'; }	 ?>
				
				<section class="invoice wow fade wow fadeIn animated"style="margin-top:70px;">
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
						 
							<address>
								<b>Applicant Name:</b> <?php echo $p1 ; ?></br>
								<b>Gender:</b> <?php echo $p4 ; ?></br>
								<b>Date of Birth:</b> <?php echo $p5  ; ?></br>
								<b>Relationship:</b> <?php echo $p6  ; ?></br>
								<b>Email Address:</b>  <?php echo $p2  ; ?></br>
								<b>Phone Number:</b> <?php echo $p3  ; ?></br>
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
										<td><?php echo $p8  ; ?></td>
										<td><b>Apply For:</b></td>
										<td><?php echo $p11  ; ?></td>
										
									</tr>
									<tr>
										<td></br></td>
										<td><b>State/Region:</b></td>
										<td ><?php echo $p7  ; ?></td>
										<td><b>Applicable to:</b></td>
										<td><?php echo $p12  ; ?></td>
										
									</tr>
									<tr>
										<td></br></td>
										<td><b>Zip code:</b></td>
										<td><?php echo $p9  ; ?></td>
										<td><b>Previous Experience:</b></td>
										<td><?php echo $p13  ; ?></td>
										
									</tr>
									<tr>
										<td></br></td>
										<td><b>Country:</b></td>
										<td><?php echo $p10  ; ?></td>
										<td><b>Skills</b></td>
										<td><?php echo $p15  ; ?></td>
										
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
							<li onclick="window.print();"><a href=""><i class="fa fa-print"></i> Print Application Form</a></li>	            
							<button type="button" class="btn btn-primary btn-danger pull-right" style="margin-left: 5px;"><i class="fa fa-close"></i> Denied</button>
							<button type="button" class="btn btn-primary pull-right" style="margin-left: 5px;"><i class="fa fa-download"></i> View CV</button>
							<button type="button" class="btn btn-success pull-right"><i class="fa fa-check"></i> Approved</button>
						</div>
					</div>
				</section>		
				
				<?php if ( $p2 ==='') {echo '-->';}	 ?>
				
				
				<div class="col-md-12 row no-print "style="margin-top:30px;" >
					
					<div  class=" fixed">
						<div class="box box-info box box-solid box-default">
							<div class="box-header with-border">
								<center><h3 class="box-title">Employee Pending Request</h3></center>
							</div>
							
							
							<div class="section-content">
								<div class="row table-responsive">				
									<table class=" data-table fixed_header" style="margin-top:30px;" >		
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Gender</th>
												<th>Email</th>
												<th>Apply For</th>											
												<th>Experience</th>
												<th></th>
												<th></th>
												
												
											</tr>
										</thead>
										<tbody>
											<?php		
												include('../config.php');
												$qry="select * from career LIMIT 1, 18446744073709551615 ";
												$result=mysqli_query($conn,$qry);
												$rowcount=mysqli_num_rows($result);
												$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
												
												for($i=$rowcount-1;$i>0;$i--)
												{
													echo '<tr>	
													<td>'.$row[$i]['id'].'</td>
													<td>'.$row[$i]['a1'].'</td>
													<td>'.$row[$i]['a4'].'</td>
													<td>'.$row[$i]['a2'].'</td>
													<td>'.$row[$i]['a11'].'</td>
													<td>'.$row[$i]['a13'].'</td>
													<td>'.$row[0]['a1'].$row[$i]['id'].$row[0]['a2'].'</td>
													<td>'.'</td>
													</tr>';	
													
												}
												
											?>
										</tbody>
									</table>
									<div class="clearfix"style="padding-bottom:50px;"></div>
									<!-- Infinity Loadmore Button -->						
								</div>
							</div> 		
							
						</div>
					</div>
				</div>	
				
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
											<?php		
												 
												$qry="select * from career LIMIT 1, 18446744073709551615 ";
												$result=mysqli_query($conn,$qry);
												$rowcount=mysqli_num_rows($result);
												$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
												
												for($i=$rowcount-1;$i>0;$i--)
												{
													echo '<tr>	
													<td>'.$row[$i]['id'].'</td>
													<td>'.$row[$i]['a1'].'</td>
													<td>'.$row[$i]['a4'].'</td>
													<td>'.$row[$i]['a2'].'</td>
													<td>'.$row[$i]['a2'].'</td>
													</tr>';	
													
												}
												
											?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
						"include/career/insert.php", {
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
					$http.get("include/career/display.php")
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
						$http.post("include/career/delete.php", {
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
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="../../bower_components/jquery.slimscroll.min.js"></script>
<script src="../../bower_components/fastclick.js"></script>

<script src="../../bower_components/jquery.dataTables.min.js"></script>
<script src="../../bower_components/dataTables.bootstrap.min.js"></script>
					
					
					</body>
					</html>																			