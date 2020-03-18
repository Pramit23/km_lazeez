<?php
  include('include/config.php');
  $upload_dir = 'images/';

  if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from foodgallery where id = ".$id;
		$result = mysqli_query($mysqli, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			unlink($upload_dir.$image);
			$sql = "delete from foodgallery where id=".$id;
			if(mysqli_query($mysqli, $sql)){
				header('location:foodgall.php');
			}
		}
	}
?>
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
                        <h2> Our Food Gallery </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="card-header bg-white font-weight-bold">
                                    Food Photo list
                                    <button type="submit" class="btn btn-secondary float-right customs-btn-bd"
                                        data-toggle="modal" data-target="#foodCategory">
                                        <a href="creategallery.php"> Add New </a>
                                    </button>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <table id="example" class="table table-striped table-bordered"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                            $sql = "select * from foodgallery";
                            $result = mysqli_query($mysqli, $sql);
                    				if(mysqli_num_rows($result)){
                    					while($row = mysqli_fetch_assoc($result)){
                          ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><?php echo $row['name'] ?></td>

                                                    <td><img src="<?php echo $upload_dir.$row['image'] ?>"
                                                            height="100px" width="100px"></td>

                                                    <td>
                                                        <a href="updatefoodgall.php?id=<?php echo $row['id'] ?>"
                                                            class="btn btn-info"><i class="fa fa-user-edit">Edit</i></a>
                                                        <a href="foodgall.php?delete=<?php echo $row['id'] ?>"
                                                            class="btn btn-danger"
                                                            onclick="return confirm('Are you sure to delete this record?')"><i
                                                                class="fa fa-trash-alt"></i>Remove</a>
                                                    </td>
                                                </tr>
                                                <?php
                              }
                            }
                          ?>
                                            </tbody>
                                        </table>

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