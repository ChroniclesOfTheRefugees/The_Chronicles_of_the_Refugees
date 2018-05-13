	<?php 
	error_reporting(0);
	$title = 'blog';
	$metaTags = 'blog';
	$currentPage = 'blog';
include('header.php'); 
		
	$aa= $_GET[id]; 
	if($aa===NULL){
		header("location:blog"); // Redirecting To Home Page
		}
		
		
		?>

<!---->
 
	  	  <!---->
 
  <div class="blog">
			<div class="container">
			<h2>Forum Details</h2>
			<div class="col-md-8 ">
			
			
<div class="blog">
	<div class="container">
	 
		<div class="col-md-8 ">
			
			<?php	 	include('config.php');
$qry="select * from blog where id='1' OR id=$aa  ";
	$result=mysqli_query($conn,$qry);
	$rowcount=mysqli_num_rows($result);
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	
	for($i=$rowcount-1;$i>0;$i--)
	{	
	
			
	echo		'<div class=" single-grid">
				<a href="blogdetails.php?id='.$row[$i]['id'].'"><img class="img-responsive" src="admin/a_dashboard/uploads/blog/'.$row[$i]['a5'].'" alt="" /></a>
				<div class="lone-line">
					<h4><a href="blogdetails.php?id=3">'.$row[$i]['a7'].'	
'.'</a></h4>
					
					<ul class="sin-grid">
						<li><span>By</span> Admin<b>|</b></li>
						<li> Activities <b>|</b></li> 
						<li><span>Posted at '.$row[$i]['a11'].'</span><b>|</b></li>
						<li>Share This Post</li>
					</ul>'.$row[$i]['r3'].'<div class="fb-comments" data-href="http://infixicf.cf/blogdetails.php?id=58" data-numposts="100"></div>'.'<a class="hvr-rectangle-out" href="blog">Back</a>
				</div>
				'.''	.'
			</div>';
				
		}		
				 
			?>
			




				</div>
				<div class="col-md-3 categories-grid">
				<div class="grid-categories">
					<h4>Categories</h4>
					<ul class="popular ">
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>Contrary to popular belief</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>There are many variation</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>Lorem Ipsum is simply</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>Sed ut perspiciatis unde</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>Nemo enim ipsam volume</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>At vero eos et accusamus</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>Contrary to popular belief</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>There are many variation</a></li>
					</ul>
				</div>
				<div class="grid-categories">
					<h4>Archives</h4>
					<ul class="popular popular-in">
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>MAY 2014</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>SEP 2012</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>JANUARY 2011</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>FEB 2010</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-ok-sign"> </i>NOV 2009</a></li>
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
 	
			</div>
	</div>
	<?php include('footer.php'); ?>
