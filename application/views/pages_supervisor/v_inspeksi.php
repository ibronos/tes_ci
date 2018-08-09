 <div class="card mb-3">
        <div class="card-header">
             <button type="button"><a href="<?php echo site_url('supervisor/v_tambah_inspeksi');?>">Tambah Laporan</a></button><br>
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
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Maman</td>
                  <td>ambon tengah</td>
                  <td>17/08/1945</td>
                  <td>Selesai</td>
                  <td>
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Detail |</a>
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Edit |</a>
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Hapus</a>
                  </td>
                </tr>
                <tr>
                  <td>Mukidi</td>
                  <td>ambon tengah</td>
                  <td>17/08/1945</td>
                  <td>Selesai</td>
                  <td>
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Detail |</a>
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Edit |</a>
                    <a href="<?php echo site_url('supervisor/v_detail_inspeksi_supervisor');?>">Hapus</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
    <!-- </div> -->