<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ร้านค้าออนไลน์</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <?php 
      include('conDB.php');
      session_start();
      if(!isset($_SESSION['check'])){
        Header( 'Location: login.html' );
      }
      error_reporting( error_reporting() & ~E_NOTICE ); 
      $use_id = $_GET['id'];
      $sq = "SELECT * FROM product WHERE product_id = $use_id";
      $re = mysqli_query($con,$sq);
      if ( mysqli_num_rows($re) == 1 ) {
        $row = mysqli_fetch_array( $re );
        $_SESSION['product_id'] = $row['product_id'];
        $_SESSION['product_name'] = $row['product_name'];
        $_SESSION['product_detail'] = $row['product_detail'];
        $_SESSION['product_price'] = $row['product_price'];
        $_SESSION['product_amount'] = $row['product_amount'];
        $_SESSION['product_pic'] = $row['product_pic'];
        $_SESSION['type_id'] = $row['type_id'];
        $_SESSION['warranty_id'] = $row['warranty_id'];
      }else{
          echo "Fail";
      }
      ?>
</head>
<body>
<form  name="admin" action="update_pro.php" enctype="multipart/form-data" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-3" align="left"> product_id  </div>
            <div class="col-sm-12" align="left">
              <input  name="product_id" type="text" required class="form-control" id="admin_user"  
              title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" maxlength="15" value="<?php echo $row['product_id']; ?>"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> Type_NAME  </div>
            <div class="col-sm-12" align="left">
              <input  name="product_name" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15" value="<?php echo $row['product_name']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> product_detail  </div>
            <div class="col-sm-12" align="left">
              <input  name="product_detail" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15" value="<?php echo $row['product_detail']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> product_price  </div>
            <div class="col-sm-12" align="left">
              <input  name="product_price" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15" value="<?php echo $row['product_price']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> product_amount  </div>
            <div class="col-sm-12" align="left">
              <input  name="product_amount" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15" value="<?php echo $row['product_amount']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> product_pic  </div>
            <div class="col-sm-12" align="left">
                <p>
                <img src="upload/<?php echo $row['product_pic']; ?>" width="200" height="200" />
                </p>
              <input  name="upload" type="file"  class="form-control" id="admin_pass" 
              minlength="2" maxlength="15" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> type_id  </div>
            <div class="col-sm-12" align="left">
              <input  name="type_id" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15" value="<?php echo $row['type_id']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> warranty_id  </div>
            <div class="col-sm-12" align="left">
              <input  name="warranty_id" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15" value="<?php echo $row['warranty_id']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-12" align="right">
              <button type="hidden" name="btnn" class="btn btn-success" value="<?php echo $row['product_pic']; ?>"> <span class="glyphicon glyphicon-saved"></span> Save  </button>    
              <button type="Reset" class="btn btn-danger" id="btn1"> <span class="glyphicon glyphicon-saved"></span> Reset  </button>  
            </div> 
          </div>
        </form>
</body>
</html>