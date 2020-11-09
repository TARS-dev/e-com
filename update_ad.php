<?php
include('conDB.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
session_start();
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
  $a_user = $_REQUEST["admin_user"];
  $a_pass = $_REQUEST["admin_pass"];
  $a_first = $_REQUEST["admin_first"];
  $a_last = $_REQUEST["admin_last"];
  $a_add = $_REQUEST["admin_add"];
  $a_phone = $_REQUEST["admin_phone"];
  $ad_id = $_SESSION['UserID'];
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  
  $sql = "UPDATE user SET username='$a_user' ,password='$a_pass' WHERE user_id='$ad_id' ";
  $qe = "UPDATE user_detail SET firstname='$a_first' ,lastname='$a_last' , address='$a_add' ,phone='$a_phone' WHERE user_id='$ad_id' ";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$result1 = mysqli_query($con, $qe) or die ("Error in query: $qe " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result1){
  echo "<script type='text/javascript'>";
  echo "alert('Data updated!');";
  echo "window.location = 'show_ad.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>