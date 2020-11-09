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
      $use_id = $_SESSION['UserID'];
      $sq = "SELECT * FROM user_detail WHERE user_id = $use_id";
      $re = mysqli_query($con,$sq);
      if ( mysqli_num_rows($re) == 1 ) {
        $row = mysqli_fetch_array( $re );
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['address'] = $row['address'];
        $_SESSION['phone'] = $row['phone'];
      }else{
          echo "Fail";
      }
      ?>
</head>
<body>
<form  name="admin" action="update_ad.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-3" align="left"> Username  </div>
            <div class="col-sm-12" align="left">
              <input  name="admin_user" type="text" required class="form-control" id="admin_user" pattern="^[a-zA-Z0-9]+$" 
              title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" maxlength="15" value="<?php echo $_SESSION['User']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> Password  </div>
            <div class="col-sm-12" align="left">
              <input  name="admin_pass" type="text" required class="form-control" id="admin_pass" 
               pattern="^[a-zA-Z0-9]+$" minlength="2" maxlength="15" value="<?php echo $_SESSION['pass']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> Firstname  </div>
            <div class="col-sm-12" align="left">
              <input  name="admin_first" type="text" required class="form-control" id="admin_pass" 
               pattern="^[a-zA-Z0-9]+$" minlength="2" maxlength="15" value="<?php echo $_SESSION['firstname']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> Lastname  </div>
            <div class="col-sm-12" align="left">
              <input  name="admin_last" type="text" required class="form-control" id="admin_pass" 
               pattern="^[a-zA-Z0-9]+$" minlength="2" maxlength="15" value="<?php echo $_SESSION['lastname']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> Address  </div>
            <div class="col-sm-12" align="left">
              <input  name="admin_add" type="text" required class="form-control" id="admin_pass" 
               pattern="^[a-zA-Z0-9]+$" minlength="2" maxlength="15" value="<?php echo $_SESSION['address']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> Phone  </div>
            <div class="col-sm-12" align="left">
              <input  name="admin_phone" type="text" required class="form-control" id="admin_pass" 
               pattern="^[a-zA-Z0-9]+$" minlength="2" maxlength="15" value="<?php echo $_SESSION['phone']; ?>" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-12" align="right">
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> Save  </button>    
              <button type="Reset" class="btn btn-danger" id="btn1"> <span class="glyphicon glyphicon-saved"></span> Reset  </button>  
            </div> 
          </div>
        </form>
</body>
</html>