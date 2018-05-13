 <?php 
	// UPDATE
	
	if(isset($_POST['insert'])){
		
		$s1=$_POST['s1'];
 
		 
		
		$sqlx = "INSERT INTO subscribe (email) VALUES ('$s1')";
		
		
        try{
		
            $update_Result = mysqli_query($conn, $sqlx);
			
            if($update_Result)
            {
                if(mysqli_affected_rows($conn) > 0)
                {
					
					
					phpAlert("Thank you Sir, for subscribing to our newsletter");
					
					}else{
					
					   
				}
			}
			else {  phpAlert("You already subscribe to our newsletter");}
			} catch (Exception $ex) {
			
         
		}
	}
	
	
	
	
	
	
?>  
   

<div class="footer">
	<div class="footer-mid">
			<div class="container">

				<div class="col-md-3 grid1">
					<h3>Contacts</h3>
					<p>Contrary to popular</p>
					<p>perspiciatis</p>
					<p>+10 999 333 52</p>
				</div>
				<div class="col-md-6 grid1">
			                            <form   class="newsletterForm"  method="post"action="">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                <input type="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"   name="s1" placeholder="Your Email" class="form-control input-lg "  >
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit" name="insert" >Go!</button>
                                    </span>
                                </div>
                            </form>   
				</div>
				<div class="col-md-3 grid2">
				<h3>Follow Us</h3>
					<ul class="social-in">
						<li><a href="#"><i> </i></a></li>						
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="linked"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="pin"> </i></a></li>
				</ul>
				
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="container">
				<div class="class-footer">
					 <p class="footer-grid">&#169; 2018 Refugee Caregiver Organization | Design by Bag of Bugs </p>
			 	</div>
		 </div>
	</div>
<div id="fb-root"></div>
<div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>	
 </body>

</html>