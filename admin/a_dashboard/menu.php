<?php
	
	                            
											//Query to be executed;
								$qrym="select * from contact where a15='unseen' ";
								//Performs a query on the database;
								$resultm=mysqli_query($conn,$qrym);
								//Gets the number of rows in a result;
								$rowcountm=mysqli_num_rows($resultm);
								//Fetches all result rows as an associative array;														 
								//Query to be executed;	
											//Query to be executed;
								$qryn="select * from tbl_users where a15='unseen' ";
								//Performs a query on the database;
								$resultn=mysqli_query($conn,$qryn);
								//Gets the number of rows in a result;
								$rowcountn=mysqli_num_rows($resultn);
								//Fetches all result rows as an associative array;														 
								//Query to be executed;	
		
	?>

<header class="main-header">
				<a href="" class="logo">
					<span class="logo-mini"><b>R</b>CO</span>
					<img style="" src="../../img/logo.png" height=" 40px;" class="" alt="User Image">
				</a>				
				<nav class="navbar navbar-static-top" role="navigation">
					<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
						<span class="sr-only">Toggle navigation</span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown messages-menu <?php if ($login_session === 'crypto@matsolutionsinc.com' ) {echo 'invisible';} ?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-envelope-o"></i>
									<span class="label label-success"><?php echo $rowcountm; ?></span>
								</a>
								<ul class="dropdown-menu">
									<li class="header ">You have <?php echo $rowcountm; ?> new messages</li>
									<li>

										
										<form class="form-horizontal"method="POST" action="contact">
	
											<div class="box-footer">
												 
												<button type="submit" name="sms"     class="btn btn-default pull-right">See All Messages</button>
											</div>
										</form>		
										
										
										
										
										
										
										
										
										
									</li>
									
								</ul>
							</li>
							<li class="dropdown notifications-menu <?php if ($login_session === 'crypto@matsolutionsinc.com' ) {echo 'invisible';} ?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell-o"></i>
									<span class="label label-warning"><?php echo $rowcountn; ?></span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have  <?php echo $rowcountn; ?> new notifications</li>
									<li>
										<form class="form-horizontal"method="POST" action="manageuser">
	
											<div class="box-footer">
												 
												<button type="submit" name="noti"     class="btn btn-default pull-right">See All notifications</button>
											</div>
										</form>	
									</li>
						 
								</ul>
							</li>
							
							<li class="dropdown tasks-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Accounts
								</a>
								<ul class="dropdown-menu  animated ">
									<li class="footer">
										<a href="logout.php">View Profile  </a>
									</li>
									<li class="footer"style="padding-bottom:20px;font:30px">
										<a id="logout" href="logout.php">Sign out  </a>
									</li>
									<li class="footer">                
									</li>
								</ul>
							</li> 
							<li>
								<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			
			<aside class="main-sidebar">
				<section class="sidebar">	
				<a href="#"style="padding:12px;"><i class="fa fa-circle text-success"></i> Online</a>

					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
					<ul class="sidebar-menu" data-widget="tree">
 
						<li class="<?php if ($login_session === 'crypto@matsolutionsinc.com' ) {echo 'invisible';}  else if ($currentPage1 === 'Admin' ) {echo 'treeview active';} else{echo 'treeview ';} ?>" >
							<a href="#">
								<i class="fa  fa-user-plus"></i>
								<span>Admin</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">      
					 <li <?php if ( $currentPage2 === 'account') {echo 'class="active"';} ?>><a href="account"><i class="fa fa-key"></i> Account Setting</a></li>
					 <li <?php if ( $currentPage2 === 'setting') {echo 'class="active"';} ?>><a href="admin"><i class="fa fa-key"></i> Admin Management</a></li>
							</ul>
						</li>	


						<li <?php if ($currentPage1 === 'Blog' ) {echo 'class="treeview active"';} else{echo 'class="treeview "';} ?> >
							<a href="#">
								<i class="fa  fa-lemon-o"></i>
								<span>Forum</span>
								<span class="pull-right-container">
									<i class="fa fa-angle-left pull-right"></i>
								</span>
							</a>
							<ul class="treeview-menu">      
								<li <?php if ( $currentPage2 === 'Blog Management') {echo 'class="active"';} ?>><a href="blog"><i class="fa fa-circle-o"></i> Forum Management</a></li>          												
							</ul>
						</li>			
<li  <?php if ( $currentPage2 === 'contact') {echo 'class="treeview active"';} ?>><a href="contact"><i class="fa fa-send-o"></i> Contact & Questions</a></li>
<li <?php if ( $currentPage2 === 'refugee') {echo 'class=" treeview active"';} ?>><a href="refugee"><i class="fa fa-circle-o"></i> Refugee Management</a></li>     						
<li <?php if ( $currentPage2 === 'manageuser') {echo 'class=" treeview active"';} ?>><a href="manageuser"><i class="fa fa-circle-o"></i> Manage User</a></li>          									
					</ul>
				</section>
			</aside>
			
			
			
			
			
			
			
			
			
			
			
			
			