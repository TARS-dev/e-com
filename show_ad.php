<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ร้านค้าออนไลน์</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <?php 
      session_start();
      if(!isset($_SESSION['check'])){
        Header( 'Location: login.html' );
      }
      error_reporting( error_reporting() & ~E_NOTICE ); 
  ?>
<head>
  <body>
    <div class="container">
      
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
          <img src="2954cc8b-74b2-4ad8-abb9-1831a070a5f9_200x200.png" alt="">
        </a>
  <a class="navbar-brand" href="index.php">Hello "<?php session_start(); echo $_SESSION["User"]; ?>"</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Setting</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="show_ad.php?act=edit">Edit Account</a>
        <a class="dropdown-item" href="show_ad.php?act=add">Add_admin</a>
        <!-- <a class="dropdown-item" href="#">Link 3</a> -->
      </div>
    </li>
    <li class="nav-item">
    <a href="show_ad.php?act=add" class="nav-link disabled">Add_admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="logout.php">Log out</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <p></p>
    <div class="row">
      <div class="col-md-3">
      <div class="list-group">
	
	<a href="show_ad.php" class="list-group-item list-group-item-action">จัดการผู้ดูแลระบบ</a>
	<a href="show_user.php" class="list-group-item list-group-item-action">จัดการสมาชิก</a>
	<a href="show_type.php?id=$row[0]" class="list-group-item list-group-item-action">จัดการประเภทสินค้า</a>
  <a href="shop_pro.php" class="list-group-item list-group-item-action disabled">จัดการสินค้า</a>
  <a href="show_team.php" class="list-group-item list-group-item-action">Team</a>
</div>
      </div>
      <div class="col-md-6">
      <p></p>
      <?php
$act = $_GET['act'];
if($act == 'add'){
include('add_admin.php');
}elseif ($act == 'edit') {
include('form_edit_ad.php');
}elseif($act == 'more'){
  include('more_info.php');
}elseif($act == 'moreuser'){
  include('more_info.php');
}
else {
    include('list_ad.php');
}
?>
        <!-- <?php //include('list_ad.php');?> -->
      </div>
    </div>
  </div>
  </body>
</html>