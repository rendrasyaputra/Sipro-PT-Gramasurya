  <!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>FINISHING Akhir</h1>
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
                    <td>Finishing Akhir</td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_binding" class="btn btn-success">
                        Binding
                      </a>
                    </td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_potong" class="btn btn-success">
                        Potong
                      </a>
                    </td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_jahit" class="btn btn-success">
                        Jahit
                      </a>
                    </td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_hardcover" class="btn btn-success">
                        Hardcover
                      </a>
                    </td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_sub"   class="btn btn-success">
                        SUB
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
                    <td>Finishing Akhir</td>
                    <td>Binding</td>
                    <td>Potong</td>
                    <td>Jahit</td>
                    <td>Hardcover</td>
                    <td>sub</td>
                    <td>Status</td>
                    <td align="center">
                      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                      </button>
                      <!-- <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa" class="btn btn-success">
                        <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                      </a> -->
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
                    <td>Finishing Akhir</td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_klemseng"   class="btn btn-success">
                        Klemseng
                      </a>
                    </td>
                    <td>
                      <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa_spiral"   class="btn btn-success">
                        Spiral
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
                    <td>Finishing Akhir</td>
                    <td>Spiral</td>
                    <td>Klem</td>
                    <td>Status</td>
                    <td align="center">
                      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                      </button>
                      <!-- <a href="<?=site_url()?>finishing/FinishingAkhir/jadwal_fa" class="btn btn-success">
                        <i class="fa fa-plus" style="font-size:14px"></i> JADWAL
                      </a> -->
                    </td>
                  </tr>
                </tbody>  
              </table>
            </div>
          </div>

          <div id="myModal" class="modal fade" role="dialog">
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
                    <ul class="nav nav-pills row">
                      <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#binding" data-toggle="tab">BINDING</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#hardcover" data-toggle="tab">HARDCOVER</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#jahit" data-toggle="tab">JAHIT</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#potong" data-toggle="tab">POTONG</a></li>
                      <li class="nav-item col"><a class="nav-link btn-outline-success" href="#sub" data-toggle="tab">SUB</a></li>
                    </ul>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="binding">
                          <h4>DETAIL ORDERAN</h4><hr>
                          <div class="row">
                            <div class="col-md-4">
                              <br>Nomor SO
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
                              <br>Nama Pemesan
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
                          <div class="row">
                            <div class="col-md-4">
                              <br>Ukuran
                              <br><label class="form-label">dari db</label>
                            </div>
                            <div class="col-md-4">
                              <br>Halaman
                              <br><label class="form-label">dari db</label>
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-6">
                              <label>Tanggal Pelaksanaan</label><br>
                              <input type="date" class="form-control" name="tanggal_pelaksanaan_binding" placeholder="Tanggal Pelaksanaan">
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-4">
                              Jenis Mesin<br>
                              <label>Mesin Binding</label>
                            </div>
                            <div class="col-md-4">
                              Hasil Susun<br>
                              <label>dari db</label>
                            </div>
                            <div class="col-md-4">
                              Tanggal Pengerjaan<br>
                              <label>dari db</label>
                            </div>
                          </div><hr>

                          <h4>Keterangan</h4>
                          <textarea name="keterangan_finishing_akhir_binding" class="form-control" placeholder="catatan" style="height: 240px;"></textarea>
                        </div>
                        <div class="tab-pane" id="hardcover">
                          <h4>DETAIL ORDERAN</h4><hr>
                          <div class="row">
                            <div class="col-md-4">
                              <br>Nomor SO
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
                              <br>Nama Pemesan
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
                          <div class="row">
                            <div class="col-md-4">
                              <br>Ukuran
                              <br><label class="form-label">dari db</label>
                            </div>
                            <div class="col-md-4">
                              <br>Halaman
                              <br><label class="form-label">dari db</label>
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-6">
                              <label>Tanggal Pelaksanaan</label><br>
                              <input type="date" class="form-control" name="tanggal_pelaksanaan_hardcover" placeholder="Tanggal Pelaksanaan">
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-4">
                              Jenis Mesin<br>
                              <label>Mesin Hardcover</label>
                            </div>
                            <div class="col-md-4">
                              Hasil Susun<br>
                              <label>dari db</label>
                            </div>
                            <div class="col-md-4">
                              Tanggal Pengerjaan<br>
                              <label>dari db</label>
                            </div>
                          </div><hr>

                          <h4>Keterangan</h4>
                          <textarea name="keterangan_finishing_akhir_hardcover" class="form-control" placeholder="catatan" style="height: 240px;"></textarea>
                        </div>
                        <div class="tab-pane" id="jahit">
                          <h4>DETAIL ORDERAN</h4><hr>
                          <div class="row">
                            <div class="col-md-4">
                              <br>Nomor SO
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
                              <br>Nama Pemesan
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
                          <div class="row">
                            <div class="col-md-4">
                              <br>Ukuran
                              <br><label class="form-label">dari db</label>
                            </div>
                            <div class="col-md-4">
                              <br>Halaman
                              <br><label class="form-label">dari db</label>
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-6">
                              <label>Tanggal Pelaksanaan</label><br>
                              <input type="date" class="form-control" name="tanggal_pelaksanaan_jahit" placeholder="Tanggal Pelaksanaan">
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-4">
                              Jenis Mesin<br>
                              <label>Mesin Jahit</label>
                            </div>
                            <div class="col-md-4">
                              Hasil Susun<br>
                              <label>dari db</label>
                            </div>
                            <div class="col-md-4">
                              Tanggal Pengerjaan<br>
                              <label>dari db</label>
                            </div>
                          </div><hr>

                          <h4>Keterangan</h4>
                          <textarea name="keterangan_finishing_akhir_jahit" class="form-control" placeholder="catatan" style="height: 240px;"></textarea>
                        </div>
                        <div class="tab-pane" id="potong">
                          <h4>DETAIL ORDERAN</h4><hr>
                          <div class="row">
                            <div class="col-md-4">
                              <br>Nomor SO
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
                              <br>Nama Pemesan
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
                          <div class="row">
                            <div class="col-md-4">
                              <br>Ukuran
                              <br><label class="form-label">dari db</label>
                            </div>
                            <div class="col-md-4">
                              <br>Halaman
                              <br><label class="form-label">dari db</label>
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-6">
                              <label>Tanggal Pelaksanaan</label><br>
                              <input type="date" class="form-control" name="tanggal_pelaksanaan_potong" placeholder="Tanggal Pelaksanaan">
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-4">
                              Jenis Mesin<br>
                              <label>Mesin Potong</label>
                            </div>
                            <div class="col-md-4">
                              Hasil Binding<br>
                              <label>dari db</label>
                            </div>
                            <div class="col-md-4">
                              Tanggal Pengerjaan<br>
                              <label>dari db</label>
                            </div>
                          </div><hr>

                          <h4>Keterangan</h4>
                          <textarea name="keterangan_finishing_akhir_potong" class="form-control" placeholder="catatan" style="height: 240px;"></textarea>
                        </div>
                        <div class="tab-pane" id="sub">
                          <h4>DETAIL ORDERAN</h4><hr>
                          <div class="row">
                            <div class="col-md-4">
                              <br>Nomor SO
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
                              <br>Nama Pemesan
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
                          <div class="row">
                            <div class="col-md-4">
                              <br>Ukuran
                              <br><label class="form-label">dari db</label>
                            </div>
                            <div class="col-md-4">
                              <br>Halaman
                              <br><label class="form-label">dari db</label>
                            </div>
                          </div><hr>

                          <div class="row">
                            <div class="col-md-6">
                              <label>Tanggal SUB</label><br>
                              <input type="date" class="form-control" name="tanggal_sub" placeholder="Tanggal Pelaksanaan">
                            </div>
                          </div><hr>

                          <div class="row" align="center">
                            <div class="col-md-2">
                              <input class="form-check-input" type="checkbox" name="jenis_sub_binding" value="Binding" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">Binding</label>
                            </div>
                            <div class="col-md-2">
                              <input class="form-check-input" type="checkbox" name="jenis_sub_Hardcover" value="Hardcover" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">Hardcover</label>
                            </div>
                            <div class="col-md-2">
                              <input class="form-check-input" type="checkbox" name="jenis_sub_potong" value="Potong" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">Potong</label>
                            </div>
                            <div class="col-md-2">
                              <input class="form-check-input" type="checkbox" name="jenis_sub_spiral" value="Binding" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">Spiral</label>
                            </div>
                            <div class="col-md-2">
                              <input class="form-check-input" type="checkbox" name="jenis_sub_klem" value="Binding" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">Klem</label>
                            </div>
                            <div class="col-md-2">
                              <input class="form-check-input" type="checkbox" name="jenis_sub_jahit" value="Binding" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">Jahit</label>
                            </div>
                          </div><hr>

                          <h4>Keterangan</h4>
                          <textarea name="keterangan_finishing_akhir_hardcover" class="form-control" placeholder="catatan" style="height: 240px;"></textarea>
                        </div>
                      </div>
                    </div><br>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                  <button type="button" class="btn btn-success" data-dismiss="modal">Jadwal</button>
                </div>
              </div>
            </div>
          </div>

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