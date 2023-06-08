<section class="content">
  <div class="row bg-success" align="center" style="padding: 30px;padding-top: 35px;">
    <div class="col"><h3><b>MESIN SHOE</b></h3></div>
  </div>
</section>
<!-- Content Header (Page header) -->
<?php foreach($fp as $s => $row) {?>  
    <form action="<?=site_url('finishing/OperatorFP/proses_shoe')?>" method="post"> 

<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?=site_url()?>finishing/OperatorFP" style="color: #FC8639  ;">
              <i class="fa fa-home" style="font-size:24px"></i>
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?=site_url()?>finishing/OperatorFP/jadwal_op_shoe" style="color: #FC8639  ;">
              shoe
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">
              <?= $row->nomor_so; ?>
            </a>
          </li>
          <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blank Page</li> -->
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->    
    <input type="text" value="<?= $row->status_shoe; ?>" name="status_shoe" hidden>
    <input type="text"  name="id_order"  value="<?= $row->id_order; ?>" hidden>
    <input type="text"  name="id_shoe"  value="<?= $row->id_shoe; ?>" hidden>

<section class="content">
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row" style="padding: 15px;">
        <div class="col"><b>Detail SO</b><hr></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;">
        <div class="col">
          Nomor SO<br>
          <label><?= $row->nomor_so; ?></label>
        </div>
        <div class="col">
          Nama Orderan<br>
          <label><?= $row->nama_orderan; ?></label>
        </div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;">
        <div class="col">
          Nama Pemesan<br>
          <label><?= $row->nama_pemesan; ?></label>
        </div>
        <div class="col">
          Ukuran<br>
          <label><?= $row->ukuran; ?></label>
        </div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;padding-bottom: 15px;">
        <div class="col">
          Finishing<br>
          <label>
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
        <div class="col">
          Oplag<br>
          <label><?= $row->oplag; ?></label>
        </div>
      </div>
    </div>
  </div>

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

  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row" style="padding: 15px;">
        <div class="col"><b>Detail Pengerjaan</b><hr></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;">
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" value="<?= $row->tanggal_pelaksanaan_shoe; ?>" name="tanggal_pelaksanaan_shoe" hidden>
          <input type="date" class="form-control" name="tanggal_pelaksanaan_shoe" value="<?= $row->tanggal_pelaksanaan_shoe; ?>" disabled>
        </div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;padding-top: 15px;padding-bottom: 15px;">
        <div class="col-md-12">
          <label>Keterangan</label>
          <input type="text" value="<?= $row->keterangan_jadwal_fp_shoe; ?>" name="keterangan_jadwal_fp_shoe" hidden>
          <textarea disabled class="form-control" name="keterangan_jadwal_fp_shoe" style="height: 100px;" placeholder="Keterangan"><?= $row->keterangan_jadwal_fp_shoe; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>
  <!-- LEMBAR 1 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 1</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_1" class="form-control"  disabled value="<?= $row->lipat_lembar_1; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_1" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_1; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_1" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_1; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_1" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_1; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_1" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_1; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 2 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 2</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_2" class="form-control"  disabled value="<?= $row->lipat_lembar_2; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_2" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_2; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_2" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_2; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_2" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_2; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_2" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_2; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 3 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 3</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_3" class="form-control"  disabled value="<?= $row->lipat_lembar_3; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_3" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_3; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_3" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_3; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_3" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_3; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_3" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_3; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 4 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 4</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_4" class="form-control"  disabled value="<?= $row->lipat_lembar_4; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_4" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_4; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_4" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_4; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_4" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_4; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_4" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_4; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 5 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 1</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_5" class="form-control"  disabled value="<?= $row->lipat_lembar_5; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_5" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_5; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_5" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_5; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_5" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_5; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_5" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_5; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 6 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 6</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_6" class="form-control"  disabled value="<?= $row->lipat_lembar_6; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_6" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_6; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_6" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_6; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_6" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_6; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_6" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_6; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 7 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 7</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_7" class="form-control"  disabled value="<?= $row->lipat_lembar_7; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_7" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_7; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_7" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_7; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_7" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_7; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_7" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_7; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 8 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 8</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_8" class="form-control"  disabled value="<?= $row->lipat_lembar_8; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_8" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_8; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_8" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_8; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_8" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_8; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_8" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_8; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 9 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 9</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_9" class="form-control"  disabled value="<?= $row->lipat_lembar_9; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_9" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_9; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_9" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_9; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_9" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_9; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_9" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_9; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 10 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 10</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_10" class="form-control"  disabled value="<?= $row->lipat_lembar_10; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_10" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_10; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_10" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_10; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_10" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_10; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_10" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_10; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 11 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 11</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_11" class="form-control"  disabled value="<?= $row->lipat_lembar_11; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_11" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_11; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_11" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_11; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_11" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_11; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_11" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_11; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 12 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 12</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_12" class="form-control"  disabled value="<?= $row->lipat_lembar_12; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_12" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_12; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_12" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_12; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_12" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_12; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_12" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_12; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 13 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 13</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_13" class="form-control"  disabled value="<?= $row->lipat_lembar_13; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_13" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_13; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_13" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_13; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_13" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_13; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_13" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_13; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 14 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 14</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_14" class="form-control"  disabled value="<?= $row->lipat_lembar_14; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_14" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_14; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_14" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_14; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_14" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_14; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_14" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_14; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 15 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 15</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_15" class="form-control"  disabled value="<?= $row->lipat_lembar_15; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_15" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_15; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_15" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_15; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_15" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_15; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_15" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_15; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 16 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 16</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_16" class="form-control"  disabled value="<?= $row->lipat_lembar_16; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_16" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_16; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_16" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_16; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_16" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_16; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_16" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_16; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 17 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 17</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_17" class="form-control"  disabled value="<?= $row->lipat_lembar_17; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_17" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_17; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_17" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_17; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_17" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_17; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_17" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_17; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 18 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 18</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_18" class="form-control"  disabled value="<?= $row->lipat_lembar_18; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_18" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_18; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_18" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_18; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_18" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_18; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_18" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_18; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 19 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 19</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_19" class="form-control"  disabled value="<?= $row->lipat_lembar_19; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_19" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_19; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_19" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_19; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_19" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_19; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_19" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_19; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LEMBAR 20 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Lembar 20</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Jenis Lipatan</label><br>
          <input name="lipat_lembar_20" class="form-control"  disabled value="<?= $row->lipat_lembar_20; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil Lipatan</label><br>
          <input type="number" name="hasil_lipatan_lembar_20" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_lipatan_lembar_20; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_lembar_20" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_lembar_20; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_lembar_20" placeholder="Tanggal Pengerjaan" class="form-control" value="<?= $row->tanggal_pengerjaan_lembar_20; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_lembar_20" placeholder="Keterangan" style="height: 80px;" class="form-control" ><?= $row->keterangan_lembar_20; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>
  
  <div class="row" style="padding: 10px;">
    <div class="col">
      <button type="submit" name="edit" class="btn btn-success" style="width: 100%;">SIMPAN</button>
    </div>
  </div><br>

  <!-- TOshoeL MODAL -->
  <!-- <div class="row" align="center">
    <div class="col">
      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal" style="width: 100%;min-height: 50px;padding-top: 12px;">
        <i class="fa fa-pencil" style="font-size:14px;margin-right:5px"></i>
        <b>Lapor Pengerjaan</b>
      </button>
    </div>
  </div><br> -->

  <!-- MODAL -->
  <!-- <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <ul class="nav nav-pills row">
            <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#lp1" data-toggle="tab">Laporan 1</a></li>
            <li class="nav-item col"><a class="nav-link btn-outline-success" href="#lp2" data-toggle="tab">Laporan 2</a></li>
          </ul>
        </div>
        <div class="row" style="padding:20px;">
          <div class="col">
            <div class="tab-content">
              <div class="tab-pane active" id="lp1">
                INI LP 1
              </div>
              <div class="tab-pane" id="lp2">
                INI LP 2
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  </form>
  <?php } ?>
</section>
<!-- /.content -->  