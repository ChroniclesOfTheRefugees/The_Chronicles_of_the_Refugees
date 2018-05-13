	<?php  	
	$title = 'Portfolio';
	$metaTags = 'Portfolio of INFIX ICT SOLUTIONS';
	$currentPage = 'portfolio'; 
	
	?>
	
	
	<?php include('header.php'); ?>
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

			
       <section class="content_info bg2 "style="padding-top:40px;padding-bottom:160px;">
            <div class="container ">
                <div class="row">
				
				
 
	
	<?php	 include('../config.php');


	$qry="select * from blog where id='1' OR id='14'  ";
	$result=mysqli_query($conn,$qry);
	$rowcount=mysqli_num_rows($result);
	$row = mysqli_fetch_all($result,MYSQLI_ASSOC);

	for($i=$rowcount-1;$i>0;$i--)
	{
		echo  $row[0]['a4'].$row[$i]['a5'].$row[0]['a6'].$row[$i]['a7'].$row[0]['a8'].$row[$i]['a9'].$row[0]['r10'].$row[$i]['a11'].$row[0]['a12'].$row[$i]['r1'].$row[0]['a14'].$row[$i]['id'].$row[0]['a15'];
	}
    ?>	
 
				
				
				
				
				
          <!--  				
 <div class="col-md-8">                           
						<div class="entry-image">
							<img src="admin/a_dashboard/uploads/blog/1.jpg" class="img-responsive" alt="">
						</div>
						<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ae841d7d6704600179d6188&product=inline-share-buttons' async='async'></script>
						<div class="sharethis-inline-share-buttons"></div>
                        <h2 class="text-center f4"style="color:#e64b3c;padding:30px 0px 20px 0px;">xLASTA Standard Blog Post</h2>
						<h4 class="text-center f3"style="color:#02b1e3;padding-bottom: 20px;">By Admin  | xCompany Events| Posted at  01 September 2018</h4>
										xLorem Ipsum is simply dummy text of the printing and typesetting
 industry. Lorem Ipsum has been the industry's standard dummy te
xt ever since the 1500s, when an unknown printer took a galley 
of type and scrambled it to make a type specimen book. It has s
urvived not only five centuries, but also the leap into electro
nic typesetting, remaining essentially unchanged. It was popular
ised in the 1960s with the release of Letraset sheets containing 
Lorem Ipsum passages, and more recently with desktop publishing s
oftware like Aldus PageMaker including versions of Lorem Ipsum.<h4 id="">Comments</h4>
					     <div class="fb-comments" data-href="http://localhost/INFIX%20ICT/blog-details14.php" data-width="100%" data-numposts="100"></div>		  
		            </div>	
				
				
         <div class="col-md-8">                           
						<div class="entry-image">
							<img src="admin/a_dashboard/uploads/blog/1.jpg" class="img-responsive" alt="">
						</div>
						<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ae841d7d6704600179d6188&product=inline-share-buttons' async='async'></script>
						<div class="sharethis-inline-share-buttons"></div>
                        <h2 class="text-center f4"style="color:#e64b3c;padding:30px 0px 20px 0px;">A Standard Blog Post</h2>
						<h4 class="text-center f3"style="color:#02b1e3;padding-bottom: 20px;">By Admin  | Company Events | Posted at 8 May 2015 </h4>
										
                        <p class=" ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
						text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
						five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of 
						Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
						of Lorem Ipsum.</p>
						
					    <h4 id="">Comments</h4>
					     <div class="fb-comments" data-href="http://localhost/INFIX%20ICT/blog-details.php" data-width="100%" data-numposts="100"></div>		  
		            </div>-->
					
                      <div class="col-md-4">                            
 	                        <iframe class="mp"style=" " src="speedup/iframe-blog-details.php" width="100%" height="2200px" frameborder="0" marginwidth="0" marginheight="0"></iframe>		  			
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
 
            <!-- End content info - Portfolio Carousel Section-->      
	<?php include('footer.php'); ?>