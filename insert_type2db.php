<?php
include('conDB.php');

$addType = $_POST['add_type_name'];

$sql ="INSERT INTO type(type_name) VALUES('$addType')";
    
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($con);
    
    if($result){
      echo "<script>";
      echo "alert('Save Succesfully');";
      echo "window.location ='show_type.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='show_type.php'; ";
      echo "</script>";
    }
?>