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
        <h3>Penambahan Jadwal Mesin susun</h3>
      </div>
    </div>
    <!-- /.card-header -->
    
    <?php foreach($fp as $s => $row) {?>  
    <form action="<?=site_url('finishing/FinishingProses/proses_susun')?>" method="post">  

    <?php $jadwal_max+=1; ?>
    <input type="text"  name="id_jadwal_susun"  value="<?= $jadwal_max; ?>" hidden>    
    <input type="text"  name="id_order"  value="<?= $row->id_order; ?>" hidden>    
    <input type="text"  name="id_susun"  value="<?= $row->id_susun; ?>" hidden>

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

                <input type="text" name="status_susun" value="" hidden>
                <input disabled class="form-check-input" type="checkbox" name="status_susun" value="susun" id="flexCheckDefault" <?php echo $row->status_susun == "susun" ?  "checked" : "" ?>>
              <label class="form-check-label" for="flexCheckDefault">Finishing Proses Isi</label>

            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">
            <label>Tanggal Pelaksanaan</label><br>
            <input hidden type="date" class="form-control" name="tanggal_pelaksanaan_susun" placeholder="Tanggal Pelaksanaan" value="<?= $row->tanggal_pelaksanaan_susun; ?>" required>
            <input <?php echo $row->status_susun == "susun" ?  "disabled" : ""?> type="date" class="form-control" name="tanggal_pelaksanaan_susun" placeholder="Tanggal Pelaksanaan"  required>
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
            
            <input hidden type="text"  name="keterangan_jadwal_fp_susun"  value="<?= $row->keterangan_jadwal_fp_susun; ?>" >        
            <textarea  <?php echo $row->status_susun == "susun" ?  "disabled" : ""?> name="keterangan_jadwal_fp_susun" class="form-control" placeholder="catatan" style="height: 100px;"><?= $row->keterangan_jadwal_fp_susun; ?></textarea>
          </div>  
        </div><hr>

        <div class="row">
          <div class="col-md-12">
            <h4><b>Laporan Pengerjaan</b></h4>
          </div>
        </div>
        
        
        <?php if($row->status_susun !="susun"){?> 
        <br>
        <div class="row" align="center">
          <div class="col-md-1"></div>
          <div class="col-md-2"><label>Tanggal Pengerjaan</label></div>
          <div class="col-md-1"><label>Hasil</label></div>          
          <div class="col-md-2"><label>Nama Operator</label></div>          
          <div class="col-md-3"><label>Keterangan</label></div>
        </div>
        <br>
          <?php } ?>

        <div class="row">
          <div class="col-md-1" align="center"><label <?php echo $row->status_susun == "susun" ?  "hidden" : ""?>>1</label></div>
          <div class="col-md-2">
            <input <?php echo $row->status_susun == "susun" ?  "hidden" : ""?>  type="date" class="form-control" name="tanggal_pengerjaan_1" placeholder="Tanggal Pengerjaan" >
          </div>
          <div class="col-md-1">
            <input <?php echo $row->status_susun == "susun" ?  "hidden" : ""?>  type="number" class="form-control" name="hasil_1" placeholder="Hasil" >
          </div>          
          <div class="col-md-2">
            <input <?php echo $row->status_susun == "susun" ?  "hidden" : ""?>  type="text" class="form-control" name="operator_1" placeholder="Nama Operator" >
          </div>          
          <div class="col-md-3">
            <input <?php echo $row->status_susun == "susun" ?  "hidden" : ""?>  type="text" class="form-control" name="keterangan_1" placeholder="Keterangan" >
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-1" align="center"><label <?php echo $row->status_susun == "susun" ?  "hidden" : ""?>>2</label></div>
          <div class="col-md-2">
            <input <?php echo $row->status_susun == "susun" ?  "hidden" : ""?>  type="date" class="form-control" name="tanggal_pengerjaan_2" placeholder="Tanggal Pengerjaan" >
          </div>
          <div class="col-md-1">
            <input <?php echo $row->status_susun == "susun" ?  "hidden" : ""?>  type="number" class="form-control" name="hasil_2" placeholder="Hasil" >
          </div>          
          <div class="col-md-2">
            <input <?php echo $row->status_susun == "susun" ?  "hidden" : ""?>  type="text" class="form-control" name="operator_2" placeholder="Nama Operator" >
          </div>          
          <div class="col-md-3">
            <input <?php echo $row->status_susun == "susun" ?  "hidden" : ""?>  type="text" class="form-control" name="keterangan_2" placeholder="Keterangan" >
          </div>
                            
        </div><hr>
        <div class="row">
        <div class="col" align="left">            
            <div class="col-md-6">                        
                                  <label>Total Hasil Keseluruhan: <?= $total_1+$total_2; ?></label>
            </div></div>  
        </div>
        

        <div class="row">         
          <div class="col" align="right">
            <button type="reset" class="btn btn-default">Kembali</button>
            <button type="submit" name="add" class="btn btn-success">Jadwal</button>
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
   