  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        
        <form data-toggle="validator" role="form" method="post" action="<?php echo site_url('admin/daftar_user');?>">
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

        </form>
      </div>
      <div class="card-footer">
          <a href="<?php echo site_url('admin/v_home');?>"><button class="btn btn-primary">Cancel</button></a>
          <button class="btn btn-primary float-right" value="submit">Register</button>
      </div>
    </div>
  </div>

<script type="text/javascript">
  $('form').on('submit',function(){
   if($('#password').val()!=$('#confirmPassword').val()){
       alert('Password harus sama !');
       return false;
   }
   return true;
});
</script>