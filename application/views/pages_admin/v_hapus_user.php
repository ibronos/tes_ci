<div class="container">
  
<!-- <form data-toggle="validator" role="form" method="post" action="<?php echo site_url('admin/hapus_user');?>"> -->
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Hapus User</h4>
          <a href="<?php echo site_url('admin/v_home');?>"><button type="button" class="close" data-dismiss="modal">&times;</button></a>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php foreach ($tmp_user as $key ) {?> 
          <h5 class="text-center">Hapus User ID : <?php echo $key['no_induk']; ?> Dari Database ?</h5>
          <!-- <input type="hidden" name="f_no_induk" value="<?php echo $key['no_induk']; ?>"> -->
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="<?php echo site_url('admin/hapus_user/'.$key['no_induk']);?>"><button type="button" class="btn btn-danger">Hapus</button></a>
        </div>
        
      </div>
      <?php }?>
<!-- </form> -->
 
</div>