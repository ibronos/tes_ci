 <div class="card mb-3">
        <div class="card-header">
             <button type="button"><a href="<?php echo site_url('admin/v_tambah_user');?>">Tambah User</a></button><br>
        </div>
         <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No Induk</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>No HP</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Ganti Password</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($tmp as $key ) {?>  
                <tr>
                  <td><?php echo $key['no_induk'];?></td>
                  <td><?php echo $key['nama'];?></td>
                  <td><?php echo $key['email'];?></td>
                  <td><?php echo $key['no_hp'];?></td>
                  <td><?php echo $key['password'];?></td>
                  <td><?php echo $key['role'];?></td>
                  <td><a href="<?php echo site_url('admin/view_update_password/'.$key['no_induk'])?>">Ganti Password</a></td>
                  <td>
                    <a href="<?php echo site_url('admin/view_detail_user/'.$key['no_induk'])?>">Detail |</a>
                    <a href="<?php echo site_url('admin/view_update_user/'.$key['no_induk'])?>">Edit |</a>
                    <a href="<?php echo site_url('admin/view_hapus_user/'.$key['no_induk'])?>">Hapus</a>
                  </td>
                </tr>
                   <?php }?>
              </tbody>
            </table>
          </div>
        </div>
</div>
    <!-- </div> -->
