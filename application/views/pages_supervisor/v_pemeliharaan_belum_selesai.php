 <div class="container">
    <h3 class="d-flex justify-content-center">Pemeliharaan Belum Selesai</h3>
 </div>
 <div class="card mb-3" id="">
        <div class="card-header">
             <button type="button"><a href="<?php echo site_url('supervisor/v_tambah_pemeliharaan');?>">Tambah Laporan</a></button><br>
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
                  <!-- <th>Ubah Status</th> -->
                  <th>Detail</th>
                   <th>Tindakan (Laporkan Manajer)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Maman</td>
                  <td>ambon tengah</td>
                  <td>17/08/1945</td>
                  <td>Belum Selesai</td>
                  <!-- <td><button><a href="<?php echo site_url('yantek/v_edit_status_yantek');?>">Ubah Status</a> </button></td> -->
                  <td>          
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Detail |</a>
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Edit |</a>
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Hapus</a>                
                  </td>
                  <td><button><a href="<?php echo site_url('yantek/v_notif_detail_yantek');?>">Laporkan</a></button></td>
                </tr>
                <tr>
                  <td>Mukidi</td>
                  <td>ambon tengah</td>
                  <td>17/08/1945</td>
                  <td>Belum Selesai</td>
                   <!-- <td><button><a href="<?php echo site_url('yantek/v_edit_status_yantek');?>">Ubah Status </a> </button></td> -->
                  <td>        
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Detail |</a>
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Edit |</a>
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Hapus</a>              
                  </td>
                  <td><button><a href="<?php echo site_url('yantek/v_notif_detail_yantek');?>">Laporkan</a></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
</div>