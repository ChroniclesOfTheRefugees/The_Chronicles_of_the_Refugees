<?php $currentPage1 = 'Career'; ?>
<?php $currentPage2 = 'Setting'; ?>








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
					$age=explode(',',$row['a7']); 
					$test= $row['a7'];
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
		
		$diff = $date2->diff($date1)->format("%a");
		$age =implode(',', $_POST['age']); 
		
		$sqlx = "UPDATE job SET a1='$c1', a2='$c2', a3='$c3', a5='$c5', a7='$age', a8='$c8' , a9='$diff', a10='$a10' WHERE a6='$ID' ";
		
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
		
		
		$sqlx = "INSERT INTO job (a1,a2,a3,a5,a6,a7,a8,a9,a4,a10) VALUES ('$c1','$c2','$c3','$c5','$c6','$age','$c8','$diff','$aa6','$a10')";
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
    $qryTotal = "SELECT * FROM  job  LIMIT 1,78787878  ";
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
		
	</head>
	<body  class="hold-transition skin-blue sidebar-mini skin-blue sidebar-mini wysihtml5-supported fixed">
		<div class="wrapper"scroll="no" style="overflow: hidden">
			
			
			<?php include('menu.php');?>		
			
			
			
			
			<!-- Content Wrapper. Contains page content -->	<form class="  " method="POST">
			<div class="content-wrapper"style="background-color:#ecf0f5;">
			
			
				<!-- View -->
				<!-- Update Job --><?php if ( $jobUpdate === '0') {echo '<!--'; }else{echo ''; } 	 ?>
				<section class="invoice wow fade wow fadeIn animated sb"style="margin-top:10px;    border: 2px solid #01ade1;">
					<div class="row">
						<div class="col-xs-12">
							<h2 class="page-header" >  <center> 
							<img class="img-responsive" src="../../img/logo.png" alt="Chania" width="120"  >  <aa style="color:gray;"><i class="fa fa-globe"></i>Job Create And Management(Update)</aa>	</center> 
							<small class=" "><i><b>Job Title: </b><input  style="border:0px;  width:300px; padding-left:5px; " type="text"value="<?php  echo $c8; ?>" name="c8">  </i><i><b>Vacency: </b><input  style="border:0px;  width:300px; padding-left:5px; " type="text"value="<?php  echo $c10; ?>" name="c10">  </i></small>
							</h2><input class="invisible"   type="text"value="<?php  echo $c6; ?>" name="ID">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 table-responsive ">
							<table class="table table-striped well ">
								<tbody >
									<tr>
										<td></br></td>
										<td ><b>Jop types:</b></td>
										<td>
											<select name="n1"class="  bg-olive btn-flat">                        
												<option value="Full Time"<?php if($c1=="Full Time") echo "selected";?>>Full Time</option>                        
												<option value="Part Time"<?php if($c1=="Part Time") echo "selected";?>>Part Time</option> 
											</select>
										</td>
										<td><b>Deadline:</b></td>
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
												<option value="Disable"<?php if($c3=="Disable") echo "selected";?>>Disable</option>                        
												<option value="Enable"<?php if($c3=="Enable") echo "selected";?>>Enable</option> 
											</select></td>	
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<?php  ?>
					
					
					<div class="row">			
						<div class="col-xs-4">
							<p class="lead  "style="text-align:right;"><b>Positions :</b></p> 
							<div class="table-responsive">
								<table class="table">
									
									<tr>
										<th style="width:50%">Job ID (Unique):</th>
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
										<td><?php echo $c5; ?></td>
									</tr>
								</table>
							</div>
						</div>
						
						<div class="col-xs-8">
								<div class="col-xs-6">		
									<ul class="list-group list-group-flush" >
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"style="padding:0;margin:0;"><input id="checkbox1"  name="age[0]" value="Graphics" type="checkbox" <?php if( in_array('Graphics',$age)) echo "checked";?>>
												<label for="checkbox1">Graphics Design</label>
											</div>                   
											
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox2"  name="age[1]"  value="Web" type="checkbox" <?php if( in_array('Web',$age)) echo "checked";?>>
												<label for="checkbox2">Web Development</label>
											</div>    
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox3"  name="age[2]"  value="Android" type="checkbox" <?php if( in_array('Android',$age)) echo "checked";?>>
												<label for="checkbox3">Android Development</label>
											</div> 
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox4"  name="age[3]" value="Game" type="checkbox" <?php if( in_array('Game',$age)) echo "checked";?>>
												<label for="checkbox4">Game Development</label>
											</div> 
										</li>
									</ul>	
								</div> 
								<div class="col-xs-6">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox5"  name="age[4]" value="System" type="checkbox" <?php if( in_array('System',$age)) echo "checked";?>>
												<label for="checkbox5">System Design</label>
											</div>  
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox6"  name="age[5]" value="English" type="checkbox" <?php if( in_array('English',$age)) echo "checked";?>>
												<label for="checkbox6">English Specialist </label>
											</div>
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox7"  name="age[6]" value="Customer" type="checkbox" <?php if( in_array('Customer',$age)) echo "checked";?>>
												<label for="checkbox7">Customer Support </label>
											</div> 
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox8"  name="age[7]"  value="Marketing" type="checkbox" <?php if( in_array('Marketing',$age)) echo "checked";?>>
												<label for="checkbox8">Marketing Officer</label>
											</div>  
										</li>
										<li class="list-group-item invisible">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox9"  name="age[8]"  value="Undeclar" type="checkbox"  checked ;?>>
												<label for="checkbox9">Marketing Officer</label>
											</div>  
										</li>
									</ul>			
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
							<img class="img-responsive" src="../../img/logo.png" alt="Chania" width="120"  >  <aa style="color:gray;"><i class="fa fa-globe"></i>Job Create And Management(Create)</aa>	</center> 
							<small class=" "><i>Job Title: <input autofocus style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php //echo $c8; ?>" name="c8">  </i><i> Vacency: <input autofocus style="border:0px; background-color:#f0f0f0;width:300px; padding-left:5px; " type="text"value="<?php //echo $c8; ?>" name="c10">  </i></small>
							</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 table-responsive ">
							<table class="table table-striped well ">
								<tbody >
									<tr>
										<td></br></td>
										<td ><b>Jop types:</b></td>
										<td>
											<select name="n1"class="  bg-olive btn-flat">                        
												<option value="Full Time"<?php if($c1=="Full Time") echo "selected";?>>Full Time</option>                        
												<option value="Part Time"<?php if($c1=="Part Time") echo "selected";?>>Part Time</option> 
											</select>
										</td>
										<td><b>Deadline:</b></td>
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
												<option value="Disable"<?php if($c3=="Disable") echo "selected";?>>Disable</option>                        
												<option value="Enable"<?php if($c3=="Enable") echo "selected";?>>Enable</option> 
											</select></td>	
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<?php  ?>
					
					
					<div class="row">			
						<div class="col-xs-4">
							<p class="lead  "style="text-align:right;"><b>Positions :</b></p> 
							<div class="table-responsive">
								<table class="table">
									
									<tr>
										<th style="width:50%">Job ID (Unique):</th>
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
										<td><?php echo $c5; ?></td>
									</tr>
								</table>
							</div>
						</div>
						
						<div class="col-xs-8">
								<div class="col-xs-6">		
									<ul class="list-group list-group-flush" >
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"style="padding:0;margin:0;"><input id="checkbox1"  name="age[0]" value="Graphics" type="checkbox" <?php if( in_array('Graphics',$checked)) echo "checked";?>>
												<label for="checkbox1">Graphics Design</label>
											</div>                   
											
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox2"  name="age[1]"  value="Web" type="checkbox" <?php if( in_array('Web',$checked)) echo "checked";?>>
												<label for="checkbox2">Web Development</label>
											</div>    
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox3"  name="age[2]"  value="Android" type="checkbox" <?php if( in_array('Android',$checked)) echo "checked";?>>
												<label for="checkbox3">Android Development</label>
											</div> 
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox4"  name="age[3]" value="Game" type="checkbox" <?php if( in_array('Game',$checked)) echo "checked";?>>
												<label for="checkbox4">Game Development</label>
											</div> 
										</li>
									</ul>	
								</div> 
								<div class="col-xs-6">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox5"  name="age[4]" value="System" type="checkbox" <?php if( in_array('System',$checked)) echo "checked";?>>
												<label for="checkbox5">System Design</label>
											</div>  
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox6"  name="age[5]" value="English" type="checkbox" <?php if( in_array('English',$checked)) echo "checked";?>>
												<label for="checkbox6">English Specialist </label>
											</div>
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox7"  name="age[6]" value="Customer" type="checkbox" <?php if( in_array('Customer',$checked)) echo "checked";?>>
												<label for="checkbox7">Customer Support </label>
											</div> 
										</li>
										<li class="list-group-item">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox8"  name="age[7]"  value="Marketing" type="checkbox" <?php if( in_array('Marketing',$checked)) echo "checked";?>>
												<label for="checkbox8">Marketing Officer</label>
											</div>  
										</li>
										<li class="list-group-item invisible">
											<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox9"  name="age[8]"  value="Undeclar" type="checkbox"  checked ;?>>
												<label for="checkbox9">Marketing Officer</label>
											</div>  
										</li>
									</ul>			
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
									<h3><?php echo($count1); ?></h3>
									<p>Total Job</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
								<div class="col-xs-3">
									<form class="row no-print " method="POST">
										<input class="invisible" type="text" name="xx2" value="<?php echo $id  ; ?>">		
										<input type="submit" name="create" value="Create Job" class="btn bg-maroon btn-flat">
									</form>	
								</div>
								<div class="col-xs-3"></div>
 
								<!--       <button  class="small-box-footer"data-toggle="modal" data-target="#modal-primary" style="border:0px;width:100%;">View More <i class="fa fa-arrow-circle-right"></i></button>-->
							</div>
						</div>
						<div class="col-lg-3 col-xs-6">
							<div class="small-box bg-green">
								<div class="inner">
									<h3><?php echo($count2); ?><sup style="font-size: 20px"> </sup></h3>
									<p>Total Enable Job</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-xs-6">
							
							<div class="small-box bg-yellow">
								<div class="inner">
									<h3><?php echo($count3); ?><sup style="font-size: 20px"> </sup></h3>
									<p>Total Disable Job</p>
								</div>
								<div class="icon">
									<i class="ion ion-stats-bars"></i>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-xs-6">
							<div class="small-box bg-red">
								<div class="inner">
									<h3><?php echo($count4); ?><sup style="font-size: 20px"> </sup></h3>
									
									<p>Completed Job</p>
								</div>
								<div class="icon">
									<i class="ion ion-pie-graph"></i>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<!-- /.row (main row) -->
					
				</section>
				<!--Querry -->
				<section class="content row no-print wow fade wow fadeIn animated">
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Created Job</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>SL</th>
												<th>Job ID</th>
												<th>Job Title</th>
												<th>Created Date</th>
												<th>Deadline</th>
												<th>Status</th>
												<th>Remaining Days</th>
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
												for($i=$rowcount-1;$i>0;$i--)
												{
													echo '<tr>	
													<td>'.$sl.'</td>
													<td>'.$row[$i]['a6'].'</td>
													<td>'.$row[$i]['a8'].'</td>
													<td>'.$row[$i]['d1'].'</td>
													<td>'.$row[$i]['a2'].'</td>
													<td>'.$row[$i]['a3'].'</td>
													<td>'.$row[$i]['a9'].'</td>
													<td>'.'<input class="invisible" type="text" name="v1" value="'.$row[$i]['id'].'">		
										<input type="submit" name="viewthis" value="view" class="btn bg-maroon btn-flat">'.'</td>
 
													</tr>';	
													$sl=$sl+1;	
												}
												
											?>
										</tbody>
										<tfoot>
											<tr>
												<th>SL</th>
												<th>Job ID</th>
												<th>Job Title</th>
												<th>Created Date</th>
												<th>Deadline</th>
												<th>Status</th>
												<th>Remaining Days</th>
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
		
		
		
		
		<script src="bower_components/jquery/dist/jquery.min.js"></script>
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
	</body>
</html>
