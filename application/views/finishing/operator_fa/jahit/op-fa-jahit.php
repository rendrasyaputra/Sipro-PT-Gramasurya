<section class="content">
  <div class="row bg-success" align="center" style="padding: 30px;padding-top: 35px;">
    <div class="col"><h3><b>MESIN JAHIT</b></h3></div>
  </div>
</section>
<!-- Content Header (Page header) -->
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
            <a href="#">
              Jahit
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
<section class="content">
  <div class="row" style="padding: 10px;">
    <div class="col">
      <h5><b><?= $tanggal= date("d F Y");?></b></h5>
    </div>
  </div>

  <?php foreach($fa as $s => $row) {?> 
  <!-- TEMPAT SO -->
  <div class="row" style="padding: 10px;">
    <div class="col" style="background: #FFEEE3;">
      <div class="row" style="padding: 10px;padding-bottom: 0px;">
        <div class="col">
          <b><?= $row->nomor_so; ?></b>
        </div>
        <div class="col" align="right">
          <b>Oplag : <?= $row->oplag; ?></b>
        </div>
      </div>
      <div class="row" style="padding: 10px;padding-bottom: 0px;">
        <div class="col">
          <b><?= $row->nama_pemesan; ?></b>
        </div>
      </div>
      <div class="row" style="padding: 10px;padding-bottom: 0px;">
        <div class="col">
          <b><?= $row->nama_orderan; ?></b>
        </div>
      </div>
      <div class="row" style="padding: 10px;">
        <div class="col">
          <a href="<?=site_url()?>finishing/OperatorFA/edit_op_jahit/<?= $row->id_jahit; ?>" class="btn btn-success" style="min-height: 50px;width: 100%;padding-top: 12px;">
            <i class="fa fa-pencil" style="font-size:14px;margin-right:5px"></i>
            <b>Lapor Pengerjaan</b>
          </a>
        </div>
      </div>
    </div>
  </div><br>
  <?php } ?>

</section>
<!-- /.content --> 