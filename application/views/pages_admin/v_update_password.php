  <div class="container">
    <form data-toggle="validator" role="form" method="post" action="<?php echo site_url('admin/update_password');?>">
    <?php foreach ($tmp_user as $key ) {?> 
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit Password ID : <?php echo $key['no_induk'];?>
         <a href="<?php echo site_url('admin/v_home');?>"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
      </div>
      <div class="card-body">
        
          <input type="hidden" name="f_no_induk" value="<?php echo $key['no_induk'];?>">
          <div class="form-group">
            <div class="form">
              <div class="col-md-12">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="password" type="password" placeholder="Password" name="f_password" required>
              </div>
              <br>
              <div class="col-md-12">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="confirmPassword" type="password" placeholder="Confirm password" required>
              </div>
            </div>
          </div>   
      <?php }?>
      </div>
       <div class="card-footer">
         <button class="btn btn-primary float-right" value="submit">Update Password</button>
      </div>
    </div>
     </form>
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