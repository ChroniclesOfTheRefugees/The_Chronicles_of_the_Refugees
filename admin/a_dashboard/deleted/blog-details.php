<?php  	
	$title = 'Blog';
	$metaTags = 'Blog of INFIX ICT SOLUTIONS';
	$currentPage = 'blog'; 
	
?>

<?php error_reporting(0);
	$aa=$_GET[id];
echo $_GET[id]; ?>	

<?php include('header.php'); ?>
<div class="top1"> 
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
				<h2 class="c2 f2 top2"></h2>	 
				<h1 class="c3 f4  text-right"style="padding-top:80px;">Blog</h1>
				<h4 class="c2 f1 text-right">Blogging has quickly become one of the most popular ways of communicating and spreading information and news with clients.
					It’s a great way to express yourself and also a fantastic way to share information with us.
				</h4>                    
			</div>
			<div class="col-lg-5 col-md-5 col-xs-12 col-sm-12 pull-right">
				<div class="sup_mobile_img2 sup_mobile_img_small2">
					<img src="speedup/images/add_img2.png" class="img-responsive wow fromleft" alt="">
					<a href="contact"><i class="fa fa-phone  "></i><span>+880 1795621796</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="crumbs border_bottom bgw">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul>
					<li style="padding-top:10px;"><a href="index">Home</a></li>
					<li>/</li>
					<li>Blog</li>                                       
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Info title Blog-->
<div class="row info_title wow fadeInUp bg2" id="blog">
	<div class="vertical_line">
		<div class="circle_bottom"></div>
	</div>
	<div class="info_vertical animated">
		<h1>Latest <span>Blog</span>.</h1>
	</div>
</div>
<!-- End Info title Blog-->


<section class="content_info bg2">
	<div class="padding_bottom">
		<div class="container">
			<div class="row"> 
				<div class="col-md-9">
					<div class=" col-md-12 ">
						<div class="post-timeline">
							<div class="entry">
								<div class="entry-image">
									<img src="../admin/a_dashboard/uploads/blog/1.jpg" class="img-responsive" alt="">
								</div>
								<div class="entry-title">
									<h2>A Standard Blog Post</h2>
								</div>													
								<ul class="entry-meta">
									<li><a href="javascript:;">By Admin</a>
									</li>
									<li><a href="javascript:;">Company Events</a>
									</li>
									<li><a href="javascript:;">Posted at 8 May 2015</a>
									</li>
								</ul>
								
								<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ae841d7d6704600179d6188&product=inline-share-buttons' async='async'></script>
								<div class="sharethis-inline-share-buttons"></div>							
								<div class="sup_title_border"></div>
								<div class="entry-content">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
									</p>
									<div class="fb-comments" data-href="http://localhost/INFIX%20ICT/blog-details.php" data-width="100%" data-numposts="100"></div>		  
		
									
									
									<ul class="entry-comment">
										<li><a href="javascript:;"><i class="icon-like icons"></i> 97 Likes</a>
										</li>
									</ul>
								</div>
								
                                <h4 id="">Comments</h4>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-md-3">
				</div>
			</div>
		</div>
	</div>
</section>




<!--
	<section  class="">
	<div class="container-fluid">
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12" style="padding:0px;">
	<iframe class="mp"style=" " src="speedup/iframe-blog-details.php" width="100%" height="3500px" frameborder="0" marginwidth="0" marginheight="0"></iframe>		  			
	</div>
	</div>
	</div>
</section  > -->




<section class="content_info bg2">
	<!-- Info Resalt-->
	<div class="padding_bottom">
		<div class="container">
			<div class="row"> 
				<!-- Image animation-->
				<div class="col-md-7 wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
					<img src="img/services/2.png" alt="">                             
				</div>
				<!-- End Image animation-->
				<div class="col-md-5 padding-top text-right wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
					
					<h3><i  class="fa fa-clock-o c1 "> </i> Monday - Saturday, 8am to 10pm</h3>
					<h4><i  class="fa fa-phone c1 "> </i> +880 1795621796</h4>
					<h4><i  class="fa fa-paper-plane c1 "> </i> support@infixict.com</h4>
					<div class="padding-top-mini">
						<a href="#" class="button"><i class="fa fa-android"></i> Google Play</a>                           
						<a href="#" class="button"><i class="fa fa-apple"></i> Apple Store</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Info Resalt-->
</section>
<?php include('footer.php'); ?>