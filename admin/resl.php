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
              <h2> Reservation Request  </h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
              <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <p><b>Reservation Log:</b></p>
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">phone</th>
                                <th scope="col">date</th>
                                <th scope="col">time</th>
                                <th scope="col">status</th>
                            </tr>
                            </thead>
                            <tbody>
                                                            <tr>
                                    <th scope="row">1</th>
                                    <td>Pramit Majumar</td>
                                    <td>456312</td>
                                    <td>2020-02-02</td>
                                    <td>5.00 PM</td>

                                    <td>
                                                                                    <span class="badge  badge-pill  badge-success">Accepted</span>
                                                                            </td>

                                </tr>
                                                            <tr>
                                    <th scope="row">2</th>
                                    <td>Tarak kha</td>
                                    <td>9932115703</td>
                                    <td>2020-01-02</td>
                                    <td>8</td>

                                    <td>
                                        
                                            <span class="badge  badge-pill  badge-danger">rejected</span>
                                                                            </td>

                                </tr>
                                                            <tr>
                                    <th scope="row">3</th>
                                    <td>Arvind Kumar</td>
                                    <td>8972721194</td>
                                    <td>2020-01-12</td>
                                    <td>12 PM</td>

                                    <td>
                                        
                                            <span class="badge  badge-pill  badge-danger">rejected</span>
                                                                            </td>

                                </tr>
                                                            <tr>
                                    <th scope="row">4</th>
                                    <td>Mrigank</td>
                                    <td>0221365978</td>
                                    <td>2020-01-14</td>
                                    <td>8</td>

                                    <td>
                                        
                                            <span class="badge  badge-pill  badge-danger">rejected</span>
                                                                            </td>

                                </tr>
                            
                            </tbody>
                        </table>
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