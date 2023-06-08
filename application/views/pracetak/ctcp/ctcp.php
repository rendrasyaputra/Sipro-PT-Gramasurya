<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>CTCP</h1><br>
        <label>TAMPILKAN DATA PERBULAN</label><br>
        <form action="<?=site_url('pracetak/ctcp/filter_bulan')?>" method="post">
          <div class="row">
            <div class="col-md-3">
                                <select name="bulan" class="form-control">
                                  <?php 
                                  $mulai = 1;
                                  $bulan=array("bulan","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                  for($i = $mulai; $i < $mulai + 12; $i++){
                                    echo '<option value="'.$i.'">'.$bulan[$i].'</option>';
                                  }
                                  ?>
                                </select>
            </div>
            <div class="col-md-3">
                      <select name="tahun" class="form-control">
                                  <?php 
                                  $mulai = 2021;
                                  for($i = $mulai; $i < $mulai + 6; $i++){
                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                  }
                                  ?>
                      </select>
            </div>
            <div class="col-md-2">
              <button type="submit" name="filter_data" class="btn btn-primary">Filter Data</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data CTCP</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
      </div>
    </div>
    <div class="card-body">
      <table id="table1" class="table table-bordered table-hover" style="font-size: 12px">
        <thead>
        <tr align="center">
          <td>Nomor SO</td>
          <td>Tanggal Masuk</td>
          <td>Deadline</td>
          <td>Nama Pemesan</td>
          <td>Nama Order</td>
          <td>Ukuran</td>
          <td>Halaman</td>
          <td>Finishing Akhir</td>
          <td>Status</td>
          <td>Actions</td>
        </tr>
        </thead>
        <?php foreach($ctcp as $s => $row) {?>  
        <tr>
          <td align="center"><?= $row->nomor_so; ?></td>
          <td><?= date('d-m-Y', strtotime( $row->tanggal_masuk)); ?></td>
          <td style="color: red"><?= date('d-m-Y', strtotime( $row->deadline)); ?></td>
          <td><?= $row->nama_pemesan; ?></td>
          <td><?= $row->nama_orderan; ?></td>
          <td><?= $row->ukuran; ?></td>
          <td><?= $row->halaman; ?></td>
          <td>
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
          </td>
          <td>
            <?php 
                  if($row->ctcp_status ==null) 
                    echo $row->imposisi_status;
                  else 
                    echo $row->ctcp_status;
            ?>
          </td>
          <td align="center">
            
            <!-- lihat detail imposisi -->
              <?php if($row->id_data_ctcp != null) {?>
                <a href="<?=site_url('pracetak/Ctcp/lihat_ctcp/'.$row->id_order)?>">
                  <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                </a>

            <!-- tambah imposisi -->
              <?php } if($row->id_data_ctcp == null) {?>
                <a href="<?=site_url('pracetak/Ctcp/tambah_ctcp/'.$row->id_order)?>">
                  <i class="fa fa-pencil" style="font-size:18px"></i>
                </a>
              <?php }else {?>

            <!-- edit imposisi -->
                <a href="<?=site_url('pracetak/Ctcp/edit_ctcp/'.$row->id_order)?>">
                  <i class="fa fa-pencil" style="font-size:18px"></i>
                </a>
            <?php } ?>


            </td>
        </tr> 
        <?php } ?> 
      </table>
    </div>
    <!-- /.card-body -->
    <!-- <div class="card-footer">
      Footer
    </div> -->
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->