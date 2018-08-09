<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Tambah Memeliharaan</div>
      <div class="card-body">
        
        <form data-toggle="validator" role="form" method="post" action="<?php echo site_url('proses_daftar');?>">
          <div class="form-group">
                <label for="sel1">Pilih Penyulang </label>
                  <select class="form-control" id="sel1" name="f_role">
                    <option>Maman</option>
                    <option>Bejo</option>
                    <option>Mukidi</option>
                  </select>
          </div>
          <div class="form-group">
                <label for="exampleInputName">Zona / Section</label>

                <input class="form-control" id="noInduk" type="text" aria-describedby="nameHelp" placeholder="Masukkan Zona atau Lokasi Inspeksi" name="f_no_induk" required>
          </div>
          <div class="form-group">
                 <label for="exampleInputLastName">Jadwal </label>
               
                 <input class="form-control" id="datepicker" type="text" name="f_nama" required>
          </div>
          
          <button class="btn btn-primary btn-block" value="submit">Tambah</button>
        </form>

      </div>
    </div>
  </div>

  <script>
     $('#datepicker').datepicker();
  </script>
