	<?php
	$title = 'Contact';
	$metaTags = 'contact';
	$currentPage = 'contact';
	include('header.php'); 
	
	$s2="";
	$s3="";
	$s4="";
	$s5="";
	$s6="";
	
	// UPDATE
	
	if(isset($_POST['update'])){
		
		$s2=$_POST['s2'];
		$s3=$_POST['s3'];
		$s4=$_POST['s4'];
		$s5=$_POST['s5'];
		$s6=$_POST['s6'];
		
		
		$sqlx = "INSERT INTO contact (a2,a3,a4,a5,a6) VALUES ('$s2','$s3', '$s4','$s5','$s6')";
		
		
        try{
			include('config.php');
            $update_Result = mysqli_query($conn, $sqlx);
			
            if($update_Result)
            {
                if(mysqli_affected_rows($conn) > 0)
                {  
					phpAlert("Thank you Sir, We will reply very soon.");   
					}else{	 
				}
			}
			} catch (Exception $ex) {
		}
	}
		
		?>

<!---->
 <div class="contact">
	<div class="container">
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
			<h2>Contact</h2>
								<form class="" method="post"action="contact" > 
						
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<input pattern=".{3,20}" placeholder="Name" maxlength="20"  required minlength="3" name="s2" class="form-control" type="text"value="<?php if (!$userID == null) {echo $row[a1]." ".$row[a2];} ?>" placeholder="Enter Name" required="">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="s3" class="form-control required email"value="<?php if (!$userID == null) {echo $row[userEmail];} ?>" required type="email"  placeholder="Enter Email">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input pattern=".{3,20}"placeholder="Subject" maxlength="20"  required minlength="3" name="s4" class="form-control required" type="text" placeholder="Enter Subject">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input pattern=".{3,20}" placeholder="Phone" maxlength="20"  required minlength="3" name="s5" class="form-control" type="text" placeholder="Enter Phone">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<textarea pattern=".{2,200}"placeholder="Message" maxlength="200"  required minlength="2" name="s6" required class="form-control required" rows="5" placeholder="Enter Message"></textarea>
						</div>
						<div class="form-group">
							<input name="form_botcheck" class="form-control" type="hidden" value="" />
							<button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" name="update" >Send your message</button>
							
							
						</div>
					</form>
			<!--<form>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Name';}">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" value="Email-id" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Email-id';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="contact-grid">
						<div class="col-md-6 contact-us">
							<input type="text" value="URL" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'URL';}">
						</div>
						<div class="col-md-6 contact-us">
							<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Subject';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					<div class="send ">
						<input type="submit" value="SEND" >
					</div>
				</form>-->
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
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.239094906!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1432796618846" ></iframe>
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
		<?php include('footer.php'); ?>
