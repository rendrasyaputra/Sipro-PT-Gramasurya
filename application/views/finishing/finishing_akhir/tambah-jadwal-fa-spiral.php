<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FINISHING AKHIR</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <div class="card-title">
        <h3>Mesin spiral</h3>
      </div>
    </div>
    <!-- /.card-header -->
    <?php foreach($fa as $s => $row) {?>  
    <form action="<?=site_url('finishing/FinishingAkhir/proses_spiral')?>" method="post">  

     <?php $jadwal_max+=1; ?>
    <input type="text"  name="id_jadwal_spiral"  value="<?= $jadwal_max; ?>" hidden>    
    <input type="text"  name="id_order"  value="<?= $row->id_order; ?>" hidden>
    <input type="text"  name="id_spiral"  value="<?= $row->id_spiral; ?>" hidden>

    <input type="text"  name="status_binding"  value="<?= $row->status_binding; ?>" hidden>
    <input type="text"  name="status_hardcover"  value="<?= $row->status_hardcover; ?>" hidden>
    <input type="text"  name="status_jahit"  value="<?= $row->status_jahit; ?>" hidden>
    <input type="text"  name="status_fa_potong"  value="<?= $row->status_fa_potong; ?>" hidden>
    <input type="text"  name="status_sub"  value="<?= $row->status_sub; ?>" hidden>
    <input type="text"  name="status_klemseng"  value="<?= $row->status_klemseng; ?>" hidden>
    <input type="text"  name="status_spiral"  value="<?= $row->status_spiral; ?>" hidden>

    <input type="text"  name="tanggal_pelaksanaan_binding"  value="<?= $row->tanggal_pelaksanaan_binding; ?>" hidden>
    <input type="text"  name="tanggal_pelaksanaan_hardcover"  value="<?= $row->tanggal_pelaksanaan_hardcover; ?>" hidden>
    <input type="text"  name="tanggal_pelaksanaan_jahit"  value="<?= $row->tanggal_pelaksanaan_jahit; ?>" hidden>
    <input type="text"  name="tanggal_pelaksanaan_fa_potong"  value="<?= $row->tanggal_pelaksanaan_fa_potong; ?>" hidden>
    <input type="text"  name="tanggal_pelaksanaan_sub"  value="<?= $row->tanggal_pelaksanaan_sub; ?>" hidden>
    <input type="text"  name="tanggal_pelaksanaan_klemseng"  value="<?= $row->tanggal_pelaksanaan_klemseng; ?>" hidden>
    <input type="text"  name="tanggal_pelaksanaan_spiral"  value="<?= $row->tanggal_pelaksanaan_spiral; ?>" hidden>

    <div class="card-body">
      <div class="card-body">
        <h4>DETAIL ORDERAN</h4><hr>
        <div class="row"> 
          <div class="col-md-4">
            <br>Nomor SO
            <br><label class="form-label"><?= $row->nomor_so; ?></label>
          </div>
          <div class="col-md-4">
            <br>Nama Orderan
            <br><label class="form-label"><?= $row->nama_orderan; ?></label>
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
            <div class="card-body">

                <input type="text" name="status_spiral" value="" hidden>
                <input class="form-check-input" type="checkbox" name="status_spiral" value="spiral" id="flexCheckDefault" <?php echo $row->status_spiral == "spiral" ?  "checked" : "" ?> disabled>
              <label class="form-check-label" for="flexCheckDefault">Finishing Akhir</label>
            </div>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-md-4">
            Tanggal Pelaksanaan<br>
            <input type="date" class="form-control" name="tanggal_pelaksanaan_spiral" placeholder="Tanggal Pelaksanaan" required>
          </div>
          <div class="col-md-4">
            Keterangan<br>
            <textarea name="keterangan_jadwal_spiral" class="form-control" placeholder="catatan" style="height: 150px;"><?= $row->keterangan_jadwal_spiral; ?></textarea>
          </div>
          <div class="col-md-4">  
            Hasil Gabung<br>
            <label><?= $row->susun_hasil_1+$row->susun_hasil_2; ?></label>
          </div>
          
        </div><hr>
        
        <div class="row">
          <div class="col-md-4">
            <label>Laporan Pengerjaaan</label>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2"><label>Tanggal Pengerjaan</label></div>
          <div class="col-md-1"><label>Hasil</label></div>
          <div class="col-md-1"><label>Rejek</label></div>
          <div class="col-md-2"><label>Nama Operator</label></div>
          <div class="col-md-2"><label>Kru</label></div>
          <div class="col-md-3"><label>Keterangan</label></div>
        </div>

        <div class="row">
          <div class="col-md-1" align="center">1</div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_1" placeholder="Masukan Tanggal Pengerjaan" >
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="hasil_1" placeholder="Hasil" >
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="rejek_1" placeholder="Rejek" >
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_1" placeholder="Nama Operator" >
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="kru_1" placeholder="Kru" >
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="keterangan_1" placeholder="Keterangan" >
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-1" align="center">2</div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_2" placeholder="Masukan Tanggal Pengerjaan" >
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="hasil_2" placeholder="Hasil" >
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="rejek_2" placeholder="Rejek" >
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_2" placeholder="Nama Operator" >
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="kru_2" placeholder="Kru" >
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="keterangan_2" placeholder="Keterangan" >
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-1" align="center">3</div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_3" placeholder="Masukan Tanggal Pengerjaan" >
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="hasil_3" placeholder="Hasil" >
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="rejek_3" placeholder="Rejek" >
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_3" placeholder="Nama Operator" >
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="kru_3" placeholder="Kru" >
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="keterangan_3" placeholder="Keterangan" >
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-1" align="center">4</div>
          <div class="col-md-2">
            <input type="date" class="form-control" name="tanggal_pengerjaan_4" placeholder="Masukan Tanggal Pengerjaan" >
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="hasil_4" placeholder="Hasil" >
          </div>
          <div class="col-md-1">
            <input type="number" class="form-control" name="rejek_4" placeholder="Rejek" >
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="operator_4" placeholder="Nama Operator" >
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="kru_4" placeholder="Kru" >
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" name="keterangan_4" placeholder="Keterangan" >
          </div>

          <br><br><br><br><div class="col" align="left">            
            <div class="col-md-2">                                                          
                                  <div ><label>Total Hasil Keseluruhan : <?= $total_1+$total_2+$total_3+$total_4; ?></label>      
            </div></div>        
        </div><hr><br>

        <div class="row">
          <div class="col" align="right">
          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_spiral" class="btn btn-default">Kembali</a>
            <button type="submit" name="add" class="btn btn-success">Publish</button>
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