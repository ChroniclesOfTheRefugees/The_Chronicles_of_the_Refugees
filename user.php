	
	<?php
		
	$title = 'User';
	$metaTags = 'user';
	$currentPage = 'user';
		
		
	include('header.php'); 
	 include('config.php');
	 

		
		
		
		
	?>	
		


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
	<div class="about">
			<div class="container">
				<div class="about-left">
					<h2>USER PANEL</h2>
	<?php	
		
	if(isset($_POST['viewthis'])){ 
	
      
	  
		$v1=$_POST['v1'];
		$search_Query = "select * from job where  a6='$v1' ";   
		$search_Result = mysqli_query($connect, $search_Query); 
		if($search_Result)
		{
			if(mysqli_num_rows($search_Result))
			{
				while($row = mysqli_fetch_array($search_Result))
				{
			
			
			
		$a1=$row['a1'];

		$a3=$row['a3'];
        $a4=$row['a4'];
		$a5=$row['a5'];
		$a6=$row['a6'];
		$a7=$row['a7'];
		$a8=$row['a8'];
		$a9=$row['a9'];
		$a10=$row['a10'];
		$a11=$row['a11'];
		$a12=$row['a12'];
		$a13=$row['a13'];
		$b1=$row['b1'];
		$r1=$row['r1'];
		$d3=$row['d3'];
  	  
	  
	  
	  
echo 	  
'<div class="well well-lg">					

						
 <table class="table table-hover">
    <thead>
      <tr>
        <th><center> <img src="admin/a_dashboard/uploads/pic/'.$row['a23'].'" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"></center>  </th>
      </tr>
    </thead>
    <tbody>
 
      <tr>
        <td>Name:</td>
        <td>'.$a8.'</td>
        <td>Date of Birth:</td>
        <td>'.$a2.'</td>

      </tr>
      <tr>
        <td>Gender</td>
		<td>'.$row['a16'].'</td>
        <td>Current State</td>
		<td>'.$row['a21'].'</td>
      </tr>      
	  <tr>
	     <td>Registration ID:</td>
        <td>'.$a6.'</td>
        <td>Origin Country</td>
        <td>'.$row['a20'].'</td>
      </tr>
	  
    </tbody>
  </table>	
							  </div>	';
	  
	  
	  
	  
	  
	  
	  
				}
			}else{
			
			phpAlert("Not Found");
			}
			}else{     
		}$jobUpdate ='0';$createjob ='1';		
	}	
				 	
										

										
								
									 

										
										
								 
	
	
	?>
					<form method="post"action="">
							<div class="col-xs-3">	
										<input  type="text" name="v1" >		
										<input type="submit" name="viewthis" value="Search" style="width:120%"class="btn bg-olive btn-flat">
										</div>	
					</form>
					
					
					
<div class="col-md-8">					
<div class="container">
  
<div class="container">

</div>
	</div>
</div>
</div>

<?php
	 			$a1='';
		$a2='';
		$a3='';
		$a4='';
		$a5='';
		$a6='';
		$a7='';
		$a8='';
		$a9='';
		$a10='';
		$a11='';
		$a12='';
		$a13='';
			
		$b1='';
		$b2='';
		$b3='';
		$b4='';
		
		$r1='';
	?>
 
				</div>
			</div>
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
			<!---->

		<!---->
</div>
 	<?php include('footer.php'); ?>
