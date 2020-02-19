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
        .gallery {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-width: 33%;
            -moz-column-width: 33%;
            column-width: 33%;
        }

        .gallery .pics {
            -webkit-transition: all 350ms ease;
            transition: all 350ms ease;
        }

        .gallery .animation {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        @media (max-width: 450px) {
            .gallery {
                -webkit-column-count: 1;
                -moz-column-count: 1;
                column-count: 1;
                -webkit-column-width: 100%;
                -moz-column-width: 100%;
                column-width: 100%;
            }
        }

        @media (max-width: 400px) {
            .btn.filter {
                padding-left: 1.1rem;
                padding-right: 1.1rem;
            }
        }
    </style>
    <script>
        $(function () {
            var selectedClass = "";
            $(".filter").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#gallery").fadeTo(100, 0.1);
                $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function () {
                    $("." + selectedClass).fadeIn().addClass('animation');
                    $("#gallery").fadeTo(300, 1);
                }, 300);
            });
        });
    </script>
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
                <h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumb -->
    <div class="container">
        <ol class="breadcrumb w3l-crumbs">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Careers</li>
        </ol>
    </div>
    <!-- //breadcrumb -->
    <!-- careers-page -->
    <div class="careers about">
        <div class="container">
            <h3 class="w3ls-title w3ls-title1">Check our Foods</h3>
            <h5 class="text-center">Our Awesome Foods</h5>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 d-flex justify-content-center mb-5">
                    <center>
                        <button type="button" class="btn btn-outline-black waves-effect filter"
                            data-rel="all">All</button>
                        <button type="button" class="btn btn-outline-black waves-effect filter"
                            data-rel="1">Mountains</button>
                        <button type="button" class="btn btn-outline-black waves-effect filter"
                            data-rel="2">Sea</button>
                    </center>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="gallery" id="gallery">

                <!-- Grid column -->
                <div class="mb-3 pics animation all 2">
                    <img class="img-fluid"
                        src="https://www.bing.com/th?id=OIP.1VllOlIaMNdQqxTTP5nT-gHaDt&pid=Api&rs=1"
                        alt="Card image cap">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                    <img class="img-fluid" src="https://www.bing.com/th?id=OIP.NWqDqY03A8J3qVFM8IHfTAHaFj&pid=Api&rs=1"
                        alt="Card image cap">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                    <img class="img-fluid" src="https://www.bing.com/th?id=OIP.YnYQ8aBo0Z8OJbll0nm9pQHaGG&pid=Api&w=1600&h=1318&rs=1"
                        alt="Card image cap">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics animation all 2">
                    <img class="img-fluid"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                        alt="Card image cap">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics animation all 2">
                    <img class="img-fluid"
                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                        alt="Card image cap">
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg"
                        alt="Card image cap">
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->
        </div>
        <!-- //careers-page -->

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