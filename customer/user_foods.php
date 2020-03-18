<!--
Author: Er. Mrigank.
Url : https://www.facebook.com/mrigankkumar.rai1 */
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Km Lazeez Imperial | Food Gallery </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Staple Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
	<!-- //Custom Theme files -->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
	<!-- //web-fonts -->
	<style>
		.blog-post-single {
			box-shadow: 0 0 10px #bcc6d0;
		}

		.m-0 {
			font-size: 17px;
			margin-top: 5px;
			text-align: center;
		}

		.mr1 {
			text-align: center;
		}

		.deep {
			margin-top: 20px;
		}

		.dip {
			text-align: center;
		}

		.btn {
			margin-bottom: 5px;
			background-color: #FF214F;
			font-weight: 500;
		}
	</style>
</head>

<body>
	<!-- banner -->
	<div class="banner about-w3bnr">
		<!-- header -->
		<?php
		include("Include/header.php");
		?>
		<!-- //header-end -->
		<!-- banner-text -->
		<div class="banner-text">
			<div class="container">
				<center>
					<h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2>
				</center>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- breadcrumb -->
	<div class="container">
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Menu</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- careers-page -->
	<div class="careers about">
		<div class="container">
			<h3 class="w3ls-title w3ls-title1">Check our Foods</h3>

			<div class="row deep">
				<!--Start Post Single-->
				<?php
                        include("Include/config.php");

                        $sql = "SELECT * FROM foodgallery";

                        $result = mysqli_query($mysqli, $sql);

                        if (mysqli_num_rows($result) > 0) {

                        while($row = mysqli_fetch_assoc($result)) {
						?>
				<div class="col-md-4">
					<div class='blog-post-single fix'>
						<div class='post-media lfood'>
							<img class="img-responsive" style="height:50%;width:100%;" src="../admin/images/<?php echo $row['image']; ?>">
						</div>
						<div class='blog-details'>
							<div class='post-meta'>
								<h6 class='m-0'> <?php echo $row["name"]; ?></h6>
							</div>
							<div class='post-content'>
								<p class='mr1'><?php echo $row["category"]; ?></p>

								<div class='row'>
									<div class='col-md-6 dip' style='margin-top: 10px;'>
										<b>Price : </b> <span class='base-color'>₹ <?php echo $row["price"]; ?></span>
									</div>
									<div class='col-md-6'>
										<div class='default-btn'>
										<a href='itemfood.php?id="<?php echo $row['id']; ?>"'>
											<button type='submit' class='btn btn-danger'>View Details</button>
										</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<?php			   
                    }
                }else {
                    echo "There are no records available";
                }
      			  ?>
				<!--End Post Single-->
			
			</div>

		</div>
	</div>
	<!-- //careers-page -->
	<!-- subscribe -->
	<div class="subscribe agileits-w3layouts">
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li>
				</ul>
				<ul class="apps">
					<li>
						<h4>Download Our app : </h4>
					</li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul>
			</div>
			<div class="col-md-6 subscribe-right">
				<h3 class="w3ls-title">Subscribe to Our <br><span>Newsletter</span></h3>
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
					<div class="clearfix"> </div>
				</form>
				<img src="images/i1.png" class="sub-w3lsimg" alt="" />
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- footer -->
	<?php
    include("include/footer.php");
    ?>
	<!-- //footer -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		w3ls.render();

		w3ls.cart.on('w3sb_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>