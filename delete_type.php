<?php
include('conDB.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
session_start();
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
  $id_type = $_REQUEST['id'];
  
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database 
  $sql = "DELETE FROM type WHERE type_id='$id_type' ";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con); //ปิดการเชื่อมต่อ database 

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  
  if($result){
    echo $id_type;
  echo "<script type='text/javascript'>";
  echo "alert('Data Delete!');";
  echo "window.location = 'show_type.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>