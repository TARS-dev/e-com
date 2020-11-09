<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ร้านค้าออนไลน์</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <?php 
      session_start();
      if(!isset($_SESSION['check'])){
        Header( 'Location: login.html' );
      }
      error_reporting( error_reporting() & ~E_NOTICE ); 
  ?>
</head>
<body>
<?php
                //1. เชื่อมต่อ database:
                include('conDB.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM product " or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                      <tr bgcolor = '#08AAC6'>
                      <td>product_id</td>
                      <td>product_name</td>
                      <td>product_detail</td>
                      <td>product_price</td>
                      <td>product_amont</td>
                      <td>product_picture</td>
                      <td>type_id</td>
                      <td>warranty_id</td>
                      <td>Edit</td>
                      <td>Delete</td>
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["product_id"] .  "</td> ";
                    echo "<td>" .$row["product_name"] .  "</td> ";
                    echo "<td>" .$row["product_detail"] .  "</td> ";
                    echo "<td>" .$row["product_price"] .  "</td> ";
                    echo "<td>" .$row["product_amount"] .  "</td> ";
                    echo "<td><img src=upload/".$row["product_pic"]." width=100 heigth=100/></td> ";
                    echo "<td>" .$row["type_id"] .  "</td> ";
                    echo "<td>" .$row["warranty_id"] .  "</td> ";
                  echo "<td><a href='shop_pro.php?act=edit_pro&id=$row[0];' class='btn btn-warning'>Edit</a></td> ";
                  echo "<td><a href='delete_pro.php?act=delete&id=$row[0];' class='btn btn-danger'>Delete</a></td> ";
                    // echo "<td><a href='admin_form_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                // $act = $_GET['act'];
                // if($act == 'add'){
                //   include('form_edit_type.php');
                // }
                //5. close connection
                mysqli_close($con);
                ?>
                
</body>
</html>