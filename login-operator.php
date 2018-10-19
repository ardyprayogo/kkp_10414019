<!doctype html>
<html lang="en">
  <head>
    <title>SMK Dharma Karya - Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="assets/bootstrap/css/admin.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="assets/dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row"> 
        <div class="col">
        </div>
        <div class="col card text-black bg-light mt-5">
          <form method="POST" action="includes/login-operator.php" class="m-5">
            <fieldset>
            <legend class="text-center">Login Operator</legend>
            <div class="form-group mt-5">
              <div class="form-group">
                <div class="input-group">
                  <!-- <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div> -->
                  <input type="text" name="id_opt" class="form-control text-center" placeholder="ID Operator" required="">
                </div>
              </div>
            </div>
            <div class="form-group mb-5">
              <div class="form-group">
                <div class="input-group">
                  <!-- <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div> -->
                  <input type="password" name="password" class="form-control text-center" placeholder="Pasword" required="">
                </div>
              </div>
            </div>
            <div class="text-center my-5">
              <button class="btn btn-info" name="masuk" onclick="window.location.href='index.php'"><i class="fa fa-fw fa-angle-left"></i> Batal</button>
              <button type="submit" class="btn btn-primary" name="masuk" >Masuk <i class="fa fa-fw fa-sign-in"></i></button>              
            </div>
            </fieldset>
          </form>
        </div>
        <div class="col">
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>