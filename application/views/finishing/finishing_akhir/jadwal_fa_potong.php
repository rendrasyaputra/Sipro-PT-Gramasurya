<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FINISHING AKHIR</h1>
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
                <h3>Jadwal Mesin potong</h3>
              </div>
              <div class="col-sm-6" align="right">
                Kapasitas : 1000 / Hari
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
                <td>Halaman</td>
                <td>Oplag</td>
                <td>Hasil</td>
                <td>Keterangan</td>                
                <td>Status</td>   
                <td>Actions</td>
              </tr>
            </thead>
            <tbody>
            <?php $nilai = 0; ?>
            <?php foreach($fa as $s => $row) {?>  
              <tr align="center">
                <td><?= date('d-m-Y', strtotime($row->tanggal_pelaksanaan_fa_potong)); ?></td>                
                <td><?= $row->nomor_so; ?></td>
                <td><?= date('d-m-Y', strtotime($row->tanggal_masuk)); ?></td>
                <td><?= date('d-m-Y', strtotime($row->deadline)); ?></td>
                <td><?= $row->nama_pemesan; ?></td>
                <td><?= $row->nama_orderan; ?></td>
                <td><?= $row->ukuran; ?></td>
                <td><?= $row->halaman; ?></td>
                <td><?= $row->oplag; ?></td>
                <td><?= $row->hasil_1+$row->hasil_2+$row->hasil_3+$row->hasil_4; ?></td>
                <td><?= $row->keterangan_jadwal_fa_potong; ?></td>  
                <td <?php echo $row->status_fa_potong == "fa potong" ?  "style='color: red'" : "" ?>><?php echo $row->status_fa_potong == "fa potong" ?  "finishing akhir" : $row->so_status?></td>                
                <td align="center">   

                <?php if( $row->id_jadwal_fa_potong == $id_jadwal_max[$nilai] and $row->status_fa_potong != "fa potong") {?>  
                          <a href="<?=site_url()?>finishing/FinishingAkhir/tambah_jadwal_fa_potong/<?= $row->id_fa_potong; ?>">
                            <i class="fa fa-plus" style="font-size:18px;margin-right: 20px;"></i>
                          </a>  
                          <?php } ?>  

                  <a href="<?=site_url()?>finishing/FinishingAkhir/edit_jadwal_fa_potong/<?= $row->id_fa_potong; ?>">
                    <i class="fa fa-pencil" style="font-size:18px;margin-right: 20px;"></i>
                  </a>
                  <a href="<?=site_url()?>finishing/FinishingAkhir/lihat_jadwal_fa_potong/<?= $row->id_fa_potong; ?>">
                    <i class="fa fa-eye" style="font-size:18px;"></i>
                  </a>

                   <!-- hapus -->
                   <a style="margin-left:20px;" href="<?=site_url('finishing/FinishingAkhir/hapus_potong/'.$row->id_fa_potong."-".$row->id_order)?>" onclick="return confirm('Apakah Anda Yakin')" class="btn btn-danger btn-xs">
                          <i class="fa fa-trash" style="font-size:18px"></i>
                        </a>

                </td>
              </tr>    
              <?php } ?>          
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