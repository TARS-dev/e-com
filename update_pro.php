<?php
include( 'conDB.php' );
//ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
session_start();
//สร้างตัวแปรสำหรับรับค่าที่นำมาแก้ไขจากฟอร์ม
$id_pro = $_POST['product_id'];
$name_pro = $_POST['product_name'];
$de_pro = $_POST['product_detail'];
$pri_pro = $_POST['product_price'];
$am_pro = $_POST['product_amount'];
$pic = $_POST['product_pic'];
$id_ty = $_POST['type_id'];
$id_war = $_POST['warranty_id'];
//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database

$sql = "UPDATE product SET product_id='$id_pro' ,product_name='$name_pro' , product_detail='$de_pro' ,
 product_price='$pri_pro',product_amount='$am_pro' , type_id='$id_ty' ,warranty_id='$id_war' WHERE product_id='$id_pro' ";

$result = mysqli_query( $con, $sql ) or die ( "Error in query: $sql " . mysqli_error() );
if($_FILES["upload"]["name"] != ""){
    if(move_uploaded_file($_FILES["upload"]["tmp_name"],"upload/".$_FILES["upload"]["name"])){
        @unlink("upload/".$_POST["btnn"]);
        $test = $_FILES["upload"]["name"];
        $sql = "UPDATE product SET product_pic = '$test' WHERE product_id='$id_pro' ";
        $result = mysqli_query( $con, $sql ) or die ( "Error in query: $sql " . mysqli_error() );
    }
}
mysqli_close( $con );
//ปิดการเชื่อมต่อ database

//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

if ( $result ) {
    echo "<script type='text/javascript'>";
    echo "alert('Data updated!');";
    echo "window.location = 'shop_pro.php'; ";
    echo '</script>';
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo '</script>';
}
?>