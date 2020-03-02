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
    <style>
        .text-muted{
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
              <h2> Our Food Gallery </h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
               <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-white font-weight-bold">
                            Feature Food
                        </div>
                        <div class="card-body ">
                            <div class="row">

                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="header_subtitle"><strong>feature Title 1</strong></label>

                                        <input class="form-control form-control-lg mb-3" type="text" name="featureTitle1" value="List Of Foods" required="">
                                    </div>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="header_subtitle"><strong>feature Title 2</strong></label>

                                        <input class="form-control form-control-lg mb-3" type="text" name="featureTitle2" value="New Arrivals" required="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-white font-weight-bold">
                            All Food Page
                        </div>
                        <div class="card-body ">
                            <div class="row">


                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="header_subtitle"><strong>Food Title 1</strong></label>

                                        <input class="form-control form-control-lg mb-3" type="text" name="foodTitle1" value="Check Our Foods" required="">
                                    </div>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="header_subtitle"><strong>Food Title 2</strong></label>

                                        <input class="form-control form-control-lg mb-3" type="text" name="foodTitle2" value="Our Awesome Foods" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header bg-white font-weight-bold">
                            Food Gallery Page
                        </div>
                        <div class="card-body ">
                            <div class="row">


                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="header_subtitle"><strong>Food gallery title 1</strong></label>

                                        <input class="form-control form-control-lg mb-3" type="text" name="foodGalleryTitle1" value="Check Our Foods" required="">
                                    </div>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="header_subtitle"><strong>Food gallery title 2</strong></label>

                                        <input class="form-control form-control-lg mb-3" type="text" name="foodGalleryTitle2" value="Our Food Gallery" required="">
                                    </div>
                                </div>

                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn btn-secondary btn-lg btn-block customs-btn-bd">Save Changes
                                    </button>
                                </div>

                            </div>
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