<?php $currentPage1 = 'Client'; ?>
<?php $currentPage2 = 'userorder'; ?>




<?php 
	
	include('session.php');
	
	if(!isset($_SESSION['login_user'])){
		header("location: index.php"); // Redirecting To Home Page
	}
	
 ?>



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
		$search_Query = "select * from orders where  id='$v1' ";   
		$search_Result = mysqli_query($connect, $search_Query); 
		if($search_Result)
		{
			if(mysqli_num_rows($search_Result))
			{
				while($row = mysqli_fetch_array($search_Result))
				{  
 
					$id = $row['id'];
					$p1 = $row['name'];
					$p2 = $row['email'];
					$p3 = $row['product_id'];
					$p4 = $row['phone'];
					$p5 = $row['random_serial'];
					$p6 = $row['product_details'];
					$p7 = $row['date'];
 
 
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
		$xx1='1';
		$xx2=$_POST['xx1'];
		$sqlx = "UPDATE career SET b5='$xx1' WHERE id='$xx2' ";
		
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
	
 
	if(isset($_POST['denied'])){
		include('../config.php');  
		$xx2=$_POST['xx2'];
		 
		
		$query = "DELETE FROM orders WHERE id='$xx2'";
		if (mysqli_query($conn, $query)) {
			phpAlert("Data Deleted Successfully...") ;
			} else {
			echo 'Failed';
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

// Row count from table Total Applicant
	include('../config.php');
	$applicant='Male';
    $qryTotal = "SELECT * FROM  orders    ";
	$resultTotal=mysqli_query($conn,$qryTotal);
	$count1=mysqli_num_rows($resultTotal);
 
	
 
	$applicant='Female';
    $qryTotalFemale = "SELECT * FROM  career  WHERE b5=0 AND b6=0 AND b7=0 AND b8=0 AND b9=0 AND b10=0 AND a4 = '$applicant'  ";
	$resultTotal=mysqli_query($conn,$qryTotalFemale);
	$count2=mysqli_num_rows($resultTotal);
 
	
	$applicant='Bangladesh';
    $qryBD = "SELECT * FROM  career  WHERE a10 = '$applicant' ";
	$resultTotal=mysqli_query($conn,$qryBD);
	$count3=mysqli_num_rows($resultTotal);
 
	$count4=$count1+$count2;
	
	if($count1===0){$male=0;}else{$male=$count1*100/$count4; }
	if($count2===0){$female=0;}else{$female=$count2*100/$count4; }
	
 

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
						<div class="col-xs-12 table-responsive">
							<table class="table table-striped  ">
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>Email</th>        
 
        <th>product_id</th>
        <th>phone</th>		
		<th>random_serial</th>
        <th>product_details</th>
        <th>date</th>
 
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo  $id; ?></td>
        <td><?php echo  $p1; ?></td>
        <td><?php echo  $p2; ?></td>
        <td><?php echo  $p3; ?></td>
        <td><?php echo  $p4; ?></td>
        <td><?php echo  $p5; ?></td>
        <td><?php echo  $p6; ?></td>
        <td><?php echo  $p7; ?></td>

      </tr>
    </tbody>
  </table>
							</table>
						</div>
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
										<input class="invisible" type="text" name="xx1" value="<?php echo $id  ; ?>">		
										<input type="submit" name="approve"disabled value="Approved" class="btn bg-olive btn-flat">
									</form>	
								</div>
								
								<div class="col-xs-3">
									<form class="row no-print " method="POST">
										<input class="invisible" type="text" name="xx2" value="<?php echo $id  ; ?>">		
										<input type="submit" name="denied" value="Delete" class="btn bg-maroon btn-flat">
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
              <h3><?php echo((int)$count4); ?></h3>
              <p>Pending order</p>
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
              <h3><?php echo((int)$count4); ?><sup style="font-size: 20px">%</sup></h3>
              <p>Today order</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>

   

        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>0<sup style="font-size: 20px">%</sup></h3>

              <p>Completed</p>
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
									<h3 class="box-title">Pending Job Request</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Product ID</th>
												<th>Date</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody>
											<?php		
												$qry="select * from orders    ";
												$result=mysqli_query($conn,$qry);
												$rowcount=mysqli_num_rows($result);
												$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
												
												for($i=$rowcount-1;$i>=0;$i--)
											{
											echo '<tr>	
											<td>'.$row[$i]['id'].'</td>
											<td>'.$row[$i]['name'].'</td>
											<td>'.$row[$i]['email'].' '.'years'.'</td>
											<td>'.$row[$i]['phone'].'</td>
											<td>'.$row[$i]['product_id'].'</td>
											<td>'.$row[$i]['date'].'</td>
											
											<td>'.'<div class="row no-print">			 <form  class="row no-print " method="POST"> <input class="invisible"type="text" name="v1" value="'.$row[$i]['id'].'">		 <input type="submit" name="view"value="View" class="btn btn-warning btn-xs"></input> </form>     </div>'.'</td>
											</tr>';	
											
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
																						