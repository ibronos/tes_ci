<?php echo validation_errors(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PLN Ambon</title>
  <!-- Bootstrap core CSS-->
  <!-- <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
  <!-- Custom fonts for this template-->
  <!-- <link href="./assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
  <!-- Custom styles for this template-->
  <!-- <link href="./assets/css/sb-admin.css" rel="stylesheet" type="text/css"> -->

   <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('/assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('/assets/css/sb-admin.css');?>" rel="stylesheet" type="text/css">

 
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        
        <form data-toggle="validator" role="form" method="post" action="<?php echo site_url('proses_daftar');?>">
         <?php //echo form_open('user/proses_daftar'); ?>
          <div class="form-group">
                <label for="exampleInputName">No Induk</label>
                <input class="form-control" id="noInduk" type="text" aria-describedby="nameHelp" placeholder="Enter No Induk" name="f_no_induk" required>
          </div>
          <div class="form-group">
                 <label for="exampleInputLastName">Nama</label>
                <input class="form-control" id="nama" type="text" aria-describedby="nameHelp" placeholder="Enter Nama" name="f_nama" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="f_email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nomor HP</label>
            <input class="form-control" id="noHP" type="number" aria-describedby="emailHelp" placeholder="Enter No HP" name="f_no_hp" required>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="password" type="password" placeholder="Password" name="f_password" required>
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm password" required>
              </div>
            </div>
          </div>
          <div class="form-group">
                <label for="sel1">Role</label>
                  <select class="form-control" id="sel1" name="f_role">
                    <option>Manajer Area</option>
                    <option>Asman Jaringan</option>
                    <option>Manajer Rayon</option>
                    <option>SPV Teknik</option>
                    <option>PIC Teknik</option>
                    <option>Yantek</option>
                  </select>
          </div>
          <button class="btn btn-primary btn-block" value="submit">Register</button>
        </form>
        
        <div class="text-right">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
        </div>
      </div>
    </div>
  </div>
  <br><br>

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="./assets/js/jquery.min.js"></script> -->
  <!-- <script src ="./assets/js/bootstrap.bundle.min.js"></script> -->
  <!-- Core plugin JavaScript-->
  <!-- <script src="./assets/jquery.easing.min.js"></script> -->

  <script src="<?php echo base_url('/assets/js/jquery.min.js');?>"></script>
  <script src ="<?php echo base_url('/assets/js/bootstrap.bundle.min.js');?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('/assets/jquery.easing.min.js');?>"></script>

</body>

</html>


<script type="text/javascript">
  $('form').on('submit',function(){
   if($('#password').val()!=$('#confirmPassword').val()){
       alert('Password harus sama !');
       return false;
   }
   return true;
});
</script>