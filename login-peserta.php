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
        <div class="col">
        <div class="card mt-5">
          <div class="card-body">
            <h3 class="text-center mt-3 mb-3">Halaman Login Peserta</h3>
              <form method="POST" action="includes/login-peserta.php" class="m-5">
                <fieldset>
                  <div class="form-group">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-fw fa-user"></i></div>
                        <input type="text" class="form-control" placeholder="NISN" name="nisn" required="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-fw fa-lock"></i></div>
                        <input type="password" class="form-control" placeholder="Pasword" name="password" required="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group text-center">
                    <div class="form-group">
                      <a class="btn btn-info text-white" onclick="window.history.back()" role="button"><i class="fa fa-fw fa-angle-left"></i> Batal</a>
                      <button type="submit" class="btn btn-primary" name="masuk">Masuk <i class="fa fa-fw fa-sign-in"></i></button>
                    </div>
                  </div>
                </fieldset>
              </form>
            <p class="card-text text-center">Silahkan <a href="pendaftaran-online.php">daftar</a> jika belum punya akun.</p>
          </div>
        </div>

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