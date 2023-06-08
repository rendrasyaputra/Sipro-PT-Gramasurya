<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CETAK</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title coba">Display Cetak</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <table id="table1" class="table table-bordered table-hover" style="font-size: 12px;">
            <thead>
            <tr align="center">
              <td>Nomor SO</td>
              <td>Tanggal Masuk</td>
              <td>Deadline</td>
              <td>Nama Pemesan</td>
              <td>Nama Order</td>
              <td>Ukuran</td>
              <td>Halaman</td>
              <td>Oplag</td>
              <td>Finishing Akhir</td>
              <td>Status</td>
              <td>Actions</td>
            </tr>
            </thead>
            <?php foreach($dc as $s => $row) {?>  
                        <tr>
                
                            <td align="center"><?= $row->nomor_so; ?></td>
                            <td><?= date('d-m-Y', strtotime( $row->tanggal_masuk)); ?></td>
                            <td style="color: red"><?= date('d-m-Y', strtotime( $row->deadline)); ?></td>
                            <td><?= $row->nama_pemesan; ?></td>
                            <td><?= $row->nama_orderan; ?></td>
                            <td><?= $row->ukuran; ?></td>
                            <td><?= $row->halaman; ?></td>
                            <td><?= $row->oplag; ?></td>
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
                            <td><?php 
                                if($row->status_cetak ==null) 
                                  echo $row->so_status;
                                else if($row->status_cetak !=null)
                                  echo $row->status_cetak;   
                                ?>
                            </td>
              <td align="center">
                <!-- edit diplay cetak -->
                
                  <!-- <a href="<?=site_url('cetak/Displaycetak/lihat_dc/'.$row->id_order)?>">
                    <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                  </a>

                  <a href="<?=site_url('cetak/Displaycetak/edit_dc/'.$row->id_order)?>">
                    <i class="fa fa-pencil" style="font-size:18px;margin-right: 20px;"></i>
                  </a> -->


                  <?php if($row->id_display_cetak != null) {?> 
                  <a href="<?=site_url('cetak/Displaycetak/lihat_dc/'.$row->id_order)?>">
                    <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                  </a>
                  <?php } ?>

                  <!-- tambah imposisi -->
                  <?php if($row->id_display_cetak == null) {?>
                      <a href="<?=site_url('cetak/Displaycetak/tambah_dc/'.$row->id_order)?>">
                        <i class="fa fa-pencil" style="font-size:18px"></i>
                      </a>
                  <?php }else if($row->id_display_cetak != null) {?>

                  <!-- edit imposisi -->
                  <a href="<?=site_url('cetak/Displaycetak/edit_dc/'.$row->id_order)?>">
                        <i class="fa fa-pencil" style="font-size:18px"></i>
                      </a>
                  <?php } ?>

              <!-- tambah imposisi -->
                
                  
               
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