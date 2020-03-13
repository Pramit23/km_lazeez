<?php
require_once("include/config.php");

$query=mysqli_query($mysqli,
"Update reservation set status='".$_POST['val']."'
 where Id='".$_POST['Id']."'");

 if($query)
 {
     $q=mysqli_query($mysqli,"SELECT * FROM reservation where Id='".$_POST['Id']."' ");
     $data = mysqli_fetch_assoc($query);
     echo $data['$status'];
 }
?>