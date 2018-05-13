



<?php $currentPage1 = 'Admin'; ?>
<?php $currentPage2 = 'setting'; ?>



<?php 
	
	include('session.php');
	
	if(!isset($_SESSION['login_user'])){
		header("location: index.php"); // Redirecting To Home Page
	}
	
 ?>




<?php
	 
	$createjob ='0';
	$jobUpdate ='0';

	include('../config.php');
	include('include/cRvariables.php');

	function phpAlert($msg) {echo '<script type="text/javascript">alert("' . $msg . '")</script>';}

 
	
	// Update
	if(isset($_POST['approve'])){
		$xx='1';
		$xx2=$_POST['xx1'];
		$sqlx = "UPDATE career SET b5='$xx' WHERE id=3 ";
		
		try{
			include('../config.php');
			$update_Result = mysqli_query($conn, $sqlx);			
			if($update_Result)
			{
				if(mysqli_affected_rows($conn) > 0)
				{		 
					phpAlert("Approved Successful");					  
				}else{}
			}
			} catch (Exception $ex) {
		}
	}
	

	
	
	$c8='';
	$c5='Tusar';
	$c6= rand();//id of job
	// view the Exsisting job
	if(isset($_POST['viewthis'])){ 
	
		$v1=$_POST['v1'];
		$search_Query = "select * from login where  id='$v1' ";   
		$search_Result = mysqli_query($connect, $search_Query); 
		if($search_Result)
		{
			if(mysqli_num_rows($search_Result))
			{
				while($row = mysqli_fetch_array($search_Result))
				{
					$c1=$row['username'];  //user name
					$c3=$row['a1'];// e-id	 
					$aa6=$row['a2']; 	 
					$id=$row['id']; 	 
					$age=explode(',',$row['a3']); 
					 
					
				}
			}else{}
			}else{     
		}$jobUpdate ='1';$createjob ='0';	
		 
	}	
	
	
	// Update the Exsisting job
	if(isset($_POST['updateNow'])){
 
		$v1=$_POST['v1'];
 
		$age =implode(',', $_POST['age']); 
		
		$sqlx = "UPDATE login SET a3='$age' WHERE id='$v1' ";
		
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
//Delete
	if(isset($_POST['deleteNow'])){
		include('../config.php');  
			$v1=$_POST['v1'];
		$query = "DELETE FROM login WHERE WHERE id='$v1' ";
		if (mysqli_query($conn, $query)) {
			phpAlert("Data Deleted Successfully...") ;
			} else {
			echo 'Failed';
		}
		
	}
 
	// Create Job
	if(isset($_POST['check'])){
		$c1=$_POST['c1']; //Jop types
		$c2=$_POST['c2'];//	Deadline:
		$c3=$_POST['c3'];//Status:
	 
		$age =implode(',', $_POST['age']); 
 
//get date
	$x1=date("m");
	$x2=date("d");
	$x3=date("Y");

	if($x1==01){
		$x1='January';
	} 
	if($x1==02){
		$x1='February';
	} 
	if($x1==03){
		$x1='March';
	} 
	if($x1==04){
		$x1='April';
	} 
	if($x1==05){
		$x1='May';
	} 
	if($x1==06){
		$x1='June';
	} 
	if($x1==07){
		$x1='July';
	} 
	if($x1==08){
		$x1='August';
	} 
	if($x1==09){
		$x1='September';
	} 
	if($x1==10){
		$x1='October';
	} 
	if($x1==11){
		$x1='November';
	} 
	if($x1==12){
		$x1='December';
	} 

	$aa6    =$x2." ".$x1." ".$x3;	
		
		
		$sqlx = "INSERT INTO login (username,password,a1,a2,a3) VALUES ('$c1','$c2','$c3','$aa6','$age')";
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

	
	// Comes Create Table 
	if(isset($_POST['create'])){$createjob ='1'; }
	// Cancel All Table 
	if(isset($_POST['cancel'])){$createjob ='0';	$jobUpdate ='0';}	
	// Comes Update Table  with id
	//if(isset($_POST['update'])){$createjob='5';}
	
	
	
	// Row count from table Total Applicant
	include('../config.php');
	$applicant='Male';
    $qryTotal = "SELECT * FROM  job    ";
	$resultTotal=mysqli_query($conn,$qryTotal);
	$count1=mysqli_num_rows($resultTotal);
	
	
	
	$applicant='Enable';
    $qryTotalFemale5 = "SELECT * FROM  job WHERE a3 = '$applicant' ";
	$resultTotal5=mysqli_query($conn,$qryTotalFemale5);
	$count2=mysqli_num_rows($resultTotal5);
	
	
	$applicant='Disable';
    $jj = "SELECT * FROM  job WHERE a3 = '$applicant'   ";
	$eee=mysqli_query($conn,$jj);
	$count3=mysqli_num_rows($eee);
	
	$applicant='1';
    $qryTotalFemale3 = "SELECT * FROM  job WHERE a10 = '$applicant'  LIMIT 1,78787878 ";
	$resultTotal3=mysqli_query($conn,$qryTotalFemale3);
	$count4=mysqli_num_rows($resultTotal3);
 
	
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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		
	    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
		
	<link rel="stylesheet" href="css/table.css">
 
	 
	 	<!--NOTE-->
	<script src="note/summernote/jquery.js"></script> 
	<script src="note/summernote/bootstrap.js"></script> 
	<link href="note/summernote.css" rel="stylesheet">
	<script src="note/summernote.js"></script>	
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="bower_components/note/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	
	</head>
	
	<body  class="hold-transition skin-blue sidebar-mini skin-blue sidebar-mini wysihtml5-supported fixed">
		<div class="wrapper"scroll="no" style="overflow: hidden">

		
	

  
  
			<?php include('menu.php');?>		
			
			
			
			
			<!-- Content Wrapper. Contains page content -->	<form class="  " method="POST">
			<div class="content-wrapper"style="background-color:rgb(53, 121, 160);">
			
			
				<!-- View -->
				<!-- Update Job --><?php if ( $jobUpdate === '0') {echo '<!--'; }else{echo ''; } 	 ?>
				<section class="invoice wow fade wow fadeIn animated sb"style="margin-top:10px;    border: 2px solid #01ade1;">
					<div class="row">
						<div class="col-xs-12">
							<h2 class="page-header" >  <center> 
							<img class="img-responsive" src="../../img/logo.png" alt="Chania" width="120"  >  <aa style="color:gray;"><i class="fa fa-globe"></i>Admin Create</aa>	</center> 
							<small class=" "><i>User Name: <input disabled   style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php echo $c1; ?>" name="c1">  </i>
								   <input disabled   style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php echo $id; ?>" name="v1">  
								</small>
							</h2>
						</div>
					</div>
 
					<?php  ?>
					
					
					<div class="row">			
						<div class="col-xs-4">
							<p class="lead  "style="text-align:right;"><b>Access :</b></p> 
							<div class="table-responsive">
								<table class="table">
									
 								<i>user id: <input disabled   style="border:0px; background-color:#f0f0f0;  padding-left:5px; " type="text"value="<?php echo $c3 ?>" name="c3">  </i>
									<tr>
										<th style="width:50%">Create Date:</th>
										<td>
										<input  disabled style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php echo $aa6 ?>" >
									 
										</td>
									</tr>
									<tr>
										<th>Created By:</th>
										<td><?php echo $c5; ?></td>
									</tr>
								</table>
							</div>
						</div>
						
                             <div class="col-xs-8">
								<div class="col-xs-6">		
									<ul class="list-group list-group-flush" >
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"style="padding:0;margin:0;"><input id="checkbox1"  name="age[0]" value="Monitoring" type="checkbox" <?php if( in_array("Monitoring",$age)) echo "checked";?>>
												<label for="checkbox1">Monitoring</label>
											</div>                   
											
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox2"  name="age[1]"  value="Admin Management" type="checkbox" <?php if( in_array("Admin Management",$age)) echo "checked";?>>
												<label for="checkbox2">Admin Management</label>
											</div>    
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox3"  name="age[2]"  value="Client Management" type="checkbox" <?php if( in_array("Client Management",$age)) echo "checked";?>>
												<label for="checkbox3">Client Management</label>
											</div> 
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox4"  name="age[3]" value="Career" type="checkbox" <?php if( in_array("Career",$age)) echo "checked";?>>
												<label for="checkbox4">Career</label>
											</div> 
										</li>
									</ul>	
								</div> 
								<div class="col-xs-6">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox5"  name="age[4]" value="Blog" type="checkbox" <?php if( in_array("Blog",$age)) echo "checked";?>>
												<label for="checkbox5">Blog</label>
											</div>  
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox6"  name="age[5]" value="Digital Marketing" type="checkbox" <?php if( in_array("Digital Marketing",$age)) echo "checked";?>>
												<label for="checkbox6">Digital Marketing</label>
											</div>
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox7"  name="age[6]" value="Contact & Questions" type="checkbox" <?php if( in_array("Contact & Questions",$age)) echo "checked";?>>
												<label for="checkbox7">Contact & Questions</label>
											</div> 
										</li>
 
										<li class="list-group-item invisible">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox9"  name="age[8]"  value="  " type="checkbox"  checked ;?>>
												<label for="checkbox9">Marketing Officer</label>
											</div>  
										</li>
									</ul>			
								</div>
							</div>
						</div>			
						<div class="row no-print well">
							<div class="col-xs-12">		
								<div class="col-xs-6">
								</div>
								<div class="col-xs-6">		
									<div class="col-xs-3">
									</div>
									<div class="col-xs-3">
 
										<input class="invisible" type="text" value="<?php echo $id; ?>" name="v1">		
										<input type="submit" name="updateNow" value="Update" style="width:120%"class="btn bg-olive btn-flat">
								</div>
								
								<div class="col-xs-3">
									 <input class="invisible" type="text" value="<?php echo $id; ?>" name="v1">		
						 
										<input type="submit" name="deleteNow" style="width:100%" value="Delete" class="btn bg-maroon btn-flat">
									 </form>
								</div>
								<div class="col-xs-3">
									<form class="row no-print " method="POST">
										<input class="invisible" type="text" name="xx2" value="<?php echo $id  ; ?>">		
										<input type="submit" style="width:100%" name="cancel" value="cancel" class="btn bg-default btn-flat">
									</form>	
								</div>	
							</div>
							
							<li onclick="window.print();"><a href=""><i class="fa fa-print"></i> Print Application Form</a></li>	            	
						</div>
					</div>
				</section>  		<?php if ( $jobUpdate === '0') {echo '-->'; }else{echo ''; } 	 ?>
						
			
			
			
				<!-- Create A New Job --><?php if ( $createjob === '0') {echo '<!--'; }else{echo ''; }	 ?>
				<section class="invoice wow fade wow fadeIn animated"style="margin-top:10px;    border: 2px solid #01ade1;">
					<div class="row">
						<div class="col-xs-12">
							<h2 class="page-header" >  <center> 
							<img class="img-responsive" src="../../img/logo.png" alt="Chania" width="120"  >  <aa style="color:gray;"><i class="fa fa-globe"></i>Admin Create</aa>	</center> 
							<small class=" "><i>User Name: <input autofocus style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php //echo $c8; ?>" name="c1">  </i>
								 <i style="padding-left:10px;"> Password: <input autofocus style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php //echo $c8; ?>" name="c2">  </i>
								</small>
							</h2>
						</div>
					</div>
 
					<?php  ?>
					
					
					<div class="row">			
						<div class="col-xs-4">
							<p class="lead  "style="text-align:right;"><b>Access :</b></p> 
							<div class="table-responsive">
								<table class="table">
									
 								<i>user id: <input autofocus style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php //echo $c8; ?>" name="c3">  </i>
									<tr>
										<th style="width:50%">Create Date:</th>
										<td>
										<input type="date" name="n4" disabled value="<?php echo date('Y-m-d'); ?>" />
										</td>
									</tr>
									<tr>
										<th>Created By:</th>
										<td><?php echo $c5; ?></td>
									</tr>
								</table>
							</div>
						</div>
						
                             <div class="col-xs-8">
								<div class="col-xs-6">		
									<ul class="list-group list-group-flush" >
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"style="padding:0;margin:0;"><input id="checkbox1"  name="age[0]" value="Monitoring" type="checkbox" <?php if( in_array("Monitoring",$age)) echo "checked";?>>
												<label for="checkbox1">Monitoring</label>
											</div>                   
											
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox2"  name="age[1]"  value="Admin Management" type="checkbox" <?php if( in_array("Admin Management",$age)) echo "checked";?>>
												<label for="checkbox2">Admin Management</label>
											</div>    
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox3"  name="age[2]"  value="Client Management" type="checkbox" <?php if( in_array("Client Management",$age)) echo "checked";?>>
												<label for="checkbox3">Client Management</label>
											</div> 
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox4"  name="age[3]" value="Career" type="checkbox" <?php if( in_array("Career",$age)) echo "checked";?>>
												<label for="checkbox4">Career</label>
											</div> 
										</li>
									</ul>	
								</div> 
								<div class="col-xs-6">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox5"  name="age[4]" value="Blog" type="checkbox" <?php if( in_array("Blog",$age)) echo "checked";?>>
												<label for="checkbox5">Blog</label>
											</div>  
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox6"  name="age[5]" value="Digital Marketing" type="checkbox" <?php if( in_array("Digital Marketing",$age)) echo "checked";?>>
												<label for="checkbox6">Digital Marketing</label>
											</div>
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox7"  name="age[6]" value="Contact & Questions" type="checkbox" <?php if( in_array("Contact & Questions",$age)) echo "checked";?>>
												<label for="checkbox7">Contact & Questions</label>
											</div> 
										</li>
 
										<li class="list-group-item invisible">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox9"  name="age[8]"  value="  " type="checkbox"  checked ;?>>
												<label for="checkbox9">Marketing Officer</label>
											</div>  
										</li>
									</ul>			
								</div>
							</div>
						</div>						

 
						<div class="row no-print well">
							<div class="col-xs-12">		
								<div class="col-xs-6">
								</div>
								<div class="col-xs-6">		
									<div class="col-xs-3">
									</div>
									<div class="col-xs-3">
										
										<input class="invisible" type="text" name="xx1" value="">		
										<input type="submit" name="check" value="Create" style="width:120%"class="btn bg-olive btn-flat">
								</div>
								</form>
								<div class="col-xs-3">
									<form class="row no-print " method="POST">
										<input class="invisible" type="text" name="xx2" value="<?php echo $id  ; ?>">		
										<input type="submit" style="width:100%" name="cancel" value="cancel" class="btn bg-default btn-flat">
									</form>	
								</div>	
							</div>
							
							<li onclick="window.print();"><a href=""><i class="fa fa-print"></i> Print Application Form</a></li>	            	
						</div>
					</div>
				</section>  		<?php if ( $createjob === '0') {echo '-->'; }else{echo ''; }	 ?>
				
	
				
				
				<section class="content row no print"style="min-height: 0px; ">
					<!-- Small boxes (Stat box) -->
					<div class="  row no print">
						
						
						<div class="col-lg-3 col-xs-6">
							<div class="small-box  bg-aqua">
		 
								<div class="col-xs-3">
									<form class="row no-print " method="POST">
										<input class="invisible" type="text" name="xx2" value="<?php echo $id  ; ?>">		
										<input type="submit" name="create" value="Add" class="btn bg-maroon btn-flat">
									</form>	
								</div>
								<div class="col-xs-3"></div>
 
								<!--       <button  class="small-box-footer"data-toggle="modal" data-target="#modal-primary" style="border:0px;width:100%;">View More <i class="fa fa-arrow-circle-right"></i></button>-->
							</div>
						</div>
					 
					</div>
				</section>
 
				<!--Querry -->
				<section class="content row no-print wow fade wow fadeIn animated">
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Created Admin</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>Sl</th>
												<th>UserName</th>
											 
												<th>e-id</th>
												<th>Date</th>
												<th>Access</th>
									 
												 <th></th> 
											</tr>
										</thead>
										<tbody>
											<?php		
												
												$qry="select * from login  ";
												$result=mysqli_query($conn,$qry);
												$rowcount=mysqli_num_rows($result);
												$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
												$sl='1';
												for($i=$rowcount-1;$i>=0;$i--)
												{
													echo '<tr>	
													<td>'.$sl.'</td>
													<td>'.$row[$i]['username'].'</td>
													 
										 
													<td>'.$row[$i]['a1'].'</td>
													<td>'.$row[$i]['a2'].'</td>
													<td>'.$row[$i]['a3'].'</td>
						 
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
											<tr>
												<th>Sl</th>
												<th>UserName</th>
											 
												<th>e-id</th>
												<th>Date</th>
												<th>Access</th>
									 
												 <th></th> 
												<!--<th></th>-->
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
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			
			
			
			<div class="control-sidebar-bg"></div>
		</div>
		<!-- ./wrapper -->
		
<!-- CK Editor -->
<script src="bower_components/note/bootstrap-wysihtml5/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="bower_components/note/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
		
		
	 
		<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="dist/js/adminlte.min.js"></script>
		<script src="bower_components/jquery.slimscroll.min.js"></script>
		<script src="bower_components/fastclick.js"></script>
		
		
		<script src="bower_components/bootstrap-datepicker.min.js"></script>
		
		
		<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<script>
			//Date picker
			$('#datepicker').datepicker({
				autoclose: true
			})	</script>
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
			
  <script>
	  $(document).ready(function() {
        $('#summernote').summernote();
    });
	
	$('#summernote').summernote({
  height: 200,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
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
	</body>
</html>
