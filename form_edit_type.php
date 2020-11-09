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
      $sq = "SELECT * FROM type WHERE type_id = $use_id";
      $re = mysqli_query($con,$sq);
      if ( mysqli_num_rows($re) == 1 ) {
        $row = mysqli_fetch_array( $re );
        $_SESSION['type_id'] = $row['type_id'];
        $_SESSION['lastname'] = $row['type_name'];
      }else{
          echo "Fail";
      }
      ?>
</head>
<body>
<form  name="admin" action="Update_type.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-3" align="left"> Type_ID  </div>
            <div class="col-sm-12" align="left">
              <input  name="id_type" type="text" disabled required class="form-control" id="admin_user" pattern="^[a-zA-Z0-9]+$" 
              title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" maxlength="15" value="<?php echo $row['type_id']; ?>"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> Type_NAME  </div>
            <div class="col-sm-12" align="left">
              <input  name="name_type" type="text" required class="form-control" id="admin_pass" minlength="2" maxlength="15" value="<?php echo $row['type_name']; ?>" />
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