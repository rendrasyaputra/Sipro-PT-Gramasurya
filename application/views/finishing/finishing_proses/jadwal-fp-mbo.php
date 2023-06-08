<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FINISHING PROSES</h1>
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
                    <div class="card-title">
                      <div class=" row">
                        <div class="col-sm-6">
                          <h3>Jadwal Mesin mbo</h3>
                        </div>
                        <div class="col-sm-6" align="right">
                          Kapasitas : 4000 / Hari
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- id="table1" -->
                <table id="table1" class="table table-bordered table-striped" style="font-size: 12px">
                    <thead>
                        <tr align="center">
                            <td>Tanggal Pelaksanaan</td>
                            <td>Nomor SO</td>
                            <td>Tanggal Masuk</td>
                            <td>Deadline</td>
                            <td>Nama Pemesan</td>
                            <td>Nama Order</td>
                            <td>Ukuran</td> 
                            <td>Oplag</td>
                            <td>Halaman</td>   
                            <td>Total Hasil</td>                                                   
                            <td>Status</td> 
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $nilai = 0; ?>
                    <?php foreach($fp as $s => $row) {?>                      
                      <tr>
                        <td><?= date('d-m-Y', strtotime($row->tanggal_pelaksanaan_mbo)); ?></td>
                        <td><?= $row->nomor_so; ?></td>
                        <td><?= date('d-m-Y', strtotime($row->tanggal_masuk)); ?></td>
                        <td><?= date('d-m-Y', strtotime($row->deadline)); ?></td>
                        <td><?= $row->nama_pemesan; ?></td>
                        <td><?= $row->nama_orderan; ?></td>
                        <td><?= $row->ukuran; ?></td>
                        <td><?= $row->oplag; ?></td>
                        <td><?= $row->halaman; ?></td> 

                        <td>
                        <?= $row->hasil_lipatan_lembar_1+$row->hasil_lipatan_lembar_2+$row->hasil_lipatan_lembar_3+$row->hasil_lipatan_lembar_4+$row->hasil_lipatan_lembar_5+$row->hasil_lipatan_lembar_6+$row->hasil_lipatan_lembar_7+$row->hasil_lipatan_lembar_8+$row->hasil_lipatan_lembar_9+$row->hasil_lipatan_lembar_10+$row->hasil_lipatan_lembar_11+$row->hasil_lipatan_lembar_12+$row->hasil_lipatan_lembar_13+$row->hasil_lipatan_lembar_14+$row->hasil_lipatan_lembar_15+$row->hasil_lipatan_lembar_16+$row->hasil_lipatan_lembar_17+$row->hasil_lipatan_lembar_18+$row->hasil_lipatan_lembar_19+$row->hasil_lipatan_lembar_20; ?>
                        </td>

                        <td <?php echo $row->status_mbo == "mbo" ?  "style='color: red'" : "" ?>><?php echo $row->status_mbo == "mbo" ?  "finishing proses isi" : $row->so_status?></td>   

                        
                        <td align="center">  

                        <?php if( $row->id_jadwal_mbo == $id_jadwal_max[$nilai] and $row->status_mbo != "mbo") {?>  
                        <a href="<?=site_url()?>finishing/FinishingProses/tambah_jadwal_fp_mbo/<?= $row->id_mbo; ?>">
                            <i class="fa fa-plus" style="font-size:18px;margin-right: 20px;"></i>
                          </a>    
                          <?php } ?>      

                          <a href="<?=site_url()?>finishing/FinishingProses/edit_jadwal_fp_mbo/<?= $row->id_mbo; ?>">
                            <i class="fa fa-pencil" style="font-size:18px;margin-right: 20px;"></i>
                          </a>
                          <a href="<?=site_url()?>finishing/FinishingProses/lihat_jadwal_fp_mbo/<?= $row->id_mbo; ?>">
                            <i class="fa fa-eye" style="font-size:18px;"></i>
                          </a>

                          <!-- hapus -->
                          <a style="margin-left:20px;" href="<?=site_url('finishing/FinishingProses/hapus_mbo/'.$row->id_mbo."-".$row->id_order)?>" onclick="return confirm('Apakah Anda Yakin')" class="btn btn-danger btn-xs">
                          <i class="fa fa-trash" style="font-size:18px"></i>
                        </a>

                        </td>
                      </tr>
                    <?php $nilai++;} ?>
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
          <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->