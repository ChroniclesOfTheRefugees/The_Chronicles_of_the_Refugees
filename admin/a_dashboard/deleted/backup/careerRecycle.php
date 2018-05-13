<?php $currentPage1 = 'Career'; ?>
<?php $currentPage2 = 'Recycle'; ?>








<?php
	include('include/cRvariables.php');
	$rowcount1="";	
     include('../config.php');
	
	
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
			
			require_once('../../../Admin/login/mailer/class.phpmailer.php');
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
					$b12 = $row['b12'];
					$checked=explode(',',$row['a15']); 
					
				}
			}else{}
			}else{     
		}
		
	}	
	
	
		// Update
	if(isset($_POST['view2'])){
		
		$v1=$_POST['v1'];
		phpAlert($v1);
		
	}	
	
	
	
	
	
	// Update
	if(isset($_POST['approve'])){
		$xx1='';
		$xx2=$_POST['xx1'];
		$sqlx = "UPDATE career SET b9='$xx1',b12='$xx1',b10='$xx1' ,b13='0' WHERE id='$xx2' ";
		
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
	
	// Update
	if(isset($_POST['denied'])){
		$xx='1';
		$xx3='7';
		$xx2=$_POST['xx2'];
		$sqlx = "UPDATE career SET b11='$xx',b12='$xx3' WHERE id='$xx2' AND b12='' ";
		
		try{
			include('../config.php');
			$update_Result = mysqli_query($conn, $sqlx);			
			if($update_Result)
			{
				if(mysqli_affected_rows($conn) > 0)
				{		 
					phpAlert("It Takes 7 Days for Delete");					  
				}else{phpAlert("You Already delete this");		}
			}
			} catch (Exception $ex) {
		}
	}
	
		// Update
	if(isset($_POST['check'])){
		$xx='1';
	    $age =implode(',', $_POST['age']);
		$sqlx = "UPDATE career SET a15='$age' WHERE id='3' ";
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
	
		// Update
	if(isset($_POST['cancel'])){
		$p2='';
 
	}
 
 
	$c4='1';
// Row count from table Total Applicant
	include('../config.php');
 
    $qry="select * from career where b5=0 AND b6=0 AND b7=0 AND b8=0 AND b9=1 OR b10=1 ";
	$resultTotal=mysqli_query($conn,$qry);
	$c1=mysqli_num_rows($resultTotal);
 
    $qry="select * from career where b5=0 AND b6=0 AND b7=0 AND b8=0 AND b9=1 OR b10=1";
	$resultTotal=mysqli_query($conn,$qry);
	$c2=mysqli_num_rows($resultTotal);
 
    $qry="select * from career where b5=0 AND b6=0 AND b7=0 AND b8=0 AND b12=0   AND b9=1 OR b10=1 ";
	$resultTotal=mysqli_query($conn,$qry);
	$c2=mysqli_num_rows($resultTotal);

	
	$applicant='Bangladesh';
    $qryBD = "SELECT * FROM  career  WHERE a10 = '$applicant' ";
	$resultTotal=mysqli_query($conn,$qryBD);
	$count3=mysqli_num_rows($resultTotal);
 
 
	
 
	
 

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
			
			
			
			
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper"style="background-color:#ecf0f5;">

				
				<!-- Details -->
				<?php if ( $p2 === '') {echo '<!--'; }	 ?>
				<section class="invoice wow fade wow fadeIn animated"style="margin-top:0px;margin-top:10px;    border: 2px solid #01ade1;">
					<div class="row">
						<div class="col-xs-12">
							<h2 class="page-header" >  <center> 
							<img class="img-responsive" src="../../img/logo.png" alt="Chania" width="120"  >  <aa style="color:gray;"><i class="fa fa-globe"></i> Job/Intern Application</aa>	</center> 
							<small class="pull-centered"><i>Circular Code: 1578</i></small>
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
										<td><b>Application Date:</b></td>
										<td> 2/22/2014</td>
										
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
					
						<div class="col-xs-3">
						 <p class="lead  "style="text-align:right;"><b>Skills:</b></p> 
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
						<div class="col-xs-9">
						
						<form class="  " method="POST">
							<div class="col-xs-3">		
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
                    <div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"style="padding:0;margin:0;"><input id="checkbox1"disabled="" name="age[0]" value="HTML" type="checkbox" <?php if( in_array('HTML',$checked)) echo "checked";?>>
                        <label for="checkbox1">HTML</label>
                    </div>                   
     
									</li>
									<li class="list-group-item">
				<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox2"  name="age[1]" disabled=""value="CSS" type="checkbox" <?php if( in_array('CSS',$checked)) echo "checked";?>>
                        <label for="checkbox2">CSS</label>
                    </div>    
									</li>
									<li class="list-group-item">
				<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox3"  name="age[2]" disabled=""value="Php" type="checkbox" <?php if( in_array('Php',$checked)) echo "checked";?>>
                        <label for="checkbox3">Php</label>
                    </div> 
									</li>
									<li class="list-group-item">
                    <div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox4"  name="age[3]"disabled="" value="Asp.net" type="checkbox" <?php if( in_array('Asp.net',$checked)) echo "checked";?>>
                        <label for="checkbox4">Asp.net</label>
                    </div> 
									</li>
								</ul>	
							</div> 
							<div class="col-xs-3">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
				<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox5"  name="age[4]" disabled=""value="Oracle" type="checkbox" <?php if( in_array('Oracle',$checked)) echo "checked";?>>
                        <label for="checkbox5">Oracle </label>
                    </div>  
									</li>
									<li class="list-group-item">
				<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox6"  name="age[5]" disabled=""value="Sql" type="checkbox" <?php if( in_array('Sql',$checked)) echo "checked";?>>
                        <label for="checkbox6">Sql </label>
                    </div>
									</li>
									<li class="list-group-item">
                    <div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox7"  name="age[6]"disabled="" value="JS" type="checkbox" <?php if( in_array('JS',$checked)) echo "checked";?>>
                        <label for="checkbox7">JS </label>
                    </div> 
									</li>
									<li class="list-group-item">
				<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox8"  name="age[7]" disabled=""value="jQuery" type="checkbox" <?php if( in_array('jQuery',$checked)) echo "checked";?>>
                        <label for="checkbox8">jQuery</label>
                    </div>  
									</li>
								</ul>			
							</div>
							<div class="col-xs-3">		
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
                    <div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox10"  name="age[9]"disabled="" value="Json" type="checkbox" <?php if( in_array('Json',$checked)) echo "checked";?>>
                        <label for="checkbox10">Json</label>
                    </div> 
									</li>
									<li class="list-group-item">
				<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox11"  name="age[10]" disabled=""value="WordPress" type="checkbox" <?php if( in_array('WordPress',$checked)) echo "checked";?>>
                        <label for="checkbox11">WordPress</label>
                    </div>  
									</li>
									<li class="list-group-item">
				<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox12"  name="age[11]"disabled="" value="Joomla" type="checkbox" <?php if( in_array('Joomla',$checked)) echo "checked";?>>
                        <label for="checkbox12">Joomla</label>
                    </div>
									</li>
									<li class="list-group-item">
                    <div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox13"  name="age[12]"disabled="" value="Photoshop" type="checkbox" <?php if( in_array('Photoshop',$checked)) echo "checked";?>>
                        <label for="checkbox13">Photoshop</label>
                    </div>   
									</li>
								</ul>	
							</div> 
							<div class="col-xs-3">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
				<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox14"  name="age[13]"disabled="" value="Illustrator" type="checkbox" <?php if( in_array('Illustrator',$checked)) echo "checked";?>>
                        <label for="checkbox14">Illustrator</label>
                    </div> 
									</li>
									<li class="list-group-item">
				<div class="checkbox checkbox-success checkbox-circle" style="padding:0;margin:0;"><input id="checkbox15"  name="age[14]"disabled="" value="After Effect" type="checkbox" <?php if( in_array('After Effect',$checked)) echo "checked";?>>
                        <label for="checkbox15">After Effect</label>
                    </div>
									</li>
 
								</ul>			
							</div>
							<input  type="submit" name="check" value="check" class="btn bg-maroon btn-flat invisible">

							</form>	
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
									<form class="row no-print " method="POST">
										<input class="invisible" type="text" name="v1" value="8">		
										<input type="submit" name="denied" value="View CV" class="btn bg-purple btn-flat">
									</form>	
								</div>
								
								<div class="col-xs-3">
									<form class="row no-print " method="POST">
										<input class="invisible" type="text" name="xx1" value="<?php echo $id  ; ?>">		
										<input type="submit" name="approve" value="Recovery" class="btn bg-olive btn-flat">
									</form>	
								</div>
								
								<div class="col-xs-3">
									<form class="row no-print " method="POST">
										<input class="invisible" type="text" name="xx2" value="<?php echo $id  ; ?>">		
									 	
										<input type="submit" <?php if($b12>0) {echo 'disabled';} ?> name="denied" value="Delete" class="btn bg-maroon btn-flat">
									</form>	
								</div>
								<div class="col-xs-3">
									<form class="row no-print " method="POST">
										<input class="invisible" type="text" name="xx2" value="<?php echo $id  ; ?>">		
										<input type="submit" name="cancel" value="cancel" class="btn bg-default btn-flat">
									</form>	
								</div>	
							</div>
							
							<li onclick="window.print();"><a href=""><i class="fa fa-print"></i> Print Application Form</a></li>	            	
						</div>
					</div>
				</section>		
				<?php if ( $p2 ==='') {echo '-->';}	 ?>
				
				
				
				
				
<section class="content row no print"style="min-height: 0px; ">
      <!-- Small boxes (Stat box) -->
      <div class="row">
 
		
        <div class="col-lg-3 col-xs-6">
          <div class="small-box  bg-aqua">
            <div class="inner">
              <h3><?php echo($c1); ?></h3>
              <p>Total Number</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
  <!--       <button  class="small-box-footer"data-toggle="modal" data-target="#modal-primary" style="border:0px;width:100%;">View More <i class="fa fa-arrow-circle-right"></i></button>-->
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo($c2); ?><sup style="font-size: 20px">%</sup></h3>
              <p>Leave Job</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo($c3); ?><sup style="font-size: 20px">%</sup></h3>
              <p>Denied From Viba</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo($c4); ?><sup style="font-size: 20px">%</sup></h3>

              <p>Denied From Permanent</p>
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
									<h3 class="box-title">Recycle Job </h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Gender</th>
												<th>Email</th>
												<th>Apply For</th>
												<th>preExperience</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<?php		
												$qry="select * from career where b5=0 AND b6=0 AND b7=0 AND b8=0 AND b9=1 OR b10=1     ";
												$result=mysqli_query($conn,$qry);
												$rowcount=mysqli_num_rows($result);
												$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
												
												for($i=$rowcount-1;$i>=0;$i--)
											{
										
										
										$k1='<div class="row no-print">			 <form  class="row no-print " method="POST"> <input class="invisible"type="text" name="v1" value="';
										$k2='">		 <input type="submit" name="view"value="Action" class="btn btn-warning btn-xs"></input> </form>     </div>';
										$k3=$row[$i]['b12'];
										
										$k4='<div class="row no-print">			 <form  class="row no-print " method="POST"> <input class="invisible"type="text" name="v1" value="';
										$k5='">		 <input type="submit" name="view"value="waiting-delete:'.$row[$i]['b12'].' '.'days'.'" class="btn btn-danger btn-xs"></input> </form>     </div>';
										
										if($k3===''){
											echo '<tr>	
											<td>'.$row[$i]['id'].'</td>
											<td>'.$row[$i]['a1'].'</td>
											<td>'.$row[$i]['a4'].'</td>
											<td>'.$row[$i]['a2'].'</td>
											<td>'.$row[$i]['a11'].'</td>
											<td>'.$row[$i]['a14'].' '.'years'.'</td>
											<td>'.$k1.$row[$i]['id'].$k2.'</td>
											</tr>';	}
											else{
		                                     echo '<tr>	
											<td>'.$row[$i]['id'].'</td>
											<td>'.$row[$i]['a1'].'</td>
											<td>'.$row[$i]['a4'].'</td>
											<td>'.$row[$i]['a2'].'</td>
											<td>'.$row[$i]['a11'].'</td>
											<td>'.$row[$i]['a14'].' '.'years'.'</td>
											<td>'.$k4.$row[$i]['id'].$k5.'</td>
											
											</tr>';											
												
												}
											
											}
											
											?>
											</tbody>
											<tfoot>
											<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Gender</th>
											<th>Email</th>
											<th>Apply For</th>
											<th>preExperience</th>
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
											
											
											
											
											<script src="bower_components/jquery/dist/jquery.min.js"></script>
											<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
											<script src="dist/js/adminlte.min.js"></script>
											<script src="bower_components/jquery.slimscroll.min.js"></script>
											<script src="bower_components/fastclick.js"></script>
											
											
											
											
											
											<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
											<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
											
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
																						