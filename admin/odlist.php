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
              <h2> Reservation List </h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Reservation List</li>
                </ol>
              </nav>
            </div>
              <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <?php
                    // Include config file
                    require_once "include/config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM reservation";
                    if($result = $mysqli->query($sql)){
                        if($result->num_rows > 0){
                          ?>
                          <table class='table table-bordered table-striped'>
                          <thead>
                          <tr>
                               <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Person</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Change Status</th>
                          </tr>
                              </thead>
                          <tbody>
                          <?php
                                while($row = $result->fetch_array()){
                          ?>
                            <tr>
                                <td><?php echo $row['Id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td> <?php echo $row['email'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['person'] ?></td>
                                <td><?php echo $row['date']?> </td>
                                <td><?php echo $row['time'] ?></td>
                                <td><?php echo $row['message'] ?></td>
                                <td>
                                  <?php      
                                        if($row['status']==1){

                                          echo "<p id=str".$row['Id'].">Approved</p>";                                        
                                        }else{
                                          echo "<p id=str".$row['Id'].">Not Approved</p>";
                                        }
                                  ?>
                                </td>
                                <td>
                                        <select onchange="active_disactive_reserve(this.value,<?php echo $row['Id'] ?>)">
                                        <option value="1">Approved</option>
                                        <option value="0">Not Approved</option>

                                </td>
                                </tr>
                                <?php
                                  }
                                  ?>
                              </tbody>                            
                          </table>
                          <?php
                            // Free result set
                            $result->free();
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                    }
                    
                    // Close connection
                    $mysqli->close();
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
    <script>
    function active_disactive_reserve(val,Id) {
      $.ajax({
        type: "POST",
        url: "change.php",
        data:{val:val,Id:Id},
        success:function(result){
          if(result==1){
           $('#str' +Id).html("Appoved");
          }else{
            $('#str' +Id).html("Not Appoved");
          }
        }
      });
    }
  </script>
  </body>
</html>