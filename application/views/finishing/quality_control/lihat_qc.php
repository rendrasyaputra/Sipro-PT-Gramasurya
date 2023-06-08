<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>QUALITY CONTROL</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->

<?php foreach ($qc as $s => $row){ ?>
<section class="content">
  <div class="card">
    <div class="card-header">
      <div class="card-title">
        <h3><?= $row->nomor_so;?></h3>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="card-body">
        <h4>DETAIL ORDERAN</h4><hr>
        <div class="row">
          <div class="col-md-4">
            <br>Nama Pemesan
            <br><label class="form-label"><?= $row->nama_pemesan;?></label>
          </div>
          <div class="col-md-4">
            <br>Nama Orderan
            <br><label class="form-label"><?= $row->nama_orderan;?></label>
          </div>
          <div class="col-md-4">
            <br>Finishing
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
                                        if($row->spiral != null){
                                          $finishing .= 'Spiral, ';
                                        }
                                        if($row->klem != null){
                                          $finishing .= 'Klem, ';
                                        }
                                        $finishing = rtrim($finishing, ", ");
                                        echo $finishing;
                ?>
            
            </label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <br>Ukuran
            <br><label class="form-label"><?= $row->ukuran;?></label>
          </div>
          <div class="col-md-4">
            <br>Laminasi
            <br><label class="form-label">
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
            <br>Oplag
            <br><label class="form-label"><?= $row->oplag;?></label>
          </div>
        </div>
        <hr>
        <div class="row" align="center">
          <div class="col-md-4">
            <label>Hasil Binding</label><br>
                <?= $total_binding; ?>
          </div>
          <div class="col-md-4">
            <label>Hasil Jahit</label><br>
                <?= $total_jahit; ?>
          </div>
          <div class="col-md-4">
            <label>Hasil Hardcover</label><br>
                <?= $total_hardcover; ?>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-12">
            Status<br>
            <label><?= $row->status;?></label>
          </div>  
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            Hasil QC<br>
            <label><?= $row->hasil;?></label>
          </div>
          <div class="col-md-6">
            Rejek QC<br>
            <label><?= $row->rejek;?></label>
          </div>
        </div>
        <hr>

        <h4>Keterangan</h4>
        <textarea name="keterangan_qc" class="form-control" placeholder="catatan" style="height: 240px;" disabled><?= $row->keterangan;?></textarea><br>

        <div class="row">
          <div class="col" align="right">
            <button type="reset" class="btn btn-default">Kembali</button>            
          </div>
        </div>

      </div>
    </div>
  </div>  
  <!-- /.card -->
</section>
<?php } ?>
<!-- /.content -->