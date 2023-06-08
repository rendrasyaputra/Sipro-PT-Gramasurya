<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?=site_url()?>finishing/laporan" class="btn btn-warning btn-lg">
                <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
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
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Laporan Bulan Tahun <?= $tahun ?> </h3>
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
              <?php $nilai=0;
                    $grand_emboss = 0;
                    $grand_glossy = 0;
                    $grand_doff = 0;
                    $grand_mbo_1 = 0;
                    $grand_mbo_2 = 0;
                    $grand_mbo_3 = 0;
                    $grand_mbo_4 = 0;
                    $grand_shoe_1 = 0;
                    $grand_shoe_2 = 0;
                    $grand_shoe_3 = 0;
                    $grand_shoe_4 = 0;
                    $grand_susun = 0;
                    $grand_binding = 0;
                    $grand_binding = 0;
                    $grand_potong = 0;
                    $grand_jahit = 0;
                    $grand_hardcover = 0;
              ?>            
              <?php $id_banding[-1]=null;?>


                <?php foreach($lp as $s => $row) {?>  
                  <?php $id_banding[$nilai]=$row->id_order;?>

                <?php if($id_banding[$nilai] != $id_banding[$nilai-1]){ ?>

                  <tr>                
                    <td align="center"><?= $row->nomor_so; ?></td>
                    <td><?= $row->nama_orderan; ?></td>
                    
                    <!-- LAMINASI -->
                    <td><?= $total_emboss[$nilai]; ?></td>
                    <?php $grand_emboss = $grand_emboss + $total_emboss[$nilai]?>
                    <td><?= $total_glossy[$nilai]; ?></td>
                    <?php $grand_glossy = $grand_glossy + $total_glossy[$nilai]?>
                    <td><?= $total_doff[$nilai]; ?></td>
                    <?php $grand_doff = $grand_doff + $total_doff[$nilai]?>
                    
                    <!-- MBO -->
                    <td><?= $total_mbo_1[$nilai]; ?></td>
                    <?php $grand_mbo_1 = $grand_mbo_1 + $total_mbo_1[$nilai]?>
                    <td><?= $total_mbo_2[$nilai]; ?></td>
                    <?php $grand_mbo_2 = $grand_mbo_2 + $total_mbo_2[$nilai]?>
                    <td><?= $total_mbo_3[$nilai]; ?></td>
                    <?php $grand_mbo_3 = $grand_mbo_3 + $total_mbo_3[$nilai]?>
                    <td><?= $total_mbo_4[$nilai]; ?></td>
                    <?php $grand_mbo_4 = $grand_mbo_4 + $total_mbo_4[$nilai]?>
                    
                    <!-- SHOE -->
                    <td><?= $total_shoe_1[$nilai]; ?></td>
                    <?php $grand_shoe_1 = $grand_shoe_1 + $total_shoe_1[$nilai]?>
                    <td><?= $total_shoe_2[$nilai]; ?></td>
                    <?php $grand_shoe_2 = $grand_shoe_2 + $total_shoe_2[$nilai]?>
                    <td><?= $total_shoe_3[$nilai]; ?></td>
                    <?php $grand_shoe_3 = $grand_shoe_3 + $total_shoe_3[$nilai]?>
                    <td><?= $total_shoe_4[$nilai]; ?></td>
                    <?php $grand_shoe_4 = $grand_shoe_4 + $total_shoe_4[$nilai]?>
                    
                    <!-- Susun -->
                    <td><?= $total_susun[$nilai]; ?></td>
                    <?php $grand_susun = $grand_susun + $total_susun[$nilai]?>

                    <!-- Bending -->
                    <td><?= $total_binding[$nilai]; ?></td>
                    <?php $grand_binding = $grand_binding + $total_binding[$nilai]?>
                    
                    <!-- Potong -->
                    <td><?= $total_fa_potong[$nilai]; ?></td>
                    <?php $grand_potong = $grand_potong + $total_fa_potong[$nilai]?>
                    
                    <!-- Jahit -->
                    <td><?= $total_jahit[$nilai]; ?></td>
                    <?php $grand_jahit = $grand_jahit + $total_jahit[$nilai]?>

                    <!-- Hardcover -->
                    <td><?= $total_hardcover[$nilai]; ?></td>
                    <?php $grand_hardcover = $grand_hardcover + $total_hardcover[$nilai]?>
                    <!-- STATUS -->
                    <td><?= $row->so_status; ?></td>
                  </tr> 

                <?php $nilai++;} ?>
                <?php } ?>
                <tr>
                  <td colspan="2" align="right">TOTAL</td>
                  <td><?= $grand_emboss?></td>
                  <td><?= $grand_doff?></td>
                  <td><?= $grand_glossy?></td>
                  <td><?= $grand_mbo_1?></td>
                  <td><?= $grand_mbo_2?></td>
                  <td><?= $grand_mbo_3?></td>
                  <td><?= $grand_mbo_4?></td>
                  <td><?= $grand_shoe_1?></td>
                  <td><?= $grand_shoe_2?></td>
                  <td><?= $grand_shoe_3?></td>
                  <td><?= $grand_shoe_4?></td>
                  <td><?= $grand_susun?></td>
                  <td><?= $grand_bending?></td>
                  <td><?= $grand_potong?></td>
                  <td><?= $grand_jahit?></td>
                  <td><?= $grand_hardcover?></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
            <br>
            <div class="row no-print">
              <div class="col-12">
              <button class="btn btn-info" onclick="window.print()"><i class="fa fa-print"> Cetak</i></button>
              </div>
          </div> 
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