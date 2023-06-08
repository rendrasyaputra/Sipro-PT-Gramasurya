<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-12">
        <h1>Finishing</h1><br>
        <div class="row">
                <div class="col-md-6">
                  <section class="content">
                    <div class="card">
                      <div class="card-header border bg-primary">
                        <h3 class="card-title">Filter Data Perbulan</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                          <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button> -->
                        </div>
                      </div>
                      <div class="card-body">
                         <form  action="<?=site_url('finishing/laporan/filter_bulan')?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                  <label>Bulan</label> 
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
                                <div class="col-md-6">    
                                <label>Tahun</label> 
                                  <select name="tahun" class="form-control">
                                      <?php 
                                      $mulai = 2021;
                                      for($i = $mulai; $i < $mulai + 6; $i++){
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                      }
                                      ?>
                                    </select>
                              </div>
                            </div><br>
                            <div class="row">
                              <button type="submit" name="tampilkan_data" class="btn btn-primary col-md-12">Tampilkan Data</button>
                            </div>
                          </form>
                      </div>
                    </div>
                  </section>
                </div>
                <div class="col-md-6">
                  <section class="content">
                    <div class="card">
                      <div class="card-header border bg-primary">
                        <h3 class="card-title">Filter Data Pertahun</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                          <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button> -->
                        </div>
                      </div>
                      <div class="card-body">
                      <form  action="<?=site_url('finishing/laporan/filter_tahun')?>" method="post">
                            <div class="row">
                                <div class="col-md-12">    
                                <label>Tahun</label> 
                                   <select name="tahun" class="form-control">
                                      <?php 
                                      $mulai = 2021;
                                      for($i = $mulai; $i < $mulai + 6; $i++){
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                      }
                                      ?>
                                    </select>
                              </div>
                            </div><br>
                            <div class="row">
                              <button type="submit" name="tampilkan_data" class="btn btn-primary col-md-12">Tampilkan Data</button>
                            </div>
                          </form>
                    </div>
                  </section>
                </div>
              </div>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Laporan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="table1" class="table table-bordered table-striped" style="font-size: 12px">
              <thead>
                <tr align="center">
                  <td rowspan="2">Nomor SO</td>
                  <td rowspan="2">Nama Order</td>
                  <td colspan="3">Laminasi</td>
                  <td colspan="4">MBO</td>
                  <td colspan="4">SHOE</td>
                  <td rowspan="2">Susun</td>
                  <td rowspan="2">Bending</td>
                  <td rowspan="2">Potong</td>
                  <td rowspan="2">Jahit</td>
                  <td rowspan="2">Hardcover</td>
                  <td rowspan="2">STATUS</td>
                </tr>
                <tr>
                  <!-- LAMINASI -->
                  <td>emboss</td>
                  <td>Glossy</td>
                  <td>Doff</td>
                  <!-- MBO -->
                  <td>1</td>
                  <td>2</td>  
                  <td>3</td>
                  <td>4</td>
                  <!-- SHOE -->
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                </tr>
              </thead>
              <tbody>
              <?php $nilai=0;?>            
              <?php $id_banding[-1]=null;?>


                <?php foreach($lp as $s => $row) {?>  
                  <?php $id_banding[$nilai]=$row->id_order;?>

                <?php if($id_banding[$nilai] != $id_banding[$nilai-1]){ ?>

                  <tr>                
                    <td align="center"><?= $row->nomor_so; ?></td>
                    <td><?= $row->nama_orderan; ?></td>
                    
                    <!-- LAMINASI -->
                    <td><?= $total_emboss[$nilai]; ?></td>
                    <td><?= $total_glossy[$nilai]; ?></td>
                    <td><?= $total_doff[$nilai]; ?></td>
                    
                    <!-- MBO -->
                    <td><?= $total_mbo_1[$nilai]; ?></td>
                    <td><?= $total_mbo_2[$nilai]; ?></td>
                    <td><?= $total_mbo_3[$nilai]; ?></td>
                    <td><?= $total_mbo_4[$nilai]; ?></td>
                    
                    <!-- SHOE -->
                    <td><?= $total_shoe_1[$nilai]; ?></td>
                    <td><?= $total_shoe_2[$nilai]; ?></td>
                    <td><?= $total_shoe_3[$nilai]; ?></td>
                    <td><?= $total_shoe_4[$nilai]; ?></td>
                    
                    <!-- Susun -->
                    <td><?= $total_susun[$nilai]; ?></td>

                    <!-- Bending -->
                    <td><?= $total_binding[$nilai]; ?></td>
                    
                    <!-- Potong -->
                    <td><?= $total_fa_potong[$nilai]; ?></td>
                    
                    <!-- Jahit -->
                    <td><?= $total_jahit[$nilai]; ?></td>
                    
                    <!-- Hardcover -->
                    <td><?= $total_hardcover[$nilai]; ?></td>
                    <!-- STATUS -->
                    <td><?= $row->so_status; ?></td>
                  </tr> 

                <?php $nilai++;} ?>
                <?php } ?>
                
                
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      <!-- /.Default box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->