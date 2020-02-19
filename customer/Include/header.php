<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
   header("location: customer/index.php");
    exit;
}
?>
<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
					<div class="w3ls-header-left">
						<p>Free home delivery at your doorstep For Above $30</p>
					</div>
					<div class="w3ls-header-right">
						<ul> 
							<li class="head-dpdn">
								<a><i class="fa fa-user" aria-hidden="true"></i> <?php echo htmlspecialchars($_SESSION["username"]); ?></a>
							</li> 
							<li class="head-dpdn">
								<i class="fa fa-phone" aria-hidden="true"></i> Call us: +01 222 33345 
							</li> 
							<li class="head-dpdn">
								<a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
							</li> 
							<li class="head-dpdn">
								<a href="offers.php"><i class="fa fa-gift" aria-hidden="true"></i> Offers</a>
							</li> 
							<li class="head-dpdn">
								<a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
							</li>
							<li class="head-dpdn">
							<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
							</li> 	
							<li class="head-dpdn">
							<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>							
							</li> 
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- //header-one -->    
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="logoimg"> 
                                <a href="home.php"><img src="images/logo.png"></a></div>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="home.php">Home</a></li>	
								<!-- Mega Menu -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											
											<div class="col-sm-3">
												<ul class="multi-column-dropdown">
													<h6>Food Gallery</h6>  
													<li><a href="foods1.php">Our Food</a></li> 
												
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="multi-column-dropdown">
													<h6>Food type</h6>  
													<li><a href="menu1.php">Breakfast</a></li> 
													<li><a href="menu1.php">Lunch</a></li> 
													<li><a href="menu1.php">Dinner</a></li> 
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="multi-column-dropdown">
													<h6>Cuisine</h6> 
													<li><a href="menu1.php">Indian Recipes</a></li> 
													<li><a href="menu1.php">American Recipes</a></li> 
													<li><a href="menu1.php">French Recipes</a></li> 
													<li><a href="menu1.php">Italian Recipes</a></li> 
												</ul>
											</div>
											<div class="col-sm-3">
												<ul class="multi-column-dropdown">
													<h6>Box type</h6> 
													<li><a href="menu1.php">Diet</a></li> 
													<li><a href="menu1.php">Mini</a></li> 
													<li><a href="menu1.php">Regular</a></li> 
													<li><a href="menu1.php">Special</a></li> 
												</ul>
											</div> 
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li><a href="about1.php">About Us</a></li> 
								<!--<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Index <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="icons.php">Announcement</a></li>
										<li><a href="codes.php">Our Events</a></li>     
									</ul>
								</li> -->
								<li><a href="icons1.php">Announcement</a></li>
								<li><a href="events1.php">Our Events</a></li>
								<li><a href="reservation1.php">Reservation</a></li> 
								<li><a href="contact1.php">Contact Us</a></li>
							</ul>
						</div>
						<div class="cart cart box_1"> 
							<form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
								<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							</form>   
						</div> 
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>