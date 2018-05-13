



<?php $currentPage1 = 'Blog'; ?>
<?php $currentPage2 = 'Blog Management'; ?>









<?php
	include('../config.php');
	
	$rowcount1="";	
	
	include('session.php');
	
	if(!isset($_SESSION['login_user'])){
		header("location: aindex.php"); // Redirecting To Home Page
	}
	
	function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	$qry1="select * from blog LIMIT 1,1000 ";
	$result1=mysqli_query($conn,$qry1);
	$rowcount1=mysqli_num_rows($result1);
	
	$a7='';	
	$a9='';	
	$r1='';
	$r3='';
	$a5='';
	$id='';
	//View This
	if(isset($_POST['viewthis'])){ 
		
		$v1=$_POST['v1'];
		$search_Query = "select * from blog where  id='$v1' ";   
		$search_Result = mysqli_query($connect, $search_Query); 
		if($search_Result)
		{
			if(mysqli_num_rows($search_Result))
			{
				while($row = mysqli_fetch_array($search_Result))
				{
					$a7 = $row['a7'];
					$a9 = $row['a9'];
					$r1 = $row['r1'];
					$r3 = $row['r3'];
					$a5 = $row['a5'];
					$id = $row['id'];
				}
			}else{}
			}else{     
		} 
		
	}
	
	
	$target='';
	$image ='';
	//Insert Blog
	if(isset($_POST['post'])){
		
		$a7=$_POST['a7']; 
		$a9=$_POST['a9']; 
		$r1=$_POST['r1']; 
		$r3=$_POST['r3']; 
 
		$date=date("dS-M-Y");
	 
		$target = "uploads/blog/".basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];	
	 
 
        $query = "INSERT INTO blog(a7, a9, r1, r3, a11,a5 ) VALUES ('$a7', '$a9', '$r1', '$r3', '$date' , '$image' )";
		try{
			include('../config.php');
			$update_Result = mysqli_query($conn, $query);			
			if($update_Result)
			{
		
		
		
				if(mysqli_affected_rows($conn) > 0)
				{		
			
					if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					//$msg = "Image uploaded successfully";
			 
					}else{
				//	$msg = "Failed to upload image";
					}			
					}else{}
					
					phpAlert(" Successful");		
			
	$a7='';
	$a9='';
	$r1='';	
	$r3='';	
	
	}
			} catch (Exception $ex) {
		}	 
		
		
	}
	
	
	
	// Update the Exsisting blog
	if(isset($_POST['updateNow'])){
		$a7=$_POST['a7']; 
		$a9=$_POST['a9']; 
		$r1=$_POST['r1']; 
		$r3=$_POST['r3']; 
		$a5=$_POST['a5'];
		$id=$_POST['id'];
		
		$sqlx = "UPDATE blog SET a7='$a7', a9='$a9', r1='$r1', r3='$r3', a5='$a5' WHERE id='$id' ";
		
		try{
			include('../config.php');
			$update_Result = mysqli_query($conn, $sqlx);			
			if($update_Result)
			{
				if(mysqli_affected_rows($conn) > 0)
				{		 
					phpAlert(" Successful");					  
				}else{}
			}
			} catch (Exception $ex) {
		}
	}
	
	
	if(isset($_POST['send'])){
		
		$s1=$_POST['a7'];
		$s2=$_POST['a9'];
		$id=$_POST['id'];
		
		$qry7="select * from subscribe ";
		$result7=mysqli_query($conn,$qry7);
		$rowcount7=mysqli_num_rows($result7);
		$row7 = mysqli_fetch_all($result7,MYSQLI_ASSOC);
		for($i=$rowcount7-1;$i>=0;$i--)
		{
			$contact=$row7[$i]['email'];
			$use=$row7[$i]['email'];
			$subject = 'BLOG POST INFIX ICT';
			$message = "					
			Hello $use,
			<br /><br />
			A new blog is added 
			
			<br /><br />
			$s1
			<br /><br />
			$s2
			<br /><br />
			<a href='http://infixict.com/blog-details.php?id='.$id.''>Click here for goto Page</a>
			<br /><br />
			Thanks.";
			
			
			require_once('../../login/mailer/class.phpmailer.php');
			$mail = new PHPMailer();
			$mail->IsSMTP(); 
			$mail->SMTPDebug  = 0;                     
			$mail->SMTPAuth   = true;                  
			$mail->SMTPSecure = "ssl";                 
			$mail->Host       = "smtp.gmail.com";      
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
	
	//Delete
	if(isset($_POST['delete'])){
		include('../config.php');  
		$id= $_POST['id'] ;
		
		$query = "DELETE FROM blog WHERE id='$id'";
		if (mysqli_query($conn, $query)) {
			phpAlert("Data Deleted Successfully...") ;
			} else {
			echo 'Failed';
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
		<!-- upper bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="bower_components/note/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
		<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css'>
	</head>
	
	
	
	<body  class="hold-transition skin-blue sidebar-mini skin-blue sidebar-mini wysihtml5-supported fixed">
		<div class="wrapper"scroll="no" style="overflow: hidden">
			
			
			<?php include('menu.php');?>			
			
			
			
			
			
			<!-- Main content ------------------------------------------------------------------------------------------------------------------------ ------------------------------------------>
			<div class="content-wrapper"style="background-color:#ffffff;">
				
				<div class="col-md-12 " >
					<div  class=" fixed">
						<div class="box box-info box box-solid box-default">
							
							<div class="box-header with-border">
								<div class="col-md-12"style="padding:0px;margin:0px;">
									<div class="col-md-1">
										<ul>
											<li class="dropdown tasks-menu"style="padding-top:15px;">
												<a href="#" class="btn btn-info pull-centered waves-effect waves-light blue dropdown-toggle" data-toggle="dropdown">
												 Accounts 
												</a>
												<ul class="dropdown-menu  animated ">
													<li class="footer">
														<a href="logout.php"style="color:black;">View Profile  </a>
													</li>
													<li class="footer"style="padding-bottom:20px;font:30px">
														<a id="logout" href="logout.php"style="color:black;">Sign out  </a>
													</li>
													<li class="footer">                
													</li>
												</ul>
											</li> 
											</ul>
									</div>
									<div class="col-md-5">
										<div class="col-md-3">
										</div>
										<h5 class="btn       white "style="color:black; " >TOTAL BLOG :  <?php echo $rowcount1; ?><h5>
								</div>
								
									</div>
									</div>	
								</div>
							</div>
						</div>
						
						<section class="content container-fluid"style="padding:0px;background-color:#3c8dbc;">								
							<div class="col-md-12" style="padding-top:20px;">
								<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">									
									
									
									
									
									
									<section class="content"style="margin-top:-40px;">
										<div class="row"style="margin:0px;">
											<div class="col-md-12">
												<div class="box box-info">
													<div class="box-header">
														<center>	<h3 class="box-title">Blog POST Panel
															<small></small>
														</h3></center>	
														<div class="pull-right box-tools">
															<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
															title="Collapse">
															<i class="fa fa-minus"></i></button>
															<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
															title="Remove">
															<i class="fa fa-times"></i></button>
														</div>
													</div>
													<div class="box-body pad">
														<div class="col-md-12 "style="" >
															<div  class=" fixed">
																<div class="box box-info box box-solid box-default">
																	<form method="post"action="" enctype="multipart/form-data">
																		<div class="box-header with-border">
																			<h3 class="box-title">Blog Post Form</h3>
																		</div>
																		<input type="text"class="invisible"name="id"value="<?php  echo $id; ?>"   class="form-control"   placeholder="Enter ...">
																		<div class="box-body">
																			<div class="form-group">
																				<label for="inputEmail3" class="col-sm-2 control-label">Heading</label>												
																				<div class="col-sm-10">
																					<input type="text"name="a7"value="<?php  echo $a7; ?>"   class="form-control"   placeholder="Enter ...">
																				</div>
																			</div>
																			<div class="form-group">
																				<label for="inputEmail3" class="col-sm-2 control-label">Category</label>											
																				<div class="col-sm-10">
																					<input type="text" name="a9" value="<?php  echo $a9; ?>" class="form-control"  placeholder="Enter ...">
																				</div>
																			</div>		 									
																			<div class="form-group">
																				<label for="inputPassword3" class="col-sm-2 control-label">Brief</label>												
																				<div class="col-sm-10">
																					<textarea class="form-control" name="r1"  rows="3" placeholder="Enter ..."> <?php  echo $r1; ?> </textarea>													
																				</div>
																			</div>
																			
																			<div class="form-group">
																				<label for="inputPassword3" class="col-sm-2 control-label">Details</label>												
																				<div class="col-sm-10">
																					<textarea id="editor1" class="form-control" name="r3" rows="3" placeholder="Enter ..."><?php  echo $r3; ?> </textarea>											
																				</div>
																			</div>
																			
																			
																			
																			<div class="form-group">
																				<label for="inputPassword3" class="col-sm-2 control-label">Image</label>												
																				<div class="col-sm-10">
																					<input type="file" name="image">																			
																				</div>
																			</div>
																			
																			
																		</div>
																		<div class="box-footer">
																			
																			<button class="btn btn-warning pull-centered  waves-effect waves-light red" type="submit" name="delete" >DELETE</button>
																			<button type="submit" class="btn btn-default disable" >Clear</button>
																			<button type="submit" class="btn btn-info pull-centered waves-effect waves-light blue" name="send">SEND</button>
																			<button class="btn btn-warning pull-centered " type="submit" name="post" >UPDATE</button> 
																			<button class="btn btn-info btn-md pull-right waves-effect waves-light blue" style="margin-left:20px;"type="submit" name="post" >POST</button>
																			
																		</div>
																	</form>  
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>			
									
									
									
									
									
								</div>
							</div>							
						</section>
						<!--Querry -->
						<section class="content row no-print wow fade wow fadeIn animated"style="margin-top:-30px;">
							<div class="row">
								<div class="col-xs-12">
									<div class="box">
										<div class="box-header">
											<h3 class="box-title">Blog List</h3>
										</div>
										<!-- /.box-header -->
										<div class="box-body">
											<table id="example1" class="table table-bordered table-striped">
												<thead>
													<tr>
														<th>SL</th>
														<th>Header</th>
														<th>Category</th>
														<th>Brif</th>
														<th>Date</th>
														<th>Image</th>
														
														<th></th> 
													</tr>
												</thead>
												<tbody>
													<?php		
														include('../config.php');
														$qry="select * from blog  LIMIT 1,1000;";
														$result=mysqli_query($conn,$qry);
														$rowcount=mysqli_num_rows($result);
														$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
														$sl='1';
														for($i=$rowcount-1;$i>=0;$i--)
														{ $use1=$row[$i]['a1'];
															$use2=substr($use1, 0, 10);
															
															echo '<tr>	
															<td>'.$sl.'</td>
															<td>'.$row[$i]['a7'].'</td>
															<td>'.$row[$i]['a9'].'</td>
															<td>'.$row[$i]['r1'].'</td>
															
															<td>'.$use2.'</td>
															<td>'.$row[$i]['a5'].'</td>
															
															<td>'.'<div class="row no-print">
															<form  class="row no-print " method="POST"> 
															<input class="invisible"type="text" name="v1" value="'.$row[$i]['id'].'">	
															<input type="submit" name="viewthis"value="Action" class="btn btn-warning btn-xs"></input> 	 
															</form>     
															</div>'.'</td>
															
															
															</tr>';	
															$sl=$sl+1;	
														}
														
														
														
														
													?>
												</tbody>
												<tfoot>
													<th>SL</th>
													<th>Header</th>
													<th>Category</th>
													<th>Brif</th>
													<th>Date</th>
													<th>Image</th>
													
													<th></th> 
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
					$(function () {
						// Replace the <textarea id="editor1"> with a CKEditor
						// instance, using default configuration.
						CKEDITOR.replace('editor1')
						//bootstrap WYSIHTML5 - text editor
						$('.textarea').wysihtml5()
					})
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
				<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
				<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>		<!-- CK Editor -->
				<script src="bower_components/note/bootstrap-wysihtml5/ckeditor/ckeditor.js"></script>
				<!-- Bootstrap WYSIHTML5 -->
				<script src="bower_components/note/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
				<script src="bower_components/jquery.slimscroll.min.js"></script>
				<script src="bower_components/fastclick.js"></script>
				<!-- jQuery 3 -->
				<script src="bower_components/jquery/dist/jquery.min.js"></script>
				<!-- Bootstrap 3.3.7 -->
				<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
				<!-- AdminLTE App -->
				<script src="dist/js/adminlte.min.js"></script>
				
			</body>
		</html>		