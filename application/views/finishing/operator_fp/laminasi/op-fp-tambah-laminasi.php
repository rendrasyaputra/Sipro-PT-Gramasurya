<section class="content">
  <div class="row bg-success" align="center" style="padding: 30px;padding-top: 35px;">
    <div class="col"><h3><b>MESIN LAMINASI</b></h3></div>
  </div>
</section>
<!-- Content Header (Page header) -->
<?php foreach($fp as $s => $row) {?>  
    <form action="<?=site_url('finishing/OperatorFP/proses_laminasi')?>" method="post"> 

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
            <a href="<?=site_url()?>finishing/OperatorFP/jadwal_op_laminasi" style="color: #FC8639  ;">
              Laminasi
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
    <input type="text" value="<?= $row->status_laminasi; ?>" name="status_laminasi" hidden>
    <input type="text"  name="id_order"  value="<?= $row->id_order; ?>" hidden>
    <input type="text"  name="id_laminasi"  value="<?= $row->id_laminasi; ?>" hidden>

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
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row" style="padding: 15px;">
        <div class="col"><b>Detail Pengerjaan</b><hr></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;">
        <div class="col-md-12">
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" value="<?= $row->tanggal_pelaksanaan_laminasi; ?>" name="tanggal_pelaksanaan_laminasi" hidden>
          <input type="date" class="form-control" name="tanggal_pelaksanaan_laminasi" value="<?= $row->tanggal_pelaksanaan_laminasi; ?>" disabled>
        </div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;padding-top: 15px;padding-bottom: 15px;">
        <div class="col-md-12">
          <label>Keterangan</label>
          <input type="text" value="<?= $row->keterangan_jadwal_fp_laminasi; ?>" name="keterangan_jadwal_fp_laminasi" hidden>
          <textarea disabled class="form-control" name="keterangan_jadwal_fp_laminasi" style="height: 100px;" placeholder="Keterangan"><?= $row->keterangan_jadwal_fp_laminasi; ?></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row" style="padding: 15px;">
        <div class="col"><b>Laporan Pengerjaan</b><hr></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><b>Pilih Jenis Laminasi</b></div>
          <input  type="text" name="jenis_laminasi" value="" hidden>
          <div class="col-md-2">
            <div class="form-check">
              <input type="text" value="<?= $row->jenis_laminasi; ?>" name="jenis_laminasi" hidden>
              <input class="form-check-input" type="radio" name="jenis_laminasi" value="doff" <?php echo $row->jenis_laminasi == "doff" ?  "checked" : "" ?> disabled>
              <label class="form-check-label">Doff</label>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_laminasi" value="emboss" <?php echo $row->jenis_laminasi == "emboss" ?  "checked" : "" ?> disabled>
              <label class="form-check-label">Emboss</label>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenis_laminasi" value="glossy" <?php echo $row->jenis_laminasi == "glossy" ?  "checked" : "" ?> disabled>
              <label class="form-check-label">Glossy</label>
            </div>
          </div>
      </div>
    </div>
  </div><br>
  
  <!-- LAPORAN 1 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Laporan 1</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_1" class="form-control" value="<?= $row->tanggal_pengerjaan_1; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil</label><br>
          <input type="number" name="hasil_1" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_1; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Rejek</label><br>
          <input type="number" name="rejek_1" placeholder="Rejek Pengerjaan" class="form-control" value="<?= $row->rejek_1; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_1" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_1; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Kru</label><br>
          <input type="text" name="kru_1" placeholder="Kru" class="form-control" value="<?= $row->kru_1; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_1" placeholder="Keterangan" style="height: 80px;" class="form-control" value="<?= $row->keterangan_1; ?>"><?= $row->keterangan_1; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LAPORAN 2 -->
  <div class="row" style="padding: 10px;">
  <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Laporan 2</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_2" class="form-control" value="<?= $row->tanggal_pengerjaan_2; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil</label><br>
          <input type="number" name="hasil_2" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_2; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Rejek</label><br>
          <input type="number" name="rejek_2" placeholder="Rejek Pengerjaan" class="form-control" value="<?= $row->rejek_2; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_2" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_2; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Kru</label><br>
          <input type="text" name="kru_2" placeholder="Kru" class="form-control" value="<?= $row->kru_2; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_2" placeholder="Keterangan" style="height: 80px;" class="form-control" value="<?= $row->keterangan_2; ?>"><?= $row->keterangan_2; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <div class="row" style="padding: 10px;">
    <div class="col">
      <button type="submit" class="btn btn-success" name="edit" style="width: 100%;">SIMPAN</button>
    </div>
  </div><br>

  <!-- TOMBOL MODAL -->
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