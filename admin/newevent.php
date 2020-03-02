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
          
             <div class="content p-4">            
    <h2 class="mb-4" style="text-transform: uppercase;"> New Event
        <a href="http://lazeez.softwareretailsolutions.com/admin/events" class="btn btn-primary btn-md float-right customs_btn">
            <i class="fa fa-list"></i> View Event List
        </a>
    </h2>

    <div class="container-fluid">

        <div class="card mb-4">
            <div class="card-header bg-white font-weight-bold">
                Add Event
            </div>
            <div class="card-body">
                <form method="POST" action="http://lazeez.softwareretailsolutions.com/admin/events" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="G2CKaLitWXVd28tA98mFU85Pf76tr9e9KKC138u8">
                    <div class="form-group">
                        <label><strong>Event Title</strong></label>
                        <input type="text" name="event_title" class="form-control form-control-lg" value="" required="">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label><strong>Event Date</strong></label>
                                <input type="date" name="event_date" class="form-control form-control-lg" required="">
                            </div>
                            <div class="col-md-6">
                                <label><strong>Event Time Duration</strong></label>
                                <input type="text" name="event_duration" placeholder="Ex: 7pm - 10pm" class="form-control form-control-lg" required="">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label><strong>Event Image</strong></label>
                        <input type="file" name="event_image" class="form-control form-control-lg" value="" required="">
                        <small class="text-danger">[Image will be resize: 1000 X 870 px]</small>

                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><strong>Description</strong></label>
                        <textarea id="NicEditor" class="form-control form-control-lg" name="Description" rows="10" required=""></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-lg btn-block customs-btn-bd">CREATE</button>
                    </div>


                </form>
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