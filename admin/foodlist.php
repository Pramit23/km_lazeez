<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Km Lazeez</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <script src="https://kit.fontawesome.com/02c69b64af.js" crossorigin="anonymous"></script>

    <style>
        .text-muted {
            text-align: center;
        }
    </style>
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
          include("Include/sidebar.php");
          ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h2> Food </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header bg-white font-weight-bold">
                                    Foods Items
                                    <button type="submit" class="btn btn-secondary float-right customs-btn-bd"
                                        data-toggle="modal" data-target="#foodCategory">
                                        <a href="createfood.php"> Add New </a>
                                    </button>
                                </div>
                                <div class="card-body ">
                                    <table class="table table-striped">
                                    <?php
                    // Include config file
                    require_once "include/config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM foodlist";
                    if($result = mysqli_query($mysqli, $sql)){
                        if(mysqli_num_rows($result) > 0){
                        ?>
                            <table class='table table-bordered table-striped'>
                            <thead>
                            <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($row = mysqli_fetch_array($result)){
                                ?>
                                    <tr>
                                        <td> <?php echo $row['id'] ?></td>
                                        <td> <?php echo $row['name'] ?></td>
                                        <td> <?php echo $row['category_name'] ?></td>
                                        <td> <?php echo $row['price'] ?></td>
                                        <td class="text-center">
                                            <!--<a href='read.php?id="<?php echo $row['id'] ?>"' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>-->
                                            <i class='fas fa-edit'><a href='updatefood.php?id="<?php echo $row['id'] ?>"'> Edit</a></i>
                                            &nbsp;
                                            &nbsp;
                                            <i class='fas fa-trash-alt'><a href='deletefood.php?id="<?php echo $row['id'] ?>"'> Delete</a></i>
                                        </td>
                                    </tr>
                                <?php     
                                }
                                ?>
                                </tbody>                        
                            </table>
                        <?php    
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
                    }
 
                    // Close connection
                    mysqli_close($mysqli);
                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.php -->
                <?php
            include("Include/footer.php");
            ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/dashboard.js"></script>
    <script src="js/todolist.js"></script>
    <!-- End custom js for this page -->
</body>

</html>