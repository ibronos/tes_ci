 <div class="container">
    
 </div>
 <div class="card mb-3" id="">
        <div class="card-header">
              <!-- <button type="button"><a href="<?php echo site_url('supervisor/v_tambah_inspeksi');?>">Tambah Laporan</a></button><br> -->
              <h3 class="d-flex justify-content-center">Inspeksi Belum Selesai</h3>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Penyulang</th>
                  <th>Zona / Section</th>
                  <th>Waktu Inspeksi</th>
                  <th>Status</th>
                  <th>Ubah Status</th>
                  <th>Temuan</th>
                  <th>Action</th>               
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Maman</td>
                  <td>ambon tengah</td>
                  <td>17/08/1945</td>
                  <td>Belum Selesai</td>
                  <td><button><a href="<?php echo site_url('yantek/v_edit_status_yantek');?>">Ubah Status</a> </button></td>
                  <td><button><a href="<?php echo site_url('yantek/v_pilih_temuan_yantek');?>">Upload Temuan </a> </button></td>
                  <td>           
                    <a href="<?php echo site_url('#');?>">Detail </a>
                    <!-- <a href="<?php echo site_url('yantek/v_edit_inspeksi_yantek');?>">Ubah Status </a>                -->
                  </td>
                </tr>
                <tr>
                  <td>Mukidi</td>
                  <td>ambon tengah</td>
                  <td>17/08/1945</td>
                  <td>Belum Selesai</td>
                  <td><button><a href="<?php echo site_url('yantek/v_edit_status_yantek');?>">Ubah Status </a> </button></td>
                  <td><button><a href="<?php echo site_url('yantek/v_pilih_temuan_yantek');?>">Upload Temuan </a> </button></td>            
                  <td>
                    <a href="<?php echo site_url('#');?>">Detail </a>
                    <!-- <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Ubah Status </a>                -->
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
</div>
