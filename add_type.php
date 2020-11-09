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
<form  name="admin" action="insert_type2db.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-3" align="left"> Type_name  </div>
            <div class="col-sm-12" align="left">
              <input  name="add_type_name" type="text" required class="form-control" id="admin_user" placeholder="a-z A-Z 0-9 + $"  title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2" maxlength="15"/>
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
        
</html>