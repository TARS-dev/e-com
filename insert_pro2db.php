<?php
include( 'conDB.php' );

// $id_pro = $_POST['product_id'];
$name_pro = $_POST['product_name'];
$de_pro = $_POST['product_detail'];
$pri_pro = $_POST['product_price'];
$am_pro = $_POST['product_amount'];
$upload = isset( $_POST['product_pic'] );
$id_ty = $_POST['type_id'];
$id_war = $_POST['warranty_id'];
// //
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
$dir = "upload/";
$fileImage = $dir.basename($_FILES["upload"]["name"]);
if (move_uploaded_file($_FILES["upload"]["tmp_name"],$fileImage)){
    echo "File Name : ".basename($_FILES["upload"]["name"]) . "uploaded";
}else{
    echo "Fail";
}
    $sql = "INSERT INTO product(product_name,product_detail,product_price,product_amount,product_pic,type_id,warranty_id) 
    VALUES('$name_pro','$de_pro','$pri_pro','$am_pro','".$_FILES["upload"]["name"]."','$id_ty','$id_war')";

    $result = mysqli_query( $con, $sql ) or die ( "Error in query: $sql " . mysqli_error() );
    mysqli_close( $con );

    if ( $result ) {
        echo '<script>';
        echo "alert('Save Succesfully');";
          echo "window.location ='show_type.php'; ";
        echo '</script>';
    } else {

        echo '<script>';
        echo "alert('ERROR!');";
        echo "window.location ='show_type.php'; ";
        echo '</script>';
    }
?>