<?php $currentPage1 = 'refugee'; ?>
<?php $currentPage2 = 'refugee'; ?>



<?php 
	
	include('session.php');
	
	if(!isset($_SESSION['login_user'])){
		header("location: index.php"); // Redirecting To Home Page
	}
	
?>




<?php
	error_reporting(0);
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
		$search_Query = "select * from job where  id='$v1' ";   
		$search_Result = mysqli_query($connect, $search_Query); 
		if($search_Result)
		{
			if(mysqli_num_rows($search_Result))
			{
				while($row = mysqli_fetch_array($search_Result))
				{
					$c1 = $row['a1'];
					$c2 = $row['a2'];
					$c3 = $row['a3'];			 
					$c5 = $row['a5'];
					$c6 = $row['a6'];			 
					$c8 = $row['a8'];
					$c10 = $row['a10'];
					
					
					$a18=$row['a18'];
					$a19=$row['a19']; 
					$a20=$row['a20'];
					
					$a21=$row['a21']; 
					$a22=$row['a22'];
					$a17=$row['a17'];
					$a23=$row['a23'];
					
					$age=explode(',',$row['a7']); 
					$test= $row['a7'];
					$r1= $row['r1'];
					
					$a16=$row['a16'];
				}
			}else{}
			}else{     
		}$jobUpdate ='1';$createjob ='0';	
		
	}	
	
	
	// Update the Exsisting job
	if(isset($_POST['updateNow'])){
		$c1=$_POST['n1']; //Jop types
		$c2=$_POST['n2'];//	Deadline:
		$c3=$_POST['n3'];//Status:
		$c4=$_POST['n4'];//Created Date:
		
		$c8=$_POST['c8']; 
		$date1 = new DateTime($c2);
		$date2 = new DateTime($c4);
		$ID=$_POST['ID']; 
		$a10=$_POST['c10']; 
		
		$a16=$_POST['a16']; 
		$a18=$_POST['a18']; 
		$a19=$_POST['a19']; 
		$a20=$_POST['a20'];		
		
		$a21=$_POST['a21']; 
		$a22=$_POST['a22']; 
		$a17=$_POST['a17']; 
		
		$r1=$_POST['r1']; 
		
		$diff = $date2->diff($date1)->format("%a");
		$age =implode(',', $_POST['age']); 
		
		$sqlx = "UPDATE job SET a1='$c1', a2='$c2', a3='$c3', a5='$c5', a7='$age', a8='$c8' , a9='$diff', a10='$a10' , r1='$r1', a16='$a16', a18='$a18' , a19='$a19' , a20='$a20' , a21='$a21' , a22='$a22' , a17='$a17' WHERE a6='$ID' ";
		
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
	// Update the Exsisting job
	//Delete
	if(isset($_POST['deleteNow'])){
		include('../config.php');  
		$ID=$_POST['ID']; 
		$query = "DELETE FROM job WHERE a6='$ID'";
		if (mysqli_query($conn, $query)) {
			phpAlert("Data Deleted Successfully...") ;
			} else {
			echo 'Failed';
		}
		
	}
	
	// Create Job
	if(isset($_POST['check'])){
		$c1=$_POST['n1']; //Jop types
		$c2=$_POST['n2'];//	Deadline:
		$c3=$_POST['n3'];//Status:
		$c4=$_POST['n4'];//Created Date:
		$c8=$_POST['c8']; 
		$a16=$_POST['a16']; 
		$a18=$_POST['a18']; 
		$a19=$_POST['a19']; 
		$a20=$_POST['a20']; 
		
		$a21=$_POST['a21']; 
		$a22=$_POST['a22']; 
		$a17=$_POST['a17']; 
		
		
		$r1=$_POST['r1']; 
		$date1 = new DateTime($c2);
		$date2 = new DateTime($c4);
		$diff = $date2->diff($date1)->format("%a");
		$age =implode(',', $_POST['age']); 
		$a10=$_POST['c10']; 
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
		$date=date("dS-M-Y");
		phpAlert("ok");
		
		$target = "uploads/pic/".basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];
		
		$sqlx = "INSERT INTO job (a1,a2,a3,a5,a6,a7,a8,a9,a4,a10,r1,a16,a18,a19,a20,a21,a22,a17,a23) VALUES ('$c1','$c2','$c3','$c5','$c6','$age','$c8','$diff','$date','$a10','$r1','$a16','$a18','$a19','$a20','$a21','$a22','$a17','$image')";
		try{
			include('../config.php');
			$update_Result = mysqli_query($conn, $sqlx);			
			if($update_Result)
			{
				
				
				
				if(mysqli_affected_rows($conn) > 0)
				{		 
					if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
						//$msg = "Image uploaded successfully";
						
						}else{
						//	$msg = "Failed to upload image";
					}	
					phpAlert("Success");
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

    $qryTotal = "SELECT * FROM  job    ";
	$resultTotal=mysqli_query($conn,$qryTotal);
	$count1=mysqli_num_rows($resultTotal);
	
// Row count from table Total Applicant
	include('../config.php');
	$applicant='Male';
    $qryTotal = "SELECT * FROM  job  WHERE   a16 = '$applicant' ";
	$resultTotal=mysqli_query($conn,$qryTotal);
	$count1=mysqli_num_rows($resultTotal);
 
	
 
	$applicant='Female';
    $qryTotalFemale = "SELECT * FROM  job  WHERE  a16 = '$applicant'  ";
	$resultTotal=mysqli_query($conn,$qryTotalFemale);
	$count2=mysqli_num_rows($resultTotal);
 
	
	$applicant='Bangladesh';
    $qryBD = "SELECT * FROM  job  WHERE a10 = '$applicant' ";
	$resultTotal=mysqli_query($conn,$qryBD);
	$count3=mysqli_num_rows($resultTotal);
 
	$count4=$count1+$count2;
	
	if($count1===0){$male=0;}else{$male=$count1*100/$count4; }
	if($count2===0){$female=0;}else{$female=$count2*100/$count4; }

	 $qryTotal7 = "SELECT * FROM  job   WHERE a3='Disable' ";
	$resultTotal7=mysqli_query($conn,$qryTotal7);
	$count7=mysqli_num_rows($resultTotal7);
	
	$qryTotal8 = "SELECT * FROM  job  WHERE a3='Available' ";
	$resultTotal8=mysqli_query($conn,$qryTotal8);
	$count8=mysqli_num_rows($resultTotal);
	
    $qryTotal9 = "SELECT * FROM  job    ";
	$resultTotal9=mysqli_query($conn,$qryTotal9);
	$count9=mysqli_num_rows($resultTotal9);
//Marital
    $qryTotal91 = "SELECT * FROM  job  WHERE a1='Married'   ";
	$resultTotal91=mysqli_query($conn,$qryTotal91);
	$count91=mysqli_num_rows($resultTotal91);
//Validity
	 $qryTotal92 = "SELECT * FROM  job    WHERE b3>0  ";
	$resultTotal92=mysqli_query($conn,$qryTotal92);
	$count92=mysqli_num_rows($resultTotal92);
// 
	 $qryTotal93 = "SELECT * FROM  job    WHERE a3='Available' ";
	$resultTotal93=mysqli_query($conn,$qryTotal93);
	$count93=mysqli_num_rows($resultTotal93);
 
	
	
	
	
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
			
			
			
			
			<!-- Content Wrapper. Contains page content -->	<form class="  " method="POST" enctype="multipart/form-data">
				<div class="content-wrapper"style="background-color:#ecf0f5;">
					
					
					<!-- View -->
					<!-- Update Job --><?php if ( $jobUpdate === '0') {echo '<!--'; }else{echo ''; } 	 ?>
					<section class="invoice wow fade wow fadeIn animated sb"style="margin-top:10px;    border: 2px solid #01ade1;">
						<div class="row">
							<div class="col-xs-12">
								<h2 class="page-header" >  <center> 
								<img class="img-responsive" src="../../img/logo.png" alt="Chania" width="120"  >  <aa style="color:gray;"><i class="fa fa-globe"></i>Renew of New Refugee</aa>	</center> 
								<small class=" "><i>Name: <input autofocus style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php echo $c8; ?>" name="c8">  </i>
									<i style="padding-left:10px;"> Age: <input autofocus style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php echo $c10; ?>" name="c10">  </i>
								</small>
								</h2><input class="invisible"   type="text"value="<?php  echo $c6; ?>" name="ID">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 table-responsive ">
								<table class="table table-striped well ">
									<tbody >
										<tr>
											<td></br></td>
											<td ><b>Marital Status:</b></td>
											<td>
												<select name="n1"class="  bg-olive btn-flat">                        
													<option value="Married"<?php if($c1=="Married") echo "selected";?>>Married</option>                        
													<option value="Unmarried"<?php if($c1=="Unmarried") echo "selected";?>>Unmarried</option> 
												</select>
											</td>
											<td><b>Date of Birth:</b></td>
											<td> 
												<div class="input-group date   bg-purple btn-flat ">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													
													<input type="date" name="n2"value="<?php  echo $c3; ?>"  class="form-control pull-right" value="<?php echo date('Y-m-d'); ?>" />
												</div>
											</td>					
											<td><b>Status:</b></td>
											<td>                        
												<select name="n3"class="  bg-olive btn-flat">                             
													<option value="Disable"<?php if($c3=="Disable") echo "selected";?>>Available</option>                        
													<option value="Enable"<?php if($c3=="Enable") echo "selected";?>>Left</option> 
												</select></td>
												<td><b>Gender:</b></td>
												<td>
													<select name="a16"class="  bg-olive btn-flat">                        
														<option value="Male"<?php if($a16=="Male") echo "selected";?>>Male</option>                        
														<option value="Female"<?php if($a16=="Female") echo "selected";?>>Female</option> 
													</select>
												</td>
												
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="col-xs-6">
									<i>Child: <input name="a18"  class="form-control ng-pristine ng-untouched ng-valid"type="text"value="<?php  echo $a18; ?>"  >  </i>
									<i style="padding-left:10px;"> Origin Region:  <input  name="a19"  class="form-control ng-pristine ng-untouched ng-valid"type="text"value="<?php echo $a19; ?>"  > 
										<i style="padding-left:10px;"> Origin Country: <input name="a20"   class="form-control ng-pristine ng-untouched ng-valid"type="text"value="<?php echo $a20; ?>"  > </i>
										
									</h2>
								</div>
								<div class="col-xs-6"style=" ">
									<i>Current State: <input name="a21"     class="form-control ng-pristine ng-untouched ng-valid"type="text"value="<?php  echo $a21;  ?>" >  </i>
									<i style="padding-left:10px;"> Current Country:  <input name="a22"    class="form-control ng-pristine ng-untouched ng-valid"type="text"value="<?php  echo $a22;  ?>" > 
									</i>
									
								</h2>
							</div>
							<td><b>Blood Group:</b></td>
							<td>
								<select name="a17"class="  bg-olive btn-flat">                        
									<option value="A+"<?php if($a17=="A+") echo "selected";?>>A+</option>                        
									<option value="A-"<?php if($a17=="A-") echo "selected";?>>A-</option> 
									<option value="B+"<?php if($a17=="B+") echo "selected";?>>B+</option> 
									<option value="B-"<?php if($a17=="B-") echo "selected";?>>B-</option> 
									<option value="O+"<?php if($a17=="O+") echo "selected";?>>O+</option> 
									<option value="O-"<?php if($a17=="O-") echo "selected";?>>O-</option> 
									<option value="AB+"<?php if($a17=="AB+") echo "selected";?>>AB+</option> 
									<option value="AB-"<?php if($a17=="AB-") echo "selected";?>>AB-</option> 
								</select>
							</td>
							
						</div>
					</div>
					
					
					<?php  ?>
					
					
					<div class="row">			
						<div class="col-xs-6">
							<p class="lead  "style="text-align:right;"><b>Profile Picture :</b></p> 
							<div class="table-responsive">
								<table class="table">
									
									<tr>
										<th style="width:50%">Registration ID (Unique):</th>
										<td>
											<small class="pull-centered"><i> <?php echo $c6; ?></i></small>
											
										</td>
									</tr>									
									<tr>
										<th style="width:50%">Create Date:</th>
										<td>
											<input type="date" name="n4" disabled    />
										</td>
									</tr>
									<tr>
										<th>Created By:</th>
										<td>Admin</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="col-xs-6"style="margin-bottom:20px;">
							<img src="uploads/pic/<?php echo $a23; ?>"height="200px;" class="img-rounded" alt="Cinque Terre">
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
							<div class="col-xs-12  ">
								Circular Details
								<textarea id="editor1" value="" name="r1" rows="10" cols="80"><?php  echo $r1; ?></textarea>
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
										
										<input class="invisible" type="text" name="v1" value="103">		
										<input type="submit" name="updateNow" value="Update" style="width:120%"class="btn bg-olive btn-flat">
									</div>
									
									<div class="col-xs-3">
										
										<input class="invisible" type="text" name="xx2" value="<?php echo $id  ; ?>">		
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
							<img class="img-responsive" src="../../img/logo.png" alt="Chania" width="120"  >  <aa style="color:gray;"><i class="fa fa-globe"></i>Registration of New Refugee</aa>	</center>
							
							<small class=" "><i>Name: <input autofocus style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php //echo $c8; ?>" name="c8">  </i>
								<i style="padding-left:10px;"> Age: <input autofocus style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php //echo $c8; ?>" name="c10">  </i>
							</small>
							</h2>
							
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 table-responsive ">
							<table class="table table-striped well ">
								<tbody >
									<tr>
										<td></br></td>
										<td ><b>Marital Status:</b></td>
										<td>
											<select name="n1"class="  bg-olive btn-flat">                        
												<option value="Married"<?php if($c1=="Married") echo "selected";?>>Married</option>                        
												<option value="Unmarried"<?php if($c1=="Unmarried") echo "selected";?>>Unmarried</option> 
											</select>
										</td>
										<td><b>Date of Birth:</b></td>
										<td> 
											<div class="input-group date   bg-purple btn-flat ">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												
												<input type="date" name="n2" class="form-control pull-right" value="<?php if($c2===''){echo date('Y-m-d');} echo $c2;  ?>" />
											</div>
										</td>					
										<td><b>Status:</b></td>
										<td>                        
											<select name="n3"class="  bg-olive btn-flat">                             
												<option value="Available"<?php if($c3=="Available") echo "selected";?>>Available</option>                        
												<option value="Left"<?php if($c3=="Left") echo "selected";?>>Left</option> 
											</select></td>	
											<td><b>Gender:</b></td>
											<td>
												<select name="a16"class="  bg-olive btn-flat">                        
													<option value="Male"<?php if($a16=="Male") echo "selected";?>>Male</option>                        
													<option value="Female"<?php if($a16=="Female") echo "selected";?>>Female</option> 
												</select>
											</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="col-xs-6">
								<i>Child: <input   class="form-control ng-pristine ng-untouched ng-valid"type="text"value="<?php //echo $c8; ?>" name="a18">  </i>
								<i style="padding-left:10px;"> Origin Region:  <input  class="form-control ng-pristine ng-untouched ng-valid"type="text"value="<?php //echo $c8; ?>" name="a19"> 
									<i style="padding-left:10px;"> Origin Country: <input   class="form-control ng-pristine ng-untouched ng-valid"type="text"value="<?php //echo $c8; ?>" name="a20"> </i>
									
								</h2>
							</div>
							<div class="col-xs-6" >
								<i>Current State: <input   class="form-control ng-pristine ng-untouched ng-valid"type="text"value="<?php //echo $c8; ?>" name="a21">  </i>
								<i style="padding-left:10px;"> Current Country:  <input  class="form-control ng-pristine ng-untouched ng-valid"type="text"value="<?php //echo $c8; ?>" name="a22"> 
								</i>
								
							</h2>
							
						</div>
						<td><b>Blood Group:</b></td>
						<td>
							<select name="a17"class="  bg-olive btn-flat">                        
								<option value="A+"<?php if($a17=="A+") echo "selected";?>>A+</option>                        
								<option value="A-"<?php if($a17=="A-") echo "selected";?>>A-</option> 
								<option value="B+"<?php if($a17=="B+") echo "selected";?>>B+</option> 
								<option value="B-"<?php if($a17=="B-") echo "selected";?>>B-</option> 
								<option value="O+"<?php if($a17=="O+") echo "selected";?>>O+</option> 
								<option value="O-"<?php if($a17=="O-") echo "selected";?>>O-</option> 
								<option value="AB+"<?php if($a17=="AB+") echo "selected";?>>AB+</option> 
								<option value="AB-"<?php if($a17=="AB-") echo "selected";?>>AB-</option> 
							</select>
						</td>
					</div>
				</div>
				<?php  ?>
				
				
				<div class="row">			
					<div class="col-xs-6">
						
						<div class="table-responsive">
							<table class="table">
								
								<tr>
									<th style="width:50%">Registration ID (Unique):</th>
									<td>
										<small class="pull-centered"><i> <?php echo $c6; ?></i></small>
										
									</td>
								</tr>									
								<tr>
									<th style="width:50%">Create Date:</th>
									<td>
										<input type="date" name="n4" disabled value="<?php echo date('Y-m-d'); ?>" />
									</td>
								</tr>
								<tr>
									<th>Created By:</th>
									<td>Admin</td>
								</tr>
							</table>
						</div>
					</div>
					
					<div class="col-xs-6">
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Image</label>												
							<div class="col-sm-10">
								<input type="file" name="image">																			
							</div>
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
					<div class="col-xs-12  ">
						<textarea id="editor1" value="<?php  echo $r1; ?>" name="r1" rows="10" cols="80"></textarea>
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
						<div class="inner">
							<h3><?php echo($count9); ?></h3>
							<p>Total Registered Refugees</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<div class="col-xs-3">
							<form class="row no-print " method="POST">
								<input class="invisible" type="text" name="xx2" value="<?php echo $id  ; ?>">		
								<input type="submit" name="create" value="Add New" class="btn bg-maroon btn-flat">
							</form>	
						</div>
						<div class="col-xs-3"></div>
						
						<!--       <button  class="small-box-footer"data-toggle="modal" data-target="#modal-primary" style="border:0px;width:100%;">View More <i class="fa fa-arrow-circle-right"></i></button>-->
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-green">
						<div class="inner">
							<h3><?php echo((int)$male); ?><sup style="font-size: 20px">%</sup></h3>
							<p>Male Refugees</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-xs-6">
					
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3><?php echo((int)$female); ?><sup style="font-size: 20px"> %</sup></h3>
							<p>Female Refugees</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-red">
						<div class="inner">
							<h3><?php echo($count7); ?><sup style="font-size: 20px"> </sup></h3>
							
							<p>Recently Migrated</p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-xs-6">
					<div class="small-box  bg-aqua">
						<div class="inner">
							<h3><?php echo($count93); ?></h3>
							<p>Total Available Refugees</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
 
						<div class="col-xs-3"></div>
						
						<!--       <button  class="small-box-footer"data-toggle="modal" data-target="#modal-primary" style="border:0px;width:100%;">View More <i class="fa fa-arrow-circle-right"></i></button>-->
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="small-box bg-green">
						<div class="inner">
							<h3><?php echo((int)$count91); ?><sup style="font-size: 20px"></sup></h3>
							<p>Total Married</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-xs-6">
					
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3><?php echo($count92); ?><sup style="font-size: 20px"> </sup></h3>
							<p>Need to Renew</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
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
							<h3 class="box-title">Listed</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>SL</th>
										<th>Reg ID</th>
										<th>Name</th>
										<th>Bate of Birth</th>
										<th>Gender</th>
										<th>Blood Group</th>
										<th>Status</th>
										<th></th> 
									</tr>
								</thead>
								<tbody>
									<?php		
										
										$qry="select * from job  ";
										$result=mysqli_query($conn,$qry);
										$rowcount=mysqli_num_rows($result);
										$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
										$sl='1';
										for($i=$rowcount-1;$i>=0;$i--)
										{
											echo '<tr>	
											<td>'.$sl.'</td>
											<td>'.$row[$i]['a6'].'</td>
											<td>'.$row[$i]['a8'].'</td>
											<td>'.$row[$i]['a2'].'</td>
											<td>'.$row[$i]['a2'].'</td>
											<td>'.$row[$i]['a17'].'</td>
											<td>'.$row[$i]['a3'].'</td>
											<td>'.'<div class="row no-print">
											<form  class="row no-print " method="POST"> 
											<input class="invisible"type="text" name="v1" value="'.$row[$i]['id'].'">	
											<input type="submit" name="viewthis"value="View details" class="btn btn-warning btn-xs"></input> 
											</form>     
											</div>'.'</td>
											
											
											</tr>';	
											$sl=$sl+1;	
										}
										
										
										
										
									?>
								</tbody>
								<tfoot>
									<tr>
										<th>SL</th>
										<th>Reg ID</th>
										<th>Name</th>
										<th>Bate of Birth</th>
										<th>Gender</th>
										<th>Blood Group</th>
										<th>Status</th>
										<th></th>
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
