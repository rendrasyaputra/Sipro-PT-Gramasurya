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
                          <h3>Jadwal Mesin (disesuaikan)</h3>
                        </div>
                        <div class="col-sm-6" align="right">
                          Kapasitas : (disesuaikan) / Hari
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- id="table1" -->
                <table id="example2" class="table table-bordered table-striped" style="font-size: 12px">
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
                            <td>Total Lembar</td>
                            <td>Total / Hari</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <td>Tanggal Pelaksanaan</td>
                        <td>Nomor SO</td>
                        <td>Tanggal Masuk</td>
                        <td>Deadline</td>
                        <td>Nama Pemesan</td>
                        <td>Nama Order</td>
                        <td>Ukuran</td>
                        <td>Oplag</td>
                        <td>Halaman</td>
                        <td>Total Lembar</td>
                        <td>Total / Hari</td>
                        <!-- TOMBOL UNTUK MESIN SHOE DI FINISHING PROSES -->
                        <td align="center">
                          <a href="<?=site_url()?>finishing/FinishingProses/tambah_jadwal_fp_shoe">
                            <i class="fa fa-plus" style="font-size:18px;margin-right: 20px;"></i>
                          </a>
                          <a href="<?=site_url()?>finishing/FinishingProses/edit_jadwal_fp_shoe">
                            <i class="fa fa-pencil" style="font-size:18px;margin-right: 20px;"></i>
                          </a>
                          <a href="<?=site_url()?>finishing/FinishingProses/lihat_jadwal_fp_shoe">
                            <i class="fa fa-eye" style="font-size:18px;"></i>
                          </a>
                        </td>

                        <!-- TOMBOL UNTUK SELAIN MESIN MBO DAN MESIN SHOE DI FINISHING PROSES -->
                        <!-- <td align="center">
                          <a href="<?=site_url()?>finishing/FinishingProses/tambah_jadwal_fp_ms">
                            <i class="fa fa-plus" style="font-size:18px;margin-right: 20px;"></i>
                          </a>
                          <a href="<?=site_url()?>finishing/FinishingProses/edit_jadwal_fp_ms">
                            <i class="fa fa-pencil" style="font-size:18px;margin-right: 20px;"></i>
                          </a>
                          <a href="<?=site_url()?>finishing/FinishingProses/lihat_jadwal_fp_ms">
                            <i class="fa fa-eye" style="font-size:18px;"></i>
                          </a>
                        </td> -->
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