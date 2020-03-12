<?php
// Include config file
require_once "Include/config.php";
 
// Define variables and initialize with empty values
$name = $email  = $phone = $person = $date = $time = $message = "";
$name_err = $email_err  = $phone_err = $person_err = $date_err = $time_err =  $message_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter an email.";     
	} elseif(!filter_var($input_email, FILTER_VALIDATE_EMAIL)){
		$email_err = "The  email is not valid";
	}
	else{
        $email = $input_email;
    }
    
    // Validate salary
	$input_phone = trim($_POST["phone"]);
    if(empty($input_phone)){
        $phone_err = "Please enter the phone number.";     
    } elseif(!ctype_digit($input_phone)){
        $phone_err = "Please enter a positive integer value.";
    } else{
        $phone = $input_phone;
	}
	//Validate person
	$input_person = trim($_POST["person"]);
    if(empty($input_person)){
        $person_err = "Please enter the person.";     
    } elseif(!ctype_digit($input_person)){
        $person_err = "Please enter a positive integer value.";
    } else{
        $person = $input_person;
	}
	//Validate Date
	$input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter the date.";     
    } elseif(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$input_date)){
        $date_err = "Please enter a valid date.";
    } else{
        $date = $input_date;
	}
   	//Validate Time
	   $input_time = trim($_POST["time"]);
	   if(empty($input_time)){
		   $time_err = "Please enter the time.";     
	   } elseif(!date('h:i:s a', strtotime($input_time))){
		   $time_err = "Please enter a valid date.";
	   } else{
		   $time = $input_time;
	   }

	//Validate Message
	$input_message = trim($_POST["message"]);
    if(empty($input_message)){
        $message_err = "Please enter a message.";
    } elseif(!filter_var($input_message, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $message_err = "Please enter a valid message.";
    } else{
        $message = $input_message;
    }
    // Check input errors before inserting in database
	if(empty($name_err) && empty($param_email) && empty($param_phone) && empty($param_person) && empty($param_date) && 
	empty($param_time) && empty($param_message)){
        // Prepare an insert statement
        $sql = "INSERT INTO reservation (name , email , phone , person , date , time , message) VALUES (?, ?, ?, ? , ? , ? ,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "sssssss", $param_name, $param_email , $param_phone,  $param_person , 
			$param_date , $param_time , $param_message);
            
            // Set parameters
            $param_name = $name;
            $param_email = $email;
			$param_phone = $phone;
			$param_person = $person;
			$param_date = $date;
			$param_time = $time;
			$param_message = $message;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: http://localhost/km_lazeez/customer/home.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Km Lazeez Imperial | About</title>
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
	<!-- custom Css Mrigank Begins -->
	<link href="css/mkr.css" rel="stylesheet" type="text/css">
	<!-- custom css Mrigank End -->
</head>

<body>
	<!-- banner -->
	<div class="banner about-w3bnr">
		<!-- header -->
		<?php
		include("Include/header.php");
		?>
		<!-- header End -->
		<!-- banner-text -->
		<div class="banner-text">
			<div class="container">
				<h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- breadcrumb -->
	<div class="container">
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Reservation</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!--  about-page -->
	<div class="about">
		<div class="container">
			<h3 class="w3ls-title w3ls-title1">Book Now</h3>
			<h1 class="capitall text-center">Make A Reservation</h1>
			<br>
			<!-- Reservation Section -->
			<div class="row">
				<!--Start Reservation Form-->
				<div class="col-md-8">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label>Email</label>
                            <input type="varchar" name="email" class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control" value="<?php echo $phone; ?>">
                            <span class="help-block"><?php echo $phone_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($person_err)) ? 'has-error' : ''; ?>">
                            <label>Person</label>
                            <input type="number" name="person" class="form-control" value="<?php echo $person; ?>">
                            <span class="help-block"><?php echo $person_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" value="<?php echo $date; ?>">
                            <span class="help-block"><?php echo $date_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($time_err)) ? 'has-error' : ''; ?>">
                            <label>Time</label>
                            <input type="time" name="time" class="form-control" value="<?php echo $time; ?>">
                            <span class="help-block"><?php echo $time_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($message_err)) ? 'has-error' : ''; ?>">
                            <label>Message</label>
                            <textarea name="message" class="form-control"><?php echo $message; ?></textarea>
                            <span class="help-block"><?php echo $message_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="http://localhost/km_lazeez/customer/home.php" class="btn btn-default">Cancel</a>
                    </form>
				</div>
				<!--End Reservation Form-->

				<!--Start Opening Schedule-->
				<div class="col-md-4">
					<div class="opening-schedule text-center">
						<div class="opening-info">
							<h4>Opening Time</h4>
							<p class="text-light">
								Monday - Saturday<br>

								8:00 AM - 10:30 PM<br>


								Sunday<br>

								8.00AM-13.30 PM<br>
								<br>
							</p>
						</div>
						<div class="help-line">
							<h4>Help Line</h4>
							<p>

								<i class="icofont icofont-phone"></i> +918340415022<br>


							</p>

							<p>

								<i class="icofont icofont-email"></i> kmlazeezimperial2020@gmail.com<br>


							</p>


						</div>

					</div>
				</div>
				<!--End Opening Schedule-->
			</div>

		</div>
	</div>
	<!-- //about-page -->
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
					<input type="email" name="email" placeholder="Enter your Email...">
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