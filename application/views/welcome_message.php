<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php echo validation_errors(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- Custom fonts for this template-->
  <link href="./assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="./assets/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="./assets/css/sb-admin.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form role="form" method="post" action="<?php echo site_url('proses_login');?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Nomor Induk</label>
            <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter No Iduk" name="f_no_induk">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="f_password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" value="submit">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="./assets/jquery/jquery.min.js"></script>
  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="./assets/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
