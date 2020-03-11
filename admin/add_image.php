<?php
  require_once('include/config.php');
  $upload_dir = 'images/';

  if (isset($_POST['Submit'])) {
    
    	$name = $_POST['name'];
   		$imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		

		if(!isset($errorMsg)){
			$sql = "insert into foodgallery(name,image)
					values('".$name."','".$userPic."')";
			$result = mysqli_query($link, $sql);
			if($result){
				$successMsg = 'New record added successfully';
				header('Location: foodgall.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($link);
			}
		}
  }
?>
