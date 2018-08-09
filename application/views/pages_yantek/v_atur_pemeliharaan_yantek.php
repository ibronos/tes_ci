<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Belum Selesai</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Sudah Selesai</a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content card">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
        <br>
          <?php
            $this->load->view('pages_yantek/v_pemeliharaan_belum_selesai_yantek');
          ?>
    </div>

    <div class="tab-pane fade" id="panel2" role="tabpanel">
        <br>
        <?php
            $this->load->view('pages_yantek/v_pemeliharaan_sudah_selesai_yantek');
          ?>
    </div>

</div>


