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
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#Id</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Email</th>";
                                        echo "<th>Phone No.</th>";
                                        echo "<th>People</th>";
                                        echo "<th>Date</th>";
                                        echo "<th>Time</th>";
                                        echo "<th>Message</th>";
                                        echo "<th>Status</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<th>" . $row['Id'] . "</th>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                        echo "<td>" . $row['person'] . "</td>";
                                        echo "<td>" . $row['date'] . "</td>";
                                        echo "<td>" . $row['time'] . "</td>";
                                        echo "<td>" . $row['message'] . "</td>";
                                        $status =$row['status'];
                                        if($status =="Approved"){
                                          echo "<input type='hidden' name='id' value='".$row['id']."' id='recordId'/>";
                                          echo "<td><button  
                                          class='chageStatus'class='btn btn-success' value='Active'><a href='#'>Approved</a></button><td>";
                                        }else{
                                          echo "<td><button  
                                          class='chageStatus'class='btn btn-danger' value='InActive'><a href='#'>Not Approved</a></button><td>";                                        }
                                     
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
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
    <script>
    jQuery(document).ready(function(){
       jQuery('.chageStatus').on('click',function(){
          $.ajax({
            url:'changeStatus.php',
            type:'post',
            data:{'status':jQuery(this).val(),id:jQuery('#recordId').val()},
          }).success(function(response){
              alert(response);
          });
       });
    });
  </script>
  </body>
</html>