<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ร้านค้าออนไลน์</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<form  name="admin" action="insert_pro2db.php" method="POST" id="admin" enctype="multipart/form-data" class="form-horizontal">
    
          <div class="form-group">
            <div class="col-sm-3" align="left"> product_name  </div>
            <div class="col-sm-12" align="left">
              <input  name="product_name" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> product_detail  </div>
            <div class="col-sm-12" align="left">
              <input  name="product_detail" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> product_price  </div>
            <div class="col-sm-12" align="left">
              <input  name="product_price" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> product_amount  </div>
            <div class="col-sm-12" align="left">
              <input  name="product_amount" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> product_pic  </div>
            <div class="col-sm-12" align="left">
              <input  name="upload" type="file"  class="form-control" id="admin_pass" 
              minlength="2"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> type_id  </div>
            <div class="col-sm-12" align="left">
              <input  name="type_id" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-3" align="left"> warranty_id  </div>
            <div class="col-sm-12" align="left">
              <input  name="warranty_id" type="text" required class="form-control" id="admin_pass" 
              minlength="2" maxlength="15" />
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