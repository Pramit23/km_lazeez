<?php
// Include config file
require_once "include/config.php";
 
// Define variables and initialize with empty values
$name = $category_name=$price= "";
$name_err=$cat_err=$price_err= "";
 
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

    // Validate category
    $input_cat = trim($_POST["category_name"]);
    if(empty($input_cat)){
        $cat_err = "Please enter a category name.";
    } elseif(!filter_var($input_cat, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $cat_err = "Please enter a valid name.";
    } else{
        $category_name = $input_cat;
    }

    // Validate price
    $input_price = trim($_POST["price"]);
    if(empty($input_price)){
        $price_err = "Please enter the price";     
    } elseif(!ctype_digit($input_price)){
        $price_err = "Please enter a positive integer value.";
    } else{
        $price = $input_price;
    }
    
    
    // Validate salary
    /*
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    */
    // Check input errors before inserting in database
    if(empty($name_err)  && empty($cat_err) && empty($price_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO foodlist (name,category_name,price) VALUES (?,?,?) ";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name,$param_cat,$param_price);
            
            // Set parameters
            $param_name = $name;
            $param_cat = $category_name;
            $param_price = $price;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: foodlist.php");
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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>km_lazeez Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.php -->
        <?php
        include("include/header.php");
        ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.php -->
            <?php
          include("include/sidebar.php");
          ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Create Food</h4>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="<?php echo $name; ?>">
                                            <span class="help-block"><?php echo $name_err;?></span>
                                        </div>
                                        <div class="form-group <?php echo (!empty($cat_err)) ? 'has-error' : ''; ?>">
                                            <label>Category Name</label>
                                            <input type="text" name="category_name" class="form-control"
                                                value="<?php echo $category_name; ?>">
                                            <span class="help-block"><?php echo $category_name;?></span>
                                        </div>

                                <div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                                    <label>Price</label>
                                    <input type="number" name="price" class="form-control"
                                        value="<?php echo $price; ?>">
                                    <span class="help-block"><?php echo $price_err;?></span>
                                </div>


                                <input type="submit" class="btn btn-primary" value="Submit">
                                <a href="foodlist.php" class="btn btn-default">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>




    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <?php
            include("include/footer.php");
            ?>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/file-upload.js"></script>
    <!-- End custom js for this page -->
</body>

</html>