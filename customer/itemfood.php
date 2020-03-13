<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "Include/config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM foodgallery WHERE id = ?";
    
    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();
            
            if($result->num_rows == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = $result->fetch_array(MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["name"];
                $image = $row["image"];
                $category = $row["category"];
                $price = $row["price"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    $stmt->close();
    
    // Close connection
    $mysqli->close();
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: customer/home.php");
    exit();
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
    <style>
        .title2 {
            margin-top: 10px;
        }

        .mr img {
            height: 400px;
            width: 410px;
            float: right;
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
        <!-- header End -->
        <!-- banner-text -->
        <div class="banner-text">
            <div class="container">
              <center>  <h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2> </center>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumb -->
    <div class="container">
        <ol class="breadcrumb w3l-crumbs">
            <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Food Details</li>
        </ol>
    </div>
    <!-- //breadcrumb -->
    <!--  about-page -->
    <div class="about">
        <div class="container-fluid">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-5">
                        <center>   <div class="preview-pic tab-content">
                            <h3 class="product-title"><span><?php echo $row['name']?></span></h3> 
                                <div class="tab-pane active"><img style="width:50%;height:50%;" src="../admin/images/<?php echo $row['image']?>"/></div>
                               
                            </div>
                        </div>
                        <aside>
                        <h3 class="product-title"><span><?php echo $row['name']?></span></h3>
                        <br>                        
                        <h4><?php echo $row['category']?></h4>
                        <h4 class="price">Price: <span>₹<?php echo $row['price']?></span></h4>
                       <br>
                        <div class="action">
                            <button type="button" class="btn btn-primary">Add to Cart</button>
                        </div>
                        </aside>
                        </center>
                    </div>
                </div>
            </div>
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