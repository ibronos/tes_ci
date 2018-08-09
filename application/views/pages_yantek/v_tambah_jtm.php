<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Tambah Koomponen JTM</div>
      <div class="card-body">
        
        <form data-toggle="validator" role="form" method="post" action="<?php echo site_url('proses_daftar');?>">
          <div class="form-group">
                <label for="sel1">Urgensi</label>
                  <select class="form-control" id="sel1" name="f_role">
                    <option>Padam</option>
                    <option>Tidak Padam</option>
                  </select>
          </div>
          <div class="form-group">
                <label for="exampleInputName">Detail Peralatan</label>
                <input class="form-control" id="noInduk" type="text" aria-describedby="nameHelp" placeholder="" name="f_no_induk" required>
          </div>
          <div class="form-group">
                <label for="exampleInputName">Volume Material</label>
                <input class="form-control" id="noInduk" type="text" aria-describedby="nameHelp" placeholder="" name="f_no_induk" required>
          </div>
          <div class="form-group">
                <label for="exampleInputName">Lokasi</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          </div>
          <div class="form-group">
                <label for="exampleInputName">Keterangan</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Upload Foto Material</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
          </div>
          
          <button class="btn btn-primary btn-block" value="submit">Tambah</button>
        </form>

      </div>
    </div>
  </div>
 <br>
