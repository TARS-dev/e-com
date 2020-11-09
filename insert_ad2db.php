<?php
include('conDB.php');

$username = $_POST['admin_user'];
$password = $_POST['admin_pass'];

$sql ="INSERT INTO user(username,password,status) VALUES('$username', '$password', '2')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('Save Succesfully');";
      echo "window.location ='show_ad.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    }
?>