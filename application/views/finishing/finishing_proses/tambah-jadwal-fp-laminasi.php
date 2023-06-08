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
        <h3>Penambahan jadwal Mesin Laminasi</h3>
      </div>
    </div>
    <!-- /.card-header -->
    <?php foreach($fp as $s => $row) {?>  
    <form action="<?=site_url('finishing/FinishingProses/proses_laminasi')?>" method="post">  

     <?php $jadwal_max+=1; ?>
    <input type="text"  name="id_jadwal_laminasi"  value="<?= $jadwal_max; ?>" hidden>    
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
                <input class="form-check-input" type="checkbox" name="status_laminasi" value="laminasi" id="flexCheckDefault" <?php echo $row->status_laminasi == "laminasi" ?  "checked" : "" ?> disabled>
              <label class="form-check-label" for="flexCheckDefault">Finishing Proses Isi</label>

            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">
            <label>Tanggal Pelaksanaan</label><br>
            <input type="date" class="form-control" name="tanggal_pelaksanaan_laminasi" placeholder="Tanggal Pelaksanaan"  <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?> required>
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
            <textarea <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?> name="keterangan_jadwal_fp_laminasi" class="form-control" placeholder="catatan" style="height: 100px;"><?= $row->keterangan_jadwal_fp_laminasi; ?></textarea>
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
              <input class="form-check-input" type="radio" name="jenis_laminasi" value="doff" <?php echo $row->jenis_laminasi == "doff" ?  "checked" : "disabled" ?>>
              <label class="form-check-label">Doff</label>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_laminasi" value="emboss" <?php echo $row->jenis_laminasi == "emboss" ?  "checked" : "disabled" ?>>
              <label class="form-check-label">Emboss</label>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_laminasi" value="glossy" <?php echo $row->jenis_laminasi == "glossy" ?  "checked" : "disabled" ?>>
              <label class="form-check-label">Glossy</label>
            </div>
          </div>
        </div>
        
          <br>
        <div class="row" align="center">
          <div class="col-md-1"></div>
          <div class="col-md-2"><label>Tanggal Pengerjaan</label></div>
          <div class="col-md-1"><label>Hasil</label></div>
          <div class="col-md-1"><label>Rejek</label></div>
          <div class="col-md-2"><label>Nama Operator</label></div>
          <div class="col-md-2"><label>Kru</label></div>
          <div class="col-md-3"><label>Keterangan</label></div>
        </div><br>
        <div class="row">
          <div class="col-md-1" align="center"><label>1</label></div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_1" placeholder="Tanggal Pengerjaan" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="hasil_1" placeholder="Hasil" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="rejek_1" placeholder="Rejek" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_1" placeholder="Nama Operator" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="kru_1" placeholder="Kru" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="keterangan_1" placeholder="Keterangan" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-1" align="center"><label>2</label></div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_2" placeholder="Tanggal Pengerjaan" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="hasil_2" placeholder="Hasil" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="rejek_2" placeholder="Rejek" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_2" placeholder="Nama Operator" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="kru_2" placeholder="Kru" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="keterangan_2" placeholder="Keterangan" <?php echo $row->status_laminasi == "laminasi" ?  "disabled" : ""?>>
          </div>

          

          <br><br><br><br><div class="col" align="left">                        
            <div class="col-md-2"><label>Total Hasil Keseluruhan : <?= $total_1+$total_2; ?><br></label>
            </div></div>                  
        </div><hr>        

        <div class="row">
          <div class="col" align="right">
            <button type="reset" class="btn btn-default">Kembali</button>

            <?php if($row->status_laminasi != "laminasi"):?>
                <button type="submit" name="add" class="btn btn-success">Tambah Jadwal</button>
            <?php endif ?>
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
   