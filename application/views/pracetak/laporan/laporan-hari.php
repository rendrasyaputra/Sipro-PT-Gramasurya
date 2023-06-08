<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?=site_url()?>pracetak/laporan" class="btn btn-warning btn-lg">
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Laporan Tanggal <?= $hari ?>  </h3>
          
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <!-- <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button> -->
          </div>
        </div>
        <div class="card-body">
        <table id="table1" class="table table-bordered table-hover" style="font-size: 12px">
            <thead>
              <tr align="center">
                <td rowspan="2">Nomor SO</td>
                <td rowspan="2">Tanggal Masuk</td>
                <td rowspan="2">Deadline</td>
                <td rowspan="2">Nama Pemesan</td>
                <td rowspan="2">Nama Orderan</td>
                <td colspan="4">Plat</td>
                <td rowspan="2">Status</td>
                <td rowspan="2">Actions</td>
              </tr>
              <tr align="center">
                <td>102</td>
                <td>74</td>
                <td>72</td>
                <td>Paper Plate</td>
              </tr>
            </thead>
            <?php 
            $total1=0;
            $total2=0;
            $total3=0;
            $total4=0;
            foreach($laporan as $s => $row) {?>  
            <tr>
              <td align="center"><?= $row->nomor_so; ?></td>
              <td><?= date('d-m-Y', strtotime( $row->tanggal_masuk )); ?></td>
              <td style="color: red"><?= date('d-m-Y', strtotime( $row->deadline)); ?></td>
              <td><?= $row->nama_pemesan; ?></td>
              <td><?= $row->nama_orderan; ?></td>
              <!--UNTUK TOTAL PLAT YANG DIGUNAKAN -->
              
                                            <?php 
                                            // menentukan apakah plat yang digunakan jenis 72/74/102/Tokko
                                            // bagian COVER
                                                $cover1 = 0;
                                                $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                    $row->cover1mesin1 == "102" ? $cover1=$cover1+$p1 :  $cover1;
                                                    $row->cover2mesin1 == "102" ? $cover1=$cover1+$p2 :  $cover1;
                                            
                                                $cover2 = 0;
                                                $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                    $row->cover1mesin1 == "74" ? $cover2=$cover2+$p1 :  $cover2;
                                                    $row->cover2mesin1 == "74" ? $cover2=$cover2+$p2 :  $cover2;
                                            
                                     
                                                $cover3 = 0;
                                                $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                    $row->cover1mesin1 == "72" ? $cover3=$cover3+$p1 :  $cover3;
                                                    $row->cover2mesin1 == "72" ? $cover3=$cover3+$p2 :  $cover3;                                          
                                        
                                                $cover4 = 0;
                                                $p1 = $row->cover1plat1+$row->cover1plat2+$row->cover1plat3 + $row->jumlahplategagalcover1;                                                
                                                $p2 = $row->cover2plat1+$row->cover2plat2+$row->cover2plat3 + $row->jumlahplategagalcover2;
                                                    $row->cover1mesin1 == "Tokko" ? $cover4=$cover4+$p1 :  $cover4;
                                                    $row->cover2mesin1 == "Tokko" ? $cover4=$cover4+$p2 :  $cover4;

                                                // bagian ISI
                                                        $isi1 = 0;
                                                        $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                        $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                        $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                            $row->isi1mesin1 == "102" ? $isi1=$isi1+$p1 :  $isi1;
                                                            $row->isi2mesin1 == "102" ? $isi1=$isi1+$p2 :  $isi1;
                                                            $row->isi3mesin1 == "102" ? $isi1=$isi1+$p3 :  $isi1;
                                                   
                                                        $isi2 = 0;
                                                        $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                        $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                        $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                            $row->isi1mesin1 == "74" ? $isi2=$isi2+$p1 :  $isi2;
                                                            $row->isi2mesin1 == "74" ? $isi2=$isi2+$p2 :  $isi2;
                                                            $row->isi3mesin1 == "74" ? $isi2=$isi2+$p3 :  $isi2;
                                                   
                                                        $isi3 = 0;
                                                        $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                        $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                        $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                            $row->isi1mesin1 == "72" ? $isi3=$isi3+$p1 :  $isi3;
                                                            $row->isi2mesin1 == "72" ? $isi3=$isi3+$p2 :  $isi3;
                                                            $row->isi3mesin1 == "72" ? $isi3=$isi3+$p3 :  $isi3;
                                                   
                                                        $isi4 = 0;
                                                        $p1 = $row->isi1plat1+$row->isi1plat2+$row->isi1plat3 + $row->jumlahplategagalisi1;                                                
                                                        $p2 = $row->isi2plat1+$row->isi2plat2+$row->isi2plat3 + $row->jumlahplategagalisi2;
                                                        $p3 = $row->isi3plat1+$row->isi3plat2+$row->isi3plat3 + $row->jumlahplategagalisi3;
                                                            $row->isi1mesin1 == "Tokko" ? $isi4=$isi4+$p1 :  $isi4;
                                                            $row->isi2mesin1 == "Tokko" ? $isi4=$isi4+$p2 :  $isi4;
                                                            $row->isi3mesin1 == "Tokko" ? $isi4=$isi4+$p3 :  $isi4;
                                                   
                                                   ?>
                                                                                                                             
              <td><?= $cover1+$isi1; ?></td>
              <td><?= $cover2+$isi2; ?></td>
              <td><?= $cover3+$isi3; ?></td>
              <td><?= $cover4+$isi4; ?></td>
              <?php
                $total1=$total1+$cover1+$isi1;
                $total2=$total2+$cover2+$isi2;
                $total3=$total3+$cover3+$isi3;
                $total4=$total4+$cover4+$isi4;
              ?>

              <td>


                  <?php 
                        if($row->so_status == "pracetak") 
                          echo $row->so_status;
                        else 
                          echo $row->ctcp_status;
                        
                  ?>
              </td>
              <td align="center">
                  
              <!-- lihat detail laporan -->                
                  <a href="<?=site_url('pracetak/laporan/lihat_laporan/'.$row->id_order)?>">
                    <i class="fa fa-eye" style="font-size:18px;margin-right: 20px;"></i>
                  </a>

              <!-- edit laporan -->
                  <a href="<?=site_url('pracetak/laporan/edit_laporan/'.$row->id_order)?>">
                    <i class="fa fa-pencil" style="font-size:18px"></i>
                  </a>              


              </td>
            </tr> 
            <?php } ?>
            <tr>
              <td colspan="5" align="right">Total Plat</td>
              <td><?= $total1; ?></td>
              <td><?= $total2; ?></td>
              <td><?= $total3; ?></td>
              <td><?= $total4; ?></td>
              <td colspan="2"></td>
            </tr> 
          </table>
          <div class="row no-print">
              <div class="col-12">
              <button class="btn btn-info" onclick="window.print()"><i class="fa fa-print"> Cetak</i></button>
              </div>
          </div> 
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