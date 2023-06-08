<section class="content">
  <div class="row bg-success" align="center" style="padding: 30px;padding-top: 35px;">
    <div class="col"><h3><b>MESIN SUB</b></h3></div>
  </div>
</section>
<!-- Content Header (Page header) -->
<?php foreach($fa as $s => $row) {?>  
    <form action="<?=site_url('finishing/OperatorFA/proses_sub')?>" method="post"> 

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
            <a href="<?=site_url()?>finishing/OperatorFA/jadwal_op_sub" style="color: #FC8639  ;">
              sub
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
    <input type="text" value="<?= $row->status_sub; ?>" name="status_sub" hidden>
    <input type="text"  name="id_order"  value="<?= $row->id_order; ?>" hidden>
    <input type="text"  name="id_sub"  value="<?= $row->id_sub; ?>" hidden>

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
          <input type="date" value="<?= $row->tanggal_pelaksanaan_sub; ?>" name="tanggal_pelaksanaan_sub" hidden>
          <input type="date" class="form-control" name="tanggal_pelaksanaan_sub" value="<?= $row->tanggal_pelaksanaan_sub; ?>" disabled>
        </div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;padding-top: 15px;padding-bottom: 15px;">
        <div class="col-md-12">
          <label>Keterangan</label>
          <input type="text" value="<?= $row->keterangan_jadwal_sub; ?>" name="keterangan_jadwal_sub" hidden>
          <textarea disabled class="form-control" name="keterangan_jadwal_sub" style="height: 100px;" placeholder="Keterangan"><?= $row->keterangan_jadwal_sub; ?></textarea>
        </div>                        
      </div>
    </div>
  </div><br>
  <div class="row" style="padding: 10px;">
	  <div class="col" style="background: #FFEEE3;">
		<div class="row" style="padding: 15px;">
		  <div class="col"><b>Laporan Pengerjaan</b><hr></div>
		</div>
		<div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;">
		  <div class="col-md-12">
			<label>Pilih Jenis Sub</label>
		  </div>
		</div>
		<div class="row" style="padding-left: 20px;padding-right: 20px;padding-bottom: 15px;">
		  <div class="col" style="padding-left: 25px;">
			          <input type="text" name="jenis_sub_binding" value="" hidden>
                <input  class="form-check-input" type="checkbox" name="jenis_sub_binding" value="binding" id="flexCheckDefault" <?php echo $row->jenis_sub_binding == "binding" ?  "checked" : "" ?> >
                <label class="form-check-label" for="flexCheckDefault">binding</label><br>

			          <input type="text" name="jenis_sub_hardcover" value="" hidden>
                <input  class="form-check-input" type="checkbox" name="jenis_sub_hardcover" value="hardcover" id="flexCheckDefault" <?php echo $row->jenis_sub_hardcover == "hardcover" ?  "checked" : "" ?> >
                <label class="form-check-label" for="flexCheckDefault">hardcover</label><br>

                <input type="text" name="jenis_sub_jahit" value="" hidden>
                <input  class="form-check-input" type="checkbox" name="jenis_sub_jahit" value="jahit" id="flexCheckDefault" <?php echo $row->jenis_sub_jahit == "jahit" ?  "checked" : "" ?> >
                <label class="form-check-label" for="flexCheckDefault">jahit</label><br>
		  </div>
		  <div class="col" style="padding-right: 25px;">
                <input type="text" name="jenis_sub_fa_potong" value="" hidden>
                <input  class="form-check-input" type="checkbox" name="jenis_sub_fa_potong" value="fa potong" id="flexCheckDefault" <?php echo $row->jenis_sub_fa_potong == "fa potong" ?  "checked" : "" ?> >
                <label class="form-check-label" for="flexCheckDefault">potong</label><br>

			          <input type="text" name="jenis_sub_klemseng" value="" hidden>
                <input  class="form-check-input" type="checkbox" name="jenis_sub_klemseng" value="klemseng" id="flexCheckDefault" <?php echo $row->jenis_sub_klemseng == "klemseng" ?  "checked" : "" ?> >
                <label class="form-check-label" for="flexCheckDefault">klemseng</label><br>

                <input type="text" name="jenis_sub_spiral" value="" hidden>
                <input  class="form-check-input" type="checkbox" name="jenis_sub_spiral" value="spiral" id="flexCheckDefault" <?php echo $row->jenis_sub_spiral == "spiral" ?  "checked" : "" ?> >
                <label class="form-check-label" for="flexCheckDefault">spiral</label><br>
		  </div>
		</div>
	  </div>
	</div><br>
  
  
  <!-- LAPORAN 1 -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row bg-success" style="margin: 10px;padding: 5px;">
        <div class="col-md-12"><b>Laporan</b></div>
      </div>
      <div class="row" style="padding-left: 20px;padding-right: 20px;margin-top: -20px;padding-bottom: 15px;">
        <div class="col-md-12"><hr>
          <label>Tanggal Pengerjaan</label><br>
          <input type="date" name="tanggal_kembali_sub" class="form-control" value="<?= $row->tanggal_kembali_sub; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Hasil</label><br>
          <input type="number" name="hasil" placeholder="Hasil Pengerjaan" class="form-control" value="<?= $row->hasil; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Rejek</label><br>
          <input type="number" name="rejek" placeholder="Rejek Pengerjaan" class="form-control" value="<?= $row->rejek; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Nama Operator</label><br>
          <input type="text" name="operator" placeholder="Nama Operator" class="form-control" value="<?= $row->operator; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Kru</label><br>
          <input type="text" name="kru" placeholder="Kru" class="form-control" value="<?= $row->kru; ?>"><br>
        </div>
        <div class="col-md-12">
          <label>Keterangan</label><br>
          <textarea name="keterangan" placeholder="Keterangan" style="height: 80px;" class="form-control" value="<?= $row->keterangan; ?>"><?= $row->keterangan; ?></textarea>
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