  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit User
        <a href="<?php echo site_url('admin/v_home');?>"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
      </div>
      <div class="card-body">
        
        <form data-toggle="validator" role="form" method="post" action="<?php echo site_url('admin/update_user');?>">
         <?php // form_open('admin/update_user/'.$user_item['no_induk']); ?>
          <?php foreach ($tmp_user as $key ) {?> 
          <div class="form-group">
                <label for="exampleInputName">No Induk</label>
                <input class="form-control" id="noInduk" type="text" aria-describedby="nameHelp" placeholder="Enter No Induk" name="f_no_induk" value="<?php echo $key['no_induk'];?>" required>
          </div>
          <div class="form-group">
                 <label for="exampleInputLastName">Nama</label>
                <input class="form-control" id="nama" type="text" aria-describedby="nameHelp" placeholder="Enter Nama" name="f_nama" value="<?php echo $key['nama'];?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="f_email" value="<?php echo $key['email'];?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nomor HP</label>
            <input class="form-control" id="noHP" type="number" aria-describedby="emailHelp" placeholder="Enter No HP" name="f_no_hp" value="<?php echo $key['no_hp'];?>" required>
          </div>
          <div class="form-group">
                <label for="sel1">Role</label>
                  <?php
                    $selected = $key['role'];
                  ?>
                  <select class="form-control" id="sel1" name="f_role">
                    <option <?php if($selected == 'Manajer Area'){echo("selected");}?> >Manajer Area</option>
                    <option <?php if($selected == 'Asman Jaringan'){echo("selected");}?> >Asman Jaringan</option>
                    <option <?php if($selected == 'Manajer Rayon'){echo("selected");}?> >Manajer Rayon</option>
                    <option <?php if($selected == 'SPV Teknik'){echo("selected");}?> >SPV Teknik</option>
                    <option <?php if($selected == 'PIC Teknik'){echo("selected");}?> >PIC Teknik</option>
                    <option <?php if($selected == 'Yantek'){echo("selected");}?> >Yantek</option>
                  </select>
          </div>
          <button class="btn btn-primary btn-block" value="submit">Update</button>
                <?php }?>
        </form>
      </div>
    </div>
  </div>
