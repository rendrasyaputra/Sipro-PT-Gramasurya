<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FINISHING PROSES</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <div class="card-title">
        <h3>Lihat Mesin MBO</h3>
      </div>
    </div>
    <!-- /.card-header -->
    <?php foreach($fp as $s => $row) {?>  
    <form action="<?=site_url('finishing/FinishingProses/proses_mbo')?>" method="post">      
    <input type="text"  name="id_order"  value="<?= $row->id_order; ?>" hidden>
    <input type="text"  name="id_mbo"  value="<?= $row->id_mbo; ?>" hidden>

    <div class="card-body">
      <div class="card-body">
        <h4>DETAIL ORDERAN</h4><hr>
        <div class="row">
          <div class="col-md-4">
            Nomor SO
            <br><label class="form-label"><?= $row->nomor_so; ?></label>
          </div>
          <div class="col-md-4">
            Nama Orderan
            <br><label class="form-label"><?= $row->nama_orderan; ?></label>
          </div>
          <div class="col-md-4">
            Finishing
            <br><label class="form-label">
            <?php 
                        $finishing = "";
                        if($row->bending != null){
                            $finishing .= "bending, ";
                        }
                        if($row->hard_cover != null){
                            $finishing .= 'hard cover, ';
                        }   
                        if($row->jahit_benang != null){
                            $finishing .= 'jahit benang, ';
                        } 
                        if($row->jahit_kawat != null){
                            $finishing .= 'jahit kawat, ';
                        }    
                        if($row->pond != null){
                            $finishing .= 'pond, ';
                        }   
                        if($row->klem != null){
                            $finishing .= 'klem, ';
                        } 
                        if($row->spiral != null){
                            $finishing .= 'Spiral, ';
                        }
                        $finishing = rtrim($finishing, ", ");
                        echo $finishing;
                    ?>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <br>Nama Pemesan
            <br><label class="form-label"><?= $row->nama_pemesan; ?></label>
          </div>
          <div class="col-md-4">
            <br>Ukuran
            <br><label class="form-label"><?= $row->ukuran; ?></label>
          </div>
          <div class="col-md-4">
            <br>Oplag
            <br><label class="form-label"><?= $row->oplag; ?></label>
          </div>
          <div class="col-md-4">
            <br>halaman
            <br><label class="form-label"><?= $row->halaman; ?></label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <br><label>Status</label><br>
            <div class="form-check">

          <input type="text" name="status_mbo" value="" hidden>
          <input disabled class="form-check-input" type="checkbox" name="status_mbo" value="mbo" id="flexCheckDefault" <?php echo $row->status_mbo == "mbo" ?  "checked" : "" ?>>
          <label class="form-check-label" for="flexCheckDefault">Finishing Proses Isi</label>

          </div>
          </div>
        </div><br>
        <div class="row">
        <div class="col-md-4">
            <label>Tanggal Pelaksanaan</label><br>
            <input hidden type="date" class="form-control" name="tanggal_pelaksanaan_mbo" placeholder="Tanggal Pelaksanaan" value="<?= $row->tanggal_pelaksanaan_mbo; ?>" required>
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pelaksanaan_mbo" placeholder="Tanggal Pelaksanaan" value="<?= $row->tanggal_pelaksanaan_mbo; ?>" required>
          </div>
          <div class="col-md-4">
            Jenis mbo<br>
            <label>
            <?php 
              $lam = "";
              if($row->doff != null){
                $lam .= "doff, ";
              }
              if($row->glossy != null){
                $lam .= 'glossy, ';
              }   
              if($row->uvi != null){
                $lam .= 'uvi, ';
              } 
              
              $lam = rtrim($lam, ", ");
              echo $lam;
            ?>
            </label>
          </div>
          <div class="col-md-4">
            <label>Keterangan</label><br>           
            <input hidden type="text" name="keterangan_jadwal_fp_mbo"  value="<?= $row->keterangan_jadwal_fp_mbo; ?>" >             
            <textarea  <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> name="keterangan_jadwal_fp_mbo" class="form-control" placeholder="catatan" style="height: 100px;"><?= $row->keterangan_jadwal_fp_mbo; ?></textarea>
          </div>  
        </div><hr>

        <div class="row">
          <div class="col-md-12">
            <label>Laporan Pengerjaan</label>
          </div>
        </div><br>
        <div class="col" align="left">            
            <div class="col-md-2">                        
                                  <label>Total Hasil : <?= $row->hasil_lipatan_lembar_1+$row->hasil_lipatan_lembar_2+$row->hasil_lipatan_lembar_3+$row->hasil_lipatan_lembar_4+$row->hasil_lipatan_lembar_5+$row->hasil_lipatan_lembar_6+$row->hasil_lipatan_lembar_7+$row->hasil_lipatan_lembar_8+$row->hasil_lipatan_lembar_9+$row->hasil_lipatan_lembar_10+$row->hasil_lipatan_lembar_11+$row->hasil_lipatan_lembar_12+$row->hasil_lipatan_lembar_13+$row->hasil_lipatan_lembar_14+$row->hasil_lipatan_lembar_15+$row->hasil_lipatan_lembar_16+$row->hasil_lipatan_lembar_17+$row->hasil_lipatan_lembar_18+$row->hasil_lipatan_lembar_19+$row->hasil_lipatan_lembar_20; ?></label><br>
                                  
                                  <label>Total Keseluruhan : <?= $total_keseluruhan;?></label>
                                              
            </div></div>     
        <div class="row" align="center">
          <div class="col-md-2"></div>
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Jenis Lipatan</label></div>
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Hasil Lipatan</label></div>
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Nama Operator</label></div>
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Tanggal Pengerjaan</label></div>
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Keterangan</label></div>
        </div><br>

        <input type="text" name="lipat_lembar_1" value="<?= $row->lipat_lembar_1; ?>" hidden>
        <input type="text" name="lipat_lembar_2" value="<?= $row->lipat_lembar_2; ?>" hidden>
        <input type="text" name="lipat_lembar_3" value="<?= $row->lipat_lembar_3; ?>" hidden>
        <input type="text" name="lipat_lembar_4" value="<?= $row->lipat_lembar_4; ?>" hidden>
        <input type="text" name="lipat_lembar_5" value="<?= $row->lipat_lembar_5; ?>" hidden>
        <input type="text" name="lipat_lembar_6" value="<?= $row->lipat_lembar_6; ?>" hidden>
        <input type="text" name="lipat_lembar_7" value="<?= $row->lipat_lembar_7; ?>" hidden>
        <input type="text" name="lipat_lembar_8" value="<?= $row->lipat_lembar_8; ?>" hidden>
        <input type="text" name="lipat_lembar_9" value="<?= $row->lipat_lembar_9; ?>" hidden>
        <input type="text" name="lipat_lembar_10" value="<?= $row->lipat_lembar_10; ?>" hidden>
        <input type="text" name="lipat_lembar_11" value="<?= $row->lipat_lembar_11; ?>" hidden>
        <input type="text" name="lipat_lembar_12" value="<?= $row->lipat_lembar_12; ?>" hidden>
        <input type="text" name="lipat_lembar_13" value="<?= $row->lipat_lembar_13; ?>" hidden>
        <input type="text" name="lipat_lembar_14" value="<?= $row->lipat_lembar_14; ?>" hidden>
        <input type="text" name="lipat_lembar_15" value="<?= $row->lipat_lembar_15; ?>" hidden>
        <input type="text" name="lipat_lembar_16" value="<?= $row->lipat_lembar_16; ?>" hidden>
        <input type="text" name="lipat_lembar_17" value="<?= $row->lipat_lembar_17; ?>" hidden>
        <input type="text" name="lipat_lembar_18" value="<?= $row->lipat_lembar_18; ?>" hidden>
        <input type="text" name="lipat_lembar_19" value="<?= $row->lipat_lembar_19; ?>" hidden>        
        <input type="text" name="lipat_lembar_20" value="<?= $row->lipat_lembar_20; ?>" hidden>

        <input type="text" name="hasil_lipatan_lembar_1" value="<?= $row->hasil_lipatan_lembar_1; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_2" value="<?= $row->hasil_lipatan_lembar_2; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_3" value="<?= $row->hasil_lipatan_lembar_3; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_4" value="<?= $row->hasil_lipatan_lembar_4; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_5" value="<?= $row->hasil_lipatan_lembar_5; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_6" value="<?= $row->hasil_lipatan_lembar_6; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_7" value="<?= $row->hasil_lipatan_lembar_7; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_8" value="<?= $row->hasil_lipatan_lembar_8; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_9" value="<?= $row->hasil_lipatan_lembar_9; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_10" value="<?= $row->hasil_lipatan_lembar_10; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_11" value="<?= $row->hasil_lipatan_lembar_11; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_12" value="<?= $row->hasil_lipatan_lembar_12; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_13" value="<?= $row->hasil_lipatan_lembar_13; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_14" value="<?= $row->hasil_lipatan_lembar_14; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_15" value="<?= $row->hasil_lipatan_lembar_15; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_16" value="<?= $row->hasil_lipatan_lembar_16; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_17" value="<?= $row->hasil_lipatan_lembar_17; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_18" value="<?= $row->hasil_lipatan_lembar_18; ?>" hidden>
        <input type="text" name="hasil_lipatan_lembar_19" value="<?= $row->hasil_lipatan_lembar_19; ?>" hidden>        
        <input type="text" name="hasil_lipatan_lembar_20" value="<?= $row->hasil_lipatan_lembar_20; ?>" hidden>

        <input type="text" name="operator_lembar_1" value="<?= $row->operator_lembar_1; ?>" hidden>
        <input type="text" name="operator_lembar_2" value="<?= $row->operator_lembar_2; ?>" hidden>
        <input type="text" name="operator_lembar_3" value="<?= $row->operator_lembar_3; ?>" hidden>
        <input type="text" name="operator_lembar_4" value="<?= $row->operator_lembar_4; ?>" hidden>
        <input type="text" name="operator_lembar_5" value="<?= $row->operator_lembar_5; ?>" hidden>
        <input type="text" name="operator_lembar_6" value="<?= $row->operator_lembar_6; ?>" hidden>
        <input type="text" name="operator_lembar_7" value="<?= $row->operator_lembar_7; ?>" hidden>
        <input type="text" name="operator_lembar_8" value="<?= $row->operator_lembar_8; ?>" hidden>
        <input type="text" name="operator_lembar_9" value="<?= $row->operator_lembar_9; ?>" hidden>
        <input type="text" name="operator_lembar_10" value="<?= $row->operator_lembar_10; ?>" hidden>
        <input type="text" name="operator_lembar_11" value="<?= $row->operator_lembar_11; ?>" hidden>
        <input type="text" name="operator_lembar_12" value="<?= $row->operator_lembar_12; ?>" hidden>
        <input type="text" name="operator_lembar_13" value="<?= $row->operator_lembar_13; ?>" hidden>
        <input type="text" name="operator_lembar_14" value="<?= $row->operator_lembar_14; ?>" hidden>
        <input type="text" name="operator_lembar_15" value="<?= $row->operator_lembar_15; ?>" hidden>
        <input type="text" name="operator_lembar_16" value="<?= $row->operator_lembar_16; ?>" hidden>
        <input type="text" name="operator_lembar_17" value="<?= $row->operator_lembar_17; ?>" hidden>
        <input type="text" name="operator_lembar_18" value="<?= $row->operator_lembar_18; ?>" hidden>
        <input type="text" name="operator_lembar_19" value="<?= $row->operator_lembar_19; ?>" hidden>        
        <input type="text" name="operator_lembar_20" value="<?= $row->operator_lembar_20; ?>" hidden>

        <input type="text" name="tanggal_pengerjaan_lembar_1" value="<?= $row->tanggal_pengerjaan_lembar_1; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_2" value="<?= $row->tanggal_pengerjaan_lembar_2; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_3" value="<?= $row->tanggal_pengerjaan_lembar_3; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_4" value="<?= $row->tanggal_pengerjaan_lembar_4; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_5" value="<?= $row->tanggal_pengerjaan_lembar_5; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_6" value="<?= $row->tanggal_pengerjaan_lembar_6; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_7" value="<?= $row->tanggal_pengerjaan_lembar_7; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_8" value="<?= $row->tanggal_pengerjaan_lembar_8; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_9" value="<?= $row->tanggal_pengerjaan_lembar_9; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_10" value="<?= $row->tanggal_pengerjaan_lembar_10; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_11" value="<?= $row->tanggal_pengerjaan_lembar_11; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_12" value="<?= $row->tanggal_pengerjaan_lembar_12; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_13" value="<?= $row->tanggal_pengerjaan_lembar_13; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_14" value="<?= $row->tanggal_pengerjaan_lembar_14; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_15" value="<?= $row->tanggal_pengerjaan_lembar_15; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_16" value="<?= $row->tanggal_pengerjaan_lembar_16; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_17" value="<?= $row->tanggal_pengerjaan_lembar_17; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_18" value="<?= $row->tanggal_pengerjaan_lembar_18; ?>" hidden>
        <input type="text" name="tanggal_pengerjaan_lembar_19" value="<?= $row->tanggal_pengerjaan_lembar_19; ?>" hidden>        
        <input type="text" name="tanggal_pengerjaan_lembar_20" value="<?= $row->tanggal_pengerjaan_lembar_20; ?>" hidden>

        <input type="text" name="keterangan_lembar_1" value="<?= $row->keterangan_lembar_1; ?>" hidden>
        <input type="text" name="keterangan_lembar_2" value="<?= $row->keterangan_lembar_2; ?>" hidden>
        <input type="text" name="keterangan_lembar_3" value="<?= $row->keterangan_lembar_3; ?>" hidden>
        <input type="text" name="keterangan_lembar_4" value="<?= $row->keterangan_lembar_4; ?>" hidden>
        <input type="text" name="keterangan_lembar_5" value="<?= $row->keterangan_lembar_5; ?>" hidden>
        <input type="text" name="keterangan_lembar_6" value="<?= $row->keterangan_lembar_6; ?>" hidden>
        <input type="text" name="keterangan_lembar_7" value="<?= $row->keterangan_lembar_7; ?>" hidden>
        <input type="text" name="keterangan_lembar_8" value="<?= $row->keterangan_lembar_8; ?>" hidden>
        <input type="text" name="keterangan_lembar_9" value="<?= $row->keterangan_lembar_9; ?>" hidden>
        <input type="text" name="keterangan_lembar_10" value="<?= $row->keterangan_lembar_10; ?>" hidden>
        <input type="text" name="keterangan_lembar_11" value="<?= $row->keterangan_lembar_11; ?>" hidden>
        <input type="text" name="keterangan_lembar_12" value="<?= $row->keterangan_lembar_12; ?>" hidden>
        <input type="text" name="keterangan_lembar_13" value="<?= $row->keterangan_lembar_13; ?>" hidden>
        <input type="text" name="keterangan_lembar_14" value="<?= $row->keterangan_lembar_14; ?>" hidden>
        <input type="text" name="keterangan_lembar_15" value="<?= $row->keterangan_lembar_15; ?>" hidden>
        <input type="text" name="keterangan_lembar_16" value="<?= $row->keterangan_lembar_16; ?>" hidden>
        <input type="text" name="keterangan_lembar_17" value="<?= $row->keterangan_lembar_17; ?>" hidden>
        <input type="text" name="keterangan_lembar_18" value="<?= $row->keterangan_lembar_18; ?>" hidden>
        <input type="text" name="keterangan_lembar_19" value="<?= $row->keterangan_lembar_19; ?>" hidden>        
        <input type="text" name="keterangan_lembar_20" value="<?= $row->keterangan_lembar_20; ?>" hidden>


        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 1</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_1" >
              <option value="<?= $row->lipat_lembar_1; ?>"><?= $row->lipat_lembar_1; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_1" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_1; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_1" placeholder="Nama Operator" value="<?= $row->operator_lembar_1; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_1" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_1; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_1" placeholder="Keterangan" value="<?= $row->keterangan_lembar_1; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 2</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_2" >              
              <option value="<?= $row->lipat_lembar_2; ?>"><?= $row->lipat_lembar_2; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_2" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_2; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_2" placeholder="Nama Operator" value="<?= $row->operator_lembar_2; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_2" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_2; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_2" placeholder="Keterangan" value="<?= $row->keterangan_lembar_2; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 3</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_3" >
              <option value="<?= $row->lipat_lembar_3; ?>"><?= $row->lipat_lembar_3; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_3" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_3; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_3" placeholder="Nama Operator" value="<?= $row->operator_lembar_3; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_3" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_3; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_3" placeholder="Keterangan" value="<?= $row->keterangan_lembar_3; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 4</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_4" >
              <option value="<?= $row->lipat_lembar_4; ?>"><?= $row->lipat_lembar_4; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_4" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_4; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_4" placeholder="Nama Operator" value="<?= $row->operator_lembar_4; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_4" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_4; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_4" placeholder="Keterangan" value="<?= $row->keterangan_lembar_4; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 5</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_5" >
              <option value="<?= $row->lipat_lembar_5; ?>"><?= $row->lipat_lembar_5; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_5" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_5; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_5" placeholder="Nama Operator" value="<?= $row->operator_lembar_5; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_5" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_5; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_5" placeholder="Keterangan" value="<?= $row->keterangan_lembar_5; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 6</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_6" >
              <option value="<?= $row->lipat_lembar_6; ?>"><?= $row->lipat_lembar_6; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_6" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_6; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_6" placeholder="Nama Operator" value="<?= $row->operator_lembar_6; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_6" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_6; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_6" placeholder="Keterangan" value="<?= $row->keterangan_lembar_6; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 7</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_7" >
              <option value="<?= $row->lipat_lembar_7; ?>"><?= $row->lipat_lembar_7; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_7" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_7; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_7" placeholder="Nama Operator" value="<?= $row->operator_lembar_7; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_7" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_7; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_7" placeholder="Keterangan" value="<?= $row->keterangan_lembar_7; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 8</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_8" >
              <option value="<?= $row->lipat_lembar_8; ?>"><?= $row->lipat_lembar_8; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_8" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_8; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_8" placeholder="Nama Operator" value="<?= $row->operator_lembar_8; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_8" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_8; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_8" placeholder="Keterangan" value="<?= $row->keterangan_lembar_8; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 9</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_9" >
              <option value="<?= $row->lipat_lembar_9; ?>"><?= $row->lipat_lembar_9; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_9" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_9; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_9" placeholder="Nama Operator" value="<?= $row->operator_lembar_9; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_9" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_9; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_9" placeholder="Keterangan" value="<?= $row->keterangan_lembar_9; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 10</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_10" >
              <option value="<?= $row->lipat_lembar_10; ?>"><?= $row->lipat_lembar_10; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_10" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_10; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_10" placeholder="Nama Operator" value="<?= $row->operator_lembar_10; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_10" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_10; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_10" placeholder="Keterangan" value="<?= $row->keterangan_lembar_10; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 11</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_11" >
              <option value="<?= $row->lipat_lembar_11; ?>"><?= $row->lipat_lembar_11; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_11" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_11; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_11" placeholder="Nama Operator" value="<?= $row->operator_lembar_11; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_11" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_11; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_11" placeholder="Keterangan" value="<?= $row->keterangan_lembar_11; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 12</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_12" >
              <option value="<?= $row->lipat_lembar_12; ?>"><?= $row->lipat_lembar_12; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_12" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_12; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_12" placeholder="Nama Operator" value="<?= $row->operator_lembar_12; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_12" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_12; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_12" placeholder="Keterangan" value="<?= $row->keterangan_lembar_12; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 13</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_13" >
              <option value="<?= $row->lipat_lembar_13; ?>"><?= $row->lipat_lembar_13; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_13" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_13; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_13" placeholder="Nama Operator" value="<?= $row->operator_lembar_13; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_13" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_13; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_13" placeholder="Keterangan" value="<?= $row->keterangan_lembar_13; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 14</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_14" >
              <option value="<?= $row->lipat_lembar_14; ?>"><?= $row->lipat_lembar_14; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_14" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_14; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_14" placeholder="Nama Operator"value="<?= $row->operator_lembar_14; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_14" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_14; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_14" placeholder="Keterangan" value="<?= $row->keterangan_lembar_14; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 15</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_15" >
              <option value="<?= $row->lipat_lembar_15; ?>"><?= $row->lipat_lembar_15; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_15" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_15; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_15" placeholder="Nama Operator" value="<?= $row->operator_lembar_15; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_15" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_15; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_15" placeholder="Keterangan" value="<?= $row->keterangan_lembar_15; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 16</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_16" >
              <option value="<?= $row->lipat_lembar_16; ?>"><?= $row->lipat_lembar_16; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_16" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_16; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_16" placeholder="Nama Operator" value="<?= $row->operator_lembar_16; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_16" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_16; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_16" placeholder="Keterangan" value="<?= $row->keterangan_lembar_16; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 17</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_17" >
              <option value="<?= $row->lipat_lembar_17; ?>"><?= $row->lipat_lembar_17; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_17" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_17; ?>"> 
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_17" placeholder="Nama Operator" value="<?= $row->operator_lembar_17; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_17" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_17; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_17" placeholder="Keterangan" value="<?= $row->keterangan_lembar_17; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 18</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_18" >
              <option value="<?= $row->lipat_lembar_18; ?>"><?= $row->lipat_lembar_18; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_18" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_18; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_18" placeholder="Nama Operator" value="<?= $row->operator_lembar_18; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_18" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_18; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_18" placeholder="Keterangan" value="<?= $row->keterangan_lembar_18; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 19</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_19" >
              <option value="<?= $row->lipat_lembar_19; ?>"><?= $row->lipat_lembar_19; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_19" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_19; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_19" placeholder="Nama Operator" value="<?= $row->operator_lembar_19; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_19" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_19; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_19" placeholder="Keterangan" value="<?= $row->keterangan_lembar_19; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-2"><label <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?>>Lembar 20</label></div>
          <div class="col-md-2">
            <select disabled <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> id="inputState" class="form-select form-control" name="lipat_lembar_20" >
              <option value="<?= $row->lipat_lembar_20; ?>"><?= $row->lipat_lembar_20; ?></option>
              <option value="Lipat 1">Lipat 1</option>
              <option value="Lipat 2">Lipat 2</option>
              <option value="Lipat 3">Lipat 3</option>
              <option value="Lipat 4">Lipat 4</option>
              <option value="-">-</option>
            </select>
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="number" class="form-control" name="hasil_lipatan_lembar_20" placeholder="Hasil Lipatan" value="<?= $row->hasil_lipatan_lembar_20; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="operator_lembar_20" placeholder="Nama Operator" value="<?= $row->operator_lembar_20; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pengerjaan_lembar_20" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_lembar_20; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_mbo == "mbo" ?  "disabled" : "disabled"?> type="text" class="form-control" name="keterangan_lembar_20" placeholder="Keterangan" value="<?= $row->keterangan_lembar_20; ?>">
          </div>
        </div><hr><br>

        <div class="row">
          <div class="col" align="right">
          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp_mbo" class="btn btn-default">Kembali</a>          
          </div>
        </div>

      </div>
    </div>
    </form>
    <?php } ?>
  </div>  
  <!-- /.card -->
</section>
<!-- /.content -->
   