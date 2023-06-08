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
        <h3>Lihat Detail Mesin Laminasi</h3>
      </div>
    </div>
    <!-- /.card-header -->
    
    <?php foreach($fp as $s => $row) {?>  
    <form action="<?=site_url('finishing/FinishingProses/proses_laminasi')?>" method="post">      
    <input type="text"  name="id_order"  value="<?= $row->id_order; ?>" hidden>
    <input type="text"  name="id_laminasi"  value="<?= $row->id_laminasi; ?>" hidden>

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
        </div>
        <div class="row">
          <div class="col-md-4">
            <br><label>Status</label><br>
            <div class="form-check">

                <input type="text" name="status_laminasi" value="" hidden>
                <input disabled class="form-check-input" type="checkbox" name="status_laminasi" value="laminasi" id="flexCheckDefault" <?php echo $row->status_laminasi == "laminasi" ?  "checked" : "" ?>>
              <label class="form-check-label" for="flexCheckDefault">Finishing Proses Cover</label>

            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">
            <label>Tanggal Pelaksanaan</label><br>
            <input hidden type="date" class="form-control" name="tanggal_pelaksanaan_laminasi" placeholder="Tanggal Pelaksanaan" value="<?= $row->tanggal_pelaksanaan_laminasi; ?>" required>
            <input disabled <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?> type="date" class="form-control" name="tanggal_pelaksanaan_laminasi" placeholder="Tanggal Pelaksanaan" value="<?= $row->tanggal_pelaksanaan_laminasi; ?>" required>
          </div>
          <div class="col-md-4">
            Jenis Laminasi<br>
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
            
            <input hidden type="text"  name="keterangan_jadwal_fp_laminasi"  value="<?= $row->keterangan_jadwal_fp_laminasi; ?>" >        
            <textarea disabled  <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?> name="keterangan_jadwal_fp_laminasi" class="form-control" placeholder="catatan" style="height: 100px;"><?= $row->keterangan_jadwal_fp_laminasi; ?></textarea>
          </div>  
        </div><hr>

        <div class="row">
          <div class="col-md-12">
            <h4><b>Laporan Pengerjaan</b></h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"><b>Pilih Jenis Laminasi</b></div>
          <input  type="text" name="jenis_laminasi" value="" hidden>
          <div class="col-md-1">
            <div class="form-check">
              <input disabled class="form-check-input" type="radio" name="jenis_laminasi" value="doff" <?php echo $row->jenis_laminasi == "doff" ?  "checked" : "" ?>>
              <label class="form-check-label">Doff</label>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-check">
              <input disabled class="form-check-input" type="radio" name="jenis_laminasi" value="emboss" <?php echo $row->jenis_laminasi == "emboss" ?  "checked" : "" ?>>
              <label class="form-check-label">Emboss</label>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-check">
              <input disabled class="form-check-input" type="radio" name="jenis_laminasi" value="glossy" <?php echo $row->jenis_laminasi == "glossy" ?  "checked" : "" ?>>
              <label class="form-check-label">Glossy</label>
            </div>
          </div>
        </div>
        
      <input type="text"  name="tanggal_pengerjaan_1"  value="<?= $row->tanggal_pengerjaan_1; ?>" hidden>
      <input type="text"  name="tanggal_pengerjaan_2"  value="<?= $row->tanggal_pengerjaan_2; ?>" hidden>
      <input type="text"  name="hasil_1"  value="<?= $row->hasil_1; ?>" hidden>
      <input type="text"  name="hasil_2"  value="<?= $row->hasil_2; ?>" hidden>
      <input type="text"  name="rejek_1"  value="<?= $row->rejek_1; ?>" hidden>
      <input type="text"  name="rejek_2"  value="<?= $row->rejek_2; ?>" hidden>
      <input type="text"  name="operator_1"  value="<?= $row->operator_1; ?>" hidden>
      <input type="text"  name="operator_2"  value="<?= $row->operator_2; ?>" hidden>
      <input type="text"  name="kru_1"  value="<?= $row->kru_1; ?>" hidden>
      <input type="text"  name="kru_2"  value="<?= $row->kru_2; ?>" hidden>
      <input type="text"  name="keterangan_1"  value="<?= $row->keterangan_1; ?>" hidden>
      <input type="text"  name="keterangan_2"  value="<?= $row->keterangan_2; ?>" hidden>

        
        <br>
        <div class="row" align="center">
          <div class="col-md-1"></div>
          <div class="col-md-2"><label>Tanggal Pengerjaan</label></div>
          <div class="col-md-1"><label>Hasil</label></div>
          <div class="col-md-1"><label>Rejek</label></div>
          <div class="col-md-2"><label>Nama Operator</label></div>
          <div class="col-md-2"><label>Kru</label></div>
          <div class="col-md-3"><label>Keterangan</label></div>
        </div>
        <br>
        

        <div class="row">
          <div class="col-md-1" align="center"><label <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>>1</label></div>
          <div class="col-md-2">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="date" class="form-control" name="tanggal_pengerjaan_1" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_1; ?>">
          </div>
          <div class="col-md-1">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="number" class="form-control" name="hasil_1" placeholder="Hasil" value="<?= $row->hasil_1; ?>">
          </div>
          <div class="col-md-1">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="number" class="form-control" name="rejek_1" placeholder="Rejek" value="<?= $row->rejek_1; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="text" class="form-control" name="operator_1" placeholder="Nama Operator" value="<?= $row->operator_1; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="text" class="form-control" name="kru_1" placeholder="Kru" value="<?= $row->kru_1; ?>">
          </div>
          <div class="col-md-3">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="text" class="form-control" name="keterangan_1" placeholder="Keterangan" value="<?= $row->keterangan_1; ?>">
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-1" align="center"><label <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>>2</label></div>
          <div class="col-md-2">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="date" class="form-control" name="tanggal_pengerjaan_2" placeholder="Tanggal Pengerjaan" value="<?= $row->tanggal_pengerjaan_2; ?>">
          </div>
          <div class="col-md-1">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="number" class="form-control" name="hasil_2" placeholder="Hasil" value="<?= $row->hasil_2; ?>">
          </div>
          <div class="col-md-1">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="number" class="form-control" name="rejek_2" placeholder="Rejek" value="<?= $row->rejek_2; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="text" class="form-control" name="operator_2" placeholder="Nama Operator" value="<?= $row->operator_2; ?>">
          </div>
          <div class="col-md-2">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="text" class="form-control" name="kru_2" placeholder="Kru" value="<?= $row->kru_2; ?>">
          </div>
          <div class="col-md-3">
            <input <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : "disabled"?>  type="text" class="form-control" name="keterangan_2" placeholder="Keterangan" value="<?= $row->keterangan_2; ?>">
          </div>

          
          <br><br><br><br><div class="col" align="left">            
            <div class="col-md-2">
            
            
                                  <label>Total Hasil : <?= $row->hasil_1+$row->hasil_2; ?></label><br>
                                  <div ><label>Total Hasil Keseluruhan : <?= $total_1+$total_2; ?></label>

                                  
            </div></div>          
        </div><hr>
        

        <div class="row">         
          <div class="col" align="right">
          <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp_laminasi" class="btn btn-default">Kembali</a>          
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
   