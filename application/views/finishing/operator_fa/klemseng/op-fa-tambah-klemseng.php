<section class="content">
  <div class="row bg-success" align="center" style="padding: 30px;padding-top: 35px;">
    <div class="col"><h3><b>MESIN KLEMSENG</b></h3></div>
  </div>
</section>
<!-- Content Header (Page header) -->
<?php foreach($fa as $s => $row) {?>  
    <form action="<?=site_url('finishing/OperatorFA/proses_klemseng')?>" method="post"> 

<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?=site_url()?>finishing/OperatorFA" style="color: #FC8639  ;">
              <i class="fa fa-home" style="font-size:24px"></i>
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?=site_url()?>finishing/OperatorFA/jadwal_op_klemseng" style="color: #FC8639  ;">
              klemseng
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
    <input type="text" value="<?= $row->status_klemseng; ?>" name="status_klemseng" hidden>
    <input type="text"  name="id_order"  value="<?= $row->id_order; ?>" hidden>
    <input type="text"  name="id_klemseng"  value="<?= $row->id_klemseng; ?>" hidden>

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
          <input type="date" value="<?= $row->tanggal_pelaksanaan_klemseng; ?>" name="tanggal_pelaksanaan_klemseng" hidden>
          <input type="date" class="form-control" name="tanggal_pelaksanaan_klemseng" value="<?= $row->tanggal_pelaksanaan_klemseng; ?>" disabled>
        </div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;padding-top: 15px;padding-bottom: 15px;">
        <div class="col-md-12">
          <label>Keterangan</label>
          <input type="text" value="<?= $row->keterangan_jadwal_klemseng; ?>" name="keterangan_jadwal_klemseng" hidden>
          <textarea disabled class="form-control" name="keterangan_jadwal_klemseng" style="height: 100px;" placeholder="Keterangan"><?= $row->keterangan_jadwal_klemseng; ?></textarea>
        </div>
        <div class="col-md-12">
          <label>Hasil Susun</label><br>
          <?= $row->susun_hasil_1+$row->susun_hasil_2; ?>
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

  <!-- LAPORAN 3 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Laporan 3</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_3" class="form-control" value="<?= $row->tanggal_pengerjaan_3; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil</label><br>
          <input type="number" name="hasil_3" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_3; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Rejek</label><br>
          <input type="number" name="rejek_3" placeholder="Rejek Pengerjaan" class="form-control" value="<?= $row->rejek_3; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_3" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_3; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Kru</label><br>
          <input type="text" name="kru_3" placeholder="Kru" class="form-control" value="<?= $row->kru_3; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_3" placeholder="Keterangan" style="height: 80px;" class="form-control" value="<?= $row->keterangan_3; ?>"><?= $row->keterangan_3; ?></textarea>
        </div>
      </div>
    </div>
  </div><br>

  <!-- LAPORAN 4 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Laporan 4</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_pengerjaan_4" class="form-control" value="<?= $row->tanggal_pengerjaan_4; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil</label><br>
          <input type="number" name="hasil_4" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil_4; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Rejek</label><br>
          <input type="number" name="rejek_4" placeholder="Rejek Pengerjaan" class="form-control" value="<?= $row->rejek_4; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator_4" placeholder="Nama Operator" class="form-control" value="<?= $row->operator_4; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Kru</label><br>
          <input type="text" name="kru_4" placeholder="Kru" class="form-control" value="<?= $row->kru_4; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan_4" placeholder="Keterangan" style="height: 80px;" class="form-control" value="<?= $row->keterangan_4; ?>"><?= $row->keterangan_4; ?></textarea>
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