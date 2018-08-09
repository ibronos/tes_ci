  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Detail User</div>
      <div class="card-body">
        
        <form data-toggle="validator" role="form" method="post" action="">
          <?php foreach ($tmp_user as $key ) {?> 
          <div class="form-group">
                <label for="exampleInputName">No Induk</label>
                <input class="form-control" id="noInduk" type="text" aria-describedby="nameHelp"  name="f_no_induk" value="<?php echo $key['no_induk'];?>" disabled>
          </div>
          <div class="form-group">
                 <label for="exampleInputLastName">Nama</label>
                <input class="form-control" id="nama" type="text" aria-describedby="nameHelp" name="f_nama" value="<?php echo $key['nama'];?>" disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="email" type="email" aria-describedby="emailHelp"  name="f_email" value="<?php echo $key['email'];?>" disabled>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nomor HP</label>
            <input class="form-control" id="noHP" type="number" aria-describedby="emailHelp"  name="f_no_hp" value="<?php echo $key['no_hp'];?>" disabled>
          </div>
          <div class="form-group">
            <label for="sel1">Role</label>
            <input class="form-control" id="noHP" type="text" aria-describedby="emailHelp" name="f_no_hp" value="<?php echo $key['role'];?>" disabled>
          </div>
          
                <?php }?>
        </form>
      </div>
      <div class="card-footer">
        <a href="<?php echo site_url('admin/v_home');?>"><button class="btn btn-primary float-right">Close</button></a>
      </div>
    </div>
  </div>
