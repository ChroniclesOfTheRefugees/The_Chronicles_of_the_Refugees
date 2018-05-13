



<?php $currentPage1 = 'Content';  
	$currentPage2 = 'Add';  
	$fname="";
	$rowcount1="";	
	
	//file upload
	if(!empty($_FILES['uploaded_file']))
	{
		$path = "uploads/advertisement/";
		$path = $path . basename( $_FILES['uploaded_file']['name']);
		$fname =basename( $_FILES['uploaded_file']['name']);
		
		if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
			
			phpAlert("File been uploaded");
			} else{
			phpAlert("File Not upload");
		}
	} 

	include('../config.php');
	$qry="select * from codes";
	$result=mysqli_query($conn,$qry);
	$rowcount=mysqli_num_rows($result);
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);

	$a1 =$row[1]['a1'];
	$a2 =$row[1]['a2'];
	$a3 =$row[1]['a3'];
	$a4 =$row[1]['a4'];
	$a5 =$row[1]['a5'];
	$a6 =$row[1]['a6'];
	  
	if(isset($_POST['update2'])){
		
             $a1=$_POST['a1'];
             $a2=$_POST['a2'];
             $a3=$_POST['a3'];
             $a4=$_POST['a4'];
             $a5=$_POST['a5'];
             $a6=$_POST['a6'];

		     $sqlx = "UPDATE codes SET a1='$a1',  a2='$a2',  a3='$a3',  a4='$a4',  a5='$a5',  a6='$a6' WHERE id=3";
						
			try{
			include('../config.php');
				$update_Result = mysqli_query($conn, $sqlx);			
				if($update_Result)
				{
					if(mysqli_affected_rows($conn) > 0)
					{		 
						 phpAlert("Success");					  
					}else{}
				}
			} catch (Exception $ex) {
        }
    }
	
	//file upload

	
	include('session.php');
	
	if(!isset($_SESSION['login_user'])){
		header("location: index.php"); // Redirecting To Home Page
	}
	
	function phpalert($msg) {
		
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
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
								<div class="col-md-12"style="">
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
															<iframe src="uploads/advertisement" width="100%" height="100%" frameborder="0" allowfullscreen overflow-x='hidden' overflow-y='hidden' marginwidth='0' marginheight='0'></iframe>
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
				
				
				
				
				
				
				
			</section>			
			<section class="content container-fluid"style="padding:0px;background-color:#ecf0f5;">								
				<div class="col-md-12" style="padding-top:20px;">
					<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">									
						
						<div class="col-md-5 " >
							
							<div class="col-md-12 " style="margin-top:-30px;">
								<div  class=" fixed">
									<div class="box box-info box box-solid box-default">
										
										<div class="box-header with-border">
											<h3 class="box-title">Advertisement</h3>
										</div>
										
										<form class="form-horizontal"action="add.php" method="POST">
											<div class="box-body">
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Title</label>												
													<div class="col-sm-10">
														<textarea class="form-control" name="a1"  value="dhfs"     rows="2" ><?php echo $a1;?></textarea>
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label">Subtitle</label>											
													<div class="col-sm-10">
													     <textarea class="form-control" name="a2"     rows="2" ><?php echo $a2;?></textarea>														
													</div>
												</div>											
												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label">Image1</label>												
													<div class="col-sm-10">
													    <input type="text" value="<?php echo $a4;?>" class="form-control" name="a4"  > 
													</div>
												</div>											
												
												<div class="form-group ">
													<label for="inputPassword3" class="col-sm-2 control-label">Image2 </label>												
													<div class="col-sm-10">
														<input type="text" value="<?php echo $a5;?>" class="form-control" value="dhfs" name="a5"  > 														
													</div>													
												</div>
												<div class="form-group ">
													<label for="inputPassword3" class="col-sm-2 control-label">Image3 </label>												
													<div class="col-sm-10">
														<input type="text" value="<?php echo $a6;?>" class="form-control" name="a6"  > 														
													</div>													
												</div>												
												<div class="form-group ">
													<label for="inputPassword3"  class="col-sm-2 control-label">Link </label>												
													<div class="col-sm-10">
														<input type="text"value="<?php echo $a3;?>"  class="form-control" name="a3" > 														
													</div>													
												</div>												
												
											</div>
											<div class="box-footer">
												<button type="submit" class="btn btn-default">Clear</button>
												<button type="submit" name="update2" class="btn btn-info pull-right">Update</button>
											</div>
										</form>
										
										
										
									</div>
								</div>
							</div>
							<div class="col-md-12 " >
								<div  class=" fixed">
									<div class="box box-info box box-solid box-default">
										
										<div class="box-header with-border">
											<h3 class="box-title">PICTURE Uploader (size:823*570 /596*400 px)</h3>
										</div>
										
										
										
										
										<form enctype="multipart/form-data" action="add.php" method="POST">
											<div class="col-xs-3">
												<button type="submit" value="Upload">Upload</button>
											</div>
											<div class="col-xs-3">
												<input type="file" name="uploaded_file" style="color: gray;padding-bottom:10px;" ></input>
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
	
		<!-- jQuery 3 -->
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.min.js"></script>
		
	</body>
</html>