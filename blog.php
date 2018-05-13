<?php 
	
	$title = 'blog';
	$metaTags = 'blog';
	$currentPage = 'blog';
	include('header.php'); 
	
	
?>

<!---->

<!---->
<!---728x90--->




<script src='../../../../publisher.eboundservices.com/dynamicAds/dynamicScript.js'></script>
<div style='margin: 0 auto;text-align: center;margin-top: 5px;'><script>
	var allowedNumberOfEboundDynamicAdds = 4;
	var sizesEboundDynamicAdsDesktop = ['728x90'];
	var sizesEboundDynamicAdsTablet = ['728x90'];
	var sizesEboundDynamicAdsMobile = ['320x100'];
	eboundAdsTagByDevice(sizesEboundDynamicAdsDesktop,sizesEboundDynamicAdsTablet,sizesEboundDynamicAdsMobile, 'ebound_header_tag');
	
	if(typeof user_tag_config == 'undefined'){
		var user_tag_config = {};
	}
	user_tag_config['ebound_header_tag'] = {};
	user_tag_config['ebound_header_tag']['desktop'] = {};
	user_tag_config['ebound_header_tag']['desktop']['cpm'] = '';
	user_tag_config['ebound_header_tag']['desktop']['adsCode'] = '';
	user_tag_config['ebound_header_tag']['tablet'] = {};
	user_tag_config['ebound_header_tag']['tablet']['cpm'] = '';
	user_tag_config['ebound_header_tag']['tablet']['adsCode'] = '';
	user_tag_config['ebound_header_tag']['mobile'] = {};
	user_tag_config['ebound_header_tag']['mobile']['cpm'] = '';
	user_tag_config['ebound_header_tag']['mobile']['adsCode'] = '';
</script></div>













<div class="blog">
	<div class="container">
		<h2>Forum</h2>
		<div class="col-md-8 ">
			
			<?php	 include('config.php');
				$qry="select * from blog ";
				$result=mysqli_query($conn,$qry);
				$rowcount=mysqli_num_rows($result);
				$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
				$use='...';
				for($i=$rowcount-1;$i>0;$i--)
				{
					
	
			
	echo		'<div class=" single-grid">
				<a href="blogdetails.php?id='.$row[$i]['id'].'"><img class="img-responsive" src="admin/a_dashboard/uploads/blog/'.$row[$i]['a5'].'" alt="" /></a>
				<div class="lone-line">
					<h4><a href="blogdetails.php?id=3">'.$row[$i]['a7'].'</a></h4>
					
					<ul class="sin-grid">
						<li><span>By</span> Admin<b>|</b></li>
						<li> Activities <b>|</b></li> 
						<li><span>Posted at '.$row[$i]['a11'].'</span><b>|</b></li>
						<li>Share This Post</li>
					</ul>'.$row[$i]['r1'].$use.'<a class="hvr-rectangle-out" href="blogdetails.php?id='.$row[$i]['id'].'">READ MORE</a>
				</div>
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
		<nav>
			<ul class="pagination">
				<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
				<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				<li ><a href="#">2 <span class="sr-only"></span></a></li>
				<li ><a href="#">3 <span class="sr-only"></span></a></li>
				<li ><a href="#">4 <span class="sr-only"></span></a></li>
				<li ><a href="#">5 <span class="sr-only"></span></a></li>
				<li> <a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span> </a> </li>
			</ul>
		</nav>	
	</div>
</div>
<?php include('footer.php'); ?>
