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
                $query = "SELECT * FROM user where status=1" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                      <tr bgcolor = '#08AAC6'>
                      <td>ID</td>
                      <td>Username</td>
                      <td>Status</td>
                      <td>Detail</td>
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["user_id"] .  "</td> ";
                    echo "<td>" .$row["username"] .  "</td> ";
                    echo "<td>" ."Member".  "</td> ";
                  echo "<td><a href='show_ad.php?act=moreuser&id=$row[0];' class='btn btn-info'>More</a></td> ";
                    // echo "<td><a href='admin_form_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>
                
</body>
</html>