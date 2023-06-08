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
      <ul class="nav nav-pills row">
        <div style="width: 25px;"></div>
        <li class="nav-item col-md-2 text-center"><a class="nav-link active" href="#kt1" data-toggle="tab">MESIN KATEGORI 1</a></li>
        <li class="nav-item col-md-2 text-center"><a class="nav-link" href="#kt2" data-toggle="tab">MESIN KATEGORI 2</a></li>
      </ul><br>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Jadwal Finishing Proses</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="kt1">
              <table id="example2" class="table table-bordered table-striped" style="font-size: 12px">
                <thead>
                  <tr align="center">
                    <td>Nomor SO</td>
                    <td>Tanggal Masuk</td>
                    <td>Deadline</td>
                    <td>Nama Pemesan</td>
                    <td>Nama Order</td>
                    <td>Ukuran Plano</td>
                    <td>Oplag</td>
                    <td>Halaman</td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                        MBO
                      </a>
                    </td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                        Shoe
                      </a>
                    </td>
                    <td>Status</td>
                    <td>Actions</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Nomor SO</td>
                    <td>Tanggal Masuk</td>
                    <td>Deadline</td>
                    <td>Nama Pemesan</td>
                    <td>Nama Order</td>
                    <td>Ukuran Plano</td>
                    <td>Oplag</td>
                    <td>Halaman</td>
                    <td>MBO</td>
                    <td>Shoe</td>
                    <td>Status</td>
                    <td align="center">
                      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModalkt1">
                        <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                      </button>
                    </td>
                  </tr>
                </tbody>            
              </table>
            </div>
            <div class="tab-pane" id="kt2">
              <table id="example2" class="table table-bordered table-striped" style="font-size: 12px">
                <thead>
                  <tr align="center">
                    <td>Nomor SO</td>
                    <td>Tanggal Masuk</td>
                    <td>Deadline</td>
                    <td>Nama Pemesan</td>
                    <td>Nama Order</td>
                    <td>Ukuran Plano</td>
                    <td>Oplag</td>
                    <td>Halaman</td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                        Laminasi
                      </a>
                    </td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                        Susun
                      </a>
                    </td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingProses/jadwal_fp" class="btn btn-success">
                        Sub
                      </a>
                    </td>
                    <td>Status</td>
                    <td>Actions</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Nomor SO</td>
                    <td>Tanggal Masuk</td>
                    <td>Deadline</td>
                    <td>Nama Pemesan</td>
                    <td>Nama Order</td>
                    <td>Ukuran Plano</td>
                    <td>Oplag</td>
                    <td>Halaman</td>
                    <td>Laminasi</td>
                    <td>Susun</td>
                    <td>Sub</td>
                    <td>Status</td>
                    <td align="center">
                      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModalkt2">
                        <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                      </button>
                    </td>
                  </tr>
                </tbody>            
              </table>
            </div>

            <div id="myModalkt2" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">
                <!-- konten modal-->
                <div class="modal-content">
                  <!-- heading modal -->
                  <div class="modal-header">
                    
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                  </div>
                  <!-- body modal -->
                  <div class="card">
                    <div class="card-header" align="center">
                      <h3>SO dari db</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="card-body">
                        <h4>DETAIL ORDERAN</h4><hr>
                        <div class="row">
                          <div class="col-md-4">
                            <br>Nama Pemesan
                            <br><label class="form-label">dari db</label>
                          </div>
                          <div class="col-md-4">
                            <br>Nama Orderan
                            <br><label class="form-label">dari db</label>
                          </div>
                          <div class="col-md-4">
                            <br>Finishing
                            <br><label class="form-label">dari db</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <br>Ukuran
                            <br><label class="form-label">dari db</label>
                          </div>
                          <div class="col-md-4">
                            <br>Laminasi
                            <br><label class="form-label">dari db</label>
                          </div>
                          <div class="col-md-4">
                            <br>Oplag
                            <br><label class="form-label">dari db</label>
                          </div>
                        </div>
                        <hr><br>

                        <div class="row">
                          <div class="col-md-6">
                            Tanggal Pelaksanaan<br>
                            <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_shoe" placeholder="Tanggal Pelaksanaan" required>
                          </div>  
                        </div><br>
                        <hr><br>
                        <div class="row">
                          <div class="col-md-6">
                            Jenis Mesin<br>
                            <select id="inputState" class="form-select form-control" name="jenis_mesin" >
                              <option value="-">-</option>
                            </select>
                          </div>
                        </div><br>
                        <hr><br>

                        <h4>Keterangan</h4>
                        <textarea name="keterangan_finishing_proses" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

                        <div class="row">
                          <div class="col" align="right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Jadwal</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->