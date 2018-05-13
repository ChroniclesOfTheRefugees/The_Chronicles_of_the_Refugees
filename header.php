	<?php 
	
 
	 function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	} 
$a="";
	$a1="";
	$a2="";
	error_reporting(0);
	session_start();
	require_once 'login/class.user.php';
	$user_home = new USER();
	
	if(!$user_home->is_logged_in())
	{
		
		$a1="LOGIN / REGISTER  " ;
		$a2="login/index" ;
		 
	} 
	if($user_home->is_logged_in())
	{
		include('config.php');
		$qry="select * from codes";
		$result=mysqli_query($conn,$qry);
		$rowcount=mysqli_num_rows($result);
		$row = mysqli_fetch_all($result,MYSQLI_ASSOC);		
		$a =  $row[0]['a1'];		
	}
	
	$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
	$stmt->execute(array(":uid"=>$_SESSION['userSession']));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$userID=$row['userID'];
	
	
	include('config.php');
    $search_Query = "select * from payment where  userID='$userID' ";   
    $search_Result = mysqli_query($connect, $search_Query); 
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row2 = mysqli_fetch_array($search_Result))
            {
                $x1 = $row2['p1'];
                $x2 = $row2['p2'];	
			}
			}else{}
		}else{}
	
// phpAlert() -> alert function 	
// $row['']  -> get the user row
// $userID  -> get the user name
// $x1 -> Remaining days of first cell
// $x2 -> Remaining days of second cell
// $a1, $a2, $a, $x1, $x2 ->reserve variable 

	?>
<!DOCTYPE html>
<html>


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>The Chronicles of the Refugees</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Charity Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script><script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script><script type="text/javascript" src="../../../../publisher.eboundservices.com/adsInternalReferral/adsInternalReferral7946.js?ver=20180503"><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
<!--header-->
	<div class="header">
	<div class="header-top">
		<div class="container">	
		
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""> </span>
				
					<ul>
						<li <?php if ($currentPage === 'index') {echo 'class="active"';} ?>><a href="index"  >Home</a><span>/</span></li>
						<li <?php if ($currentPage === 'about') {echo 'class="active"';} ?>><a href="about"  >About</a><span>/</span></li>
						<li <?php if ($currentPage === 'services') {echo 'class="active"';} ?>><a href="services"  >Services</a><span>/</span></li>
				
						<li <?php if ($currentPage === 'blog') {echo 'class="active"';} ?>><a href="blog"  >Blog</a><span>/</span></li>
						<li <?php if ($currentPage === 'contact') {echo 'class="active"';} ?>><a href="contact"  >Contact</a></li>
						<li <?php if ($currentPage === 'user') {echo 'class="active"';} ?>><a href="login/index"  >login/register</a></li>
					</ul>

					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
				
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">	
				<div class="logo">
					<h1><a href="index">The Chronicles of the Refugees</a></h1>
					<p>A Project for the Refugees</p>
				</div>
			</div>
		</div>
		</div>