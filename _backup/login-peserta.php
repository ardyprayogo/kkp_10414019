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
    <div class="container">
      <div class="row" style="margin-top: 20%"> 
        <div class="col">
        </div>
        <div class="col card text-black bg-light" style="padding: 50px;">
          <form method="post" action="login_proses.php">
            <fieldset>
            <legend class="text-center">Login Peserta</legend>
            <div class="form-group">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
                  <input type="text" class="form-control" placeholder="ID Peserta" required="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
                  <input type="password" class="form-control" placeholder="Pasword" required="">
                </div>
              </div>
            </div>
            <div class="text-center">
              <a class="btn btn-info" href="../kkp_10414019/" role="button">Batal</a>
              <button type="submit" class="btn btn-primary">Masuk</button>
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