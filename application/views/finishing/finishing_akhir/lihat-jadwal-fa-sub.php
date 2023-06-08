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
        <h3>Mesin sub</h3>
      </div>
    </div>
    <!-- /.card-header -->
    <?php foreach($fa as $s => $row) {?>  
    <form action="<?=site_url('finishing/FinishingAkhir/proses_sub')?>" method="post">      
    <input disabled type="text"  name="id_order"  value="<?= $row->id_order; ?>" hidden>
    <input disabled type="text"  name="id_sub"  value="<?= $row->id_sub; ?>" hidden>

    <input disabled type="text"  name="status_binding"  value="<?= $row->status_binding; ?>" hidden>
    <input disabled type="text"  name="status_hardcover"  value="<?= $row->status_hardcover; ?>" hidden>
    <input disabled type="text"  name="status_jahit"  value="<?= $row->status_jahit; ?>" hidden>
    <input disabled type="text"  name="status_fa_potong"  value="<?= $row->status_fa_potong; ?>" hidden>
    <input disabled type="text"  name="status_sub"  value="<?= $row->status_sub; ?>" hidden>
    <input disabled type="text"  name="status_klemseng"  value="<?= $row->status_klemseng; ?>" hidden>
    <input disabled type="text"  name="status_spiral"  value="<?= $row->status_spiral; ?>" hidden>

    <input disabled type="text"  name="tanggal_pelaksanaan_binding"  value="<?= $row->tanggal_pelaksanaan_binding; ?>" hidden>
    <input disabled type="text"  name="tanggal_pelaksanaan_hardcover"  value="<?= $row->tanggal_pelaksanaan_hardcover; ?>" hidden>
    <input disabled type="text"  name="tanggal_pelaksanaan_jahit"  value="<?= $row->tanggal_pelaksanaan_jahit; ?>" hidden>
    <input disabled type="text"  name="tanggal_pelaksanaan_fa_potong"  value="<?= $row->tanggal_pelaksanaan_fa_potong; ?>" hidden>
    <input disabled type="text"  name="tanggal_pelaksanaan_sub"  value="<?= $row->tanggal_pelaksanaan_sub; ?>" hidden>
    <input disabled type="text"  name="tanggal_pelaksanaan_klemseng"  value="<?= $row->tanggal_pelaksanaan_klemseng; ?>" hidden>
    <input disabled type="text"  name="tanggal_pelaksanaan_spiral"  value="<?= $row->tanggal_pelaksanaan_spiral; ?>" hidden>

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

                <input disabled type="text" name="status_sub" value="" hidden>
                <input disabled class="form-check-input" type="checkbox" name="status_sub" value="sub" id="flexCheckDefault" <?php echo $row->status_sub == "sub" ?  "checked" : "" ?>>
              <label class="form-check-label" for="flexCheckDefault">Finishing Akhir</label>
            </div>
          </div>
        </div><hr>

        <div class="row">
          <div class="col-md-4">
            Tanggal Pelaksanaan<br>
            <input disabled type="date" class="form-control" name="tanggal_pelaksanaan_sub" placeholder="Tanggal Pelaksanaan" value="<?= $row->tanggal_pelaksanaan_sub; ?>">
          </div>
          <div class="col-md-4">
            Keterangan<br>
            <textarea disabled name="keterangan_jadwal_sub" class="form-control" placeholder="catatan" style="height: 150px;"><?= $row->keterangan_jadwal_sub; ?></textarea>
          </div>
          <div class="row">
              <div class="col-md-5">
                <div class="card-body">
                                        <div class="col-md-2">                                      
                                        <input disabled type="text" name="jenis_sub_binding" value="" hidden>
                                          <input disabled class="form-check-input" type="checkbox" name="jenis_sub_binding" value="binding" id="flexCheckDefault" <?php echo $row->jenis_sub_binding == "binding" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">binding</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input disabled type="text" name="jenis_sub_hardcover" value="" hidden>
                                          <input disabled class="form-check-input" type="checkbox" name="jenis_sub_hardcover" value="hardcover" id="flexCheckDefault" <?php echo $row->jenis_sub_hardcover == "hardcover" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">hardcover</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input disabled type="text" name="jenis_sub_jahit" value="" hidden>
                                          <input disabled class="form-check-input" type="checkbox" name="jenis_sub_jahit" value="jahit" id="flexCheckDefault" <?php echo $row->jenis_sub_jahit == "jahit" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">jahit</label>
                                        </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card-body">
                                        <div class="col-md-2">     
                                        <input disabled type="text" name="jenis_sub_fa_potong" value="" hidden>
                                          <input disabled class="form-check-input" type="checkbox" name="jenis_sub_fa_potong" value="fa potong" id="flexCheckDefault" <?php echo $row->jenis_sub_fa_potong == "fa potong" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">potong</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input disabled type="text" name="jenis_sub_spiral" value="" hidden>
                                          <input disabled class="form-check-input" type="checkbox" name="jenis_sub_spiral" value="spiral" id="flexCheckDefault" <?php echo $row->jenis_sub_spiral == "spiral" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">spiral</label>
                                        </div>
                                        <div class="col-md-2">     
                                        <input disabled type="text" name="jenis_sub_klemseng" value="" hidden>
                                          <input disabled class="form-check-input" type="checkbox" name="jenis_sub_klemseng" value="klemseng" id="flexCheckDefault" <?php echo $row->jenis_sub_klemseng == "klemseng" ?  "checked" : "" ?>>
                                          <label class="form-check-label" for="flexCheckDefault">klemseng</label>
                                        </div>   
                </div>
              </div>
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
            <input disabled type="date" class="form-control" name="tanggal_kembali_sub" placeholder="Masukan Tanggal kembali sub" value="<?= $row->tanggal_kembali_sub; ?>">
          </div>
          <div class="col-md-1">
            <input disabled type="number" class="form-control" name="hasil" placeholder="Hasil" value="<?= $row->hasil; ?>">
          </div>
          <div class="col-md-1">
            <input disabled type="number" class="form-control" name="rejek" placeholder="Rejek" value="<?= $row->rejek; ?>">
          </div>
          <div class="col-md-2">
            <input disabled type="text" class="form-control" name="operator" placeholder="Nama Operator" value="<?= $row->operator; ?>">
          </div>
          <div class="col-md-2">
            <input disabled type="text" class="form-control" name="kru" placeholder="Kru" value="<?= $row->kru; ?>">
          </div>
          <div class="col-md-3">
            <input disabled type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="<?= $row->keterangan; ?>">
          </div>
        </div><br>        
                 
        </div>

        <br><div class="col" align="left">            
            <div class="col-md-2">                                                          
                                  <div ><label>Total Hasil Keseluruhan : <?= $total_1; ?></label>
            </div></div>        
        </div><hr><br>

        <div class="row">
          <div class="col" align="right">
          <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_sub" class="btn btn-default">Kembali</a>            
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
   