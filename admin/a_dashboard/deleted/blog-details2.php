	<?php  	
	$title = 'Blog';
	$metaTags = 'Blog of INFIX ICT SOLUTIONS';
	$currentPage = 'blog'; 
	
	?>
	
<?php error_reporting(0);
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

				
<?php	include('iframe-blog-details.php'); ?>
	

 
 
 


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