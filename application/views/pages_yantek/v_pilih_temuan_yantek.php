<div class="container">
  <!-- The Modal -->

    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Pilih Temuan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-group">
            <!-- <label for="sel1">Pilih :</label> -->
            <select class="form-control" id="Ultra" onchange="run()">
              <option>--pilih--</option>
              <option value="tp">Temuan Pohon</option>
              <option value="jtm">JTM</option>
            </select>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a href="" id="plhtemuan"><button type="button" class="btn btn-danger" data-dismiss="modal">Pilih</button></a>
        </div>
        
      </div>
    </div>
</div>

<script type="text/javascript">
  function run() 
  {
    var a=document.getElementById("Ultra").value;
    if (a=='tp') 
    {
      document.getElementById("plhtemuan").href="<?php echo site_url('yantek/v_tambah_pohon');?>"; 
    }
    else if (a=='jtm')
    {
      document.getElementById("plhtemuan").href="<?php echo site_url('yantek/v_tambah_jtm');?>"; 
    }
    else 
    {
       document.getElementById("plhtemuan").href="#"; 
    }
  }
</script>