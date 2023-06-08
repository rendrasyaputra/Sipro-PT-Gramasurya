<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <a href="<?=site_url()?>cetak/Spk" class="btn btn-warning btn-lg">
          <i class="fa fa-chevron-left" style="font-size:18px"></i> KEMBALI
        </a>
      </div>
      <div class="col-md-6" align="right">
        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
          <i class="fa fa-plus" style="font-size:18px"></i> LAPORAN
        </button>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <div class="card-title coba">
        <div class="row">
          <div class="col-sm-6">LAPORAN MESIN (disesuaikan)</div>
          <div class="col-md-6" align="right"><label>Kapasitas : (disesuaikan)/Jam</label></div>
        </div>
      </div>

      <div class="card-tools">
        <!-- <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button> -->
      </div>
    </div>
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover" style="font-size: 12px;">
        <thead>
          <tr align="center">
            <td rowspan="2"><br>Tanggal Pelaksanaan</td>
            <td colspan="4">Shift 1</td>
            <td colspan="4">Shift 2</td>
            <td rowspan="2"><br>Actions</td>
          </tr>
          <tr>
            <!-- SHIFT 1 -->
            <td>Jam Kerja</td>
            <td>Jam Realisasi</td>
            <td>Set</td>
            <td>Drug</td>

            <!-- SHIFT 2 -->
            <td>Jam Kerja</td>
            <td>Jam Realisasi</td>
            <td>Set</td>
            <td>Drug</td>
          </tr>
        </thead>
        <tr>
            <td>Hari, Tanggal Pelaksanaan</td>

            <!-- SHIFT 1 -->
            <td>Jam Kerja</td>
            <td>Jam Realisasi</td>
            <td>Set</td>
            <td>Drug</td>


            <!-- SHIFT 2 -->
            <td>Jam Kerja</td>
            <td>Jam Realisasi</td>
            <td>Set</td>
            <td>Drug</td>
            <td align="center">
              <a href="<?=site_url('cetak/Spk/edit_spk')?>">
                <i class="fa fa-pencil" style="font-size:18px;margin-right: 20px;"></i>
              </a>
              <a href="<?=site_url('cetak/Spk/lihat_spk')?>">
                <i class="fa fa-eye" style="font-size:18px;"></i>
              </a>
            </td>
        </tr>
        <tr>
            <td align="right">TOTAL</td>

            <!-- SHIFT 1 -->
            <td></td>
            <td></td>
            <td></td>
            <td></td>


            <!-- SHIFT 2 -->
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <td></td>
          </tr>
      </table>
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
                <li class="nav-item col"><a class="nav-link btn-outline-success active" href="#shift1" data-toggle="tab" style="min-width: 200px;">SHIFT 1</a></li>
                <li class="nav-item col"><a class="nav-link btn-outline-success" href="#shift2" data-toggle="tab" style="min-width: 200px;">SHIFT 2</a></li>
              </ul>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="shift1">
                  <h4><b>Laporan Cetak</b></h4><br>
                  <div class="row">
                    <div class="col-md-6">
                      Tanggal Pelaksanaan<br>
                      <input type="date" name="tanggal_pelaksanaan_shift1" class="form-control">
                    </div>
                    <div class="col-md-6">
                      Operator<br>
                      <select id="inputState" class="form-select form-control" name="operator_shift1" >
                        <option value="-">-</option>
                      </select>
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col-md-6">
                      Jam Kerja<br>
                      <input type="time" name="jam_kerja_shift1" class="form-control" placeholder="Jam Kerja">
                    </div>
                    <div class="col-md-6">
                      Jam Realisasi<br>
                      <input type="time" name="jam_realisasi_shift1" class="form-control" placeholder="Jam Realisasi">
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col-md-6">
                      Set<br>
                      <input type="number" name="set_shift1" class="form-control" placeholder="Jumlah Set">
                    </div>
                    <div class="col-md-6">
                      Druk<br>
                      <input type="number" name="druk_shift1" class="form-control" placeholder="Jumlah Druk">
                    </div>
                  </div><br><hr><br>
                  <div class="row" align="right">
                    <div class="col">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                      <button type="submit" class="btn btn-success" name="add">Publish</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="shift2">
                  <h4><b>Laporan Cetak</b></h4><br>
                  <div class="row">
                    <div class="col-md-6">
                      Tanggal Pelaksanaan<br>
                      <input type="date" name="tanggal_pelaksanaan_shift2" class="form-control">
                    </div>
                    <div class="col-md-6">
                      Operator<br>
                      <select id="inputState" class="form-select form-control" name="operator_shift2" >
                        <option value="-">-</option>
                      </select>
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col-md-6">
                      Jam Kerja<br>
                      <input type="time" name="jam_kerja_shift2" class="form-control" placeholder="Jam Kerja">
                    </div>
                    <div class="col-md-6">
                      Jam Realisasi<br>
                      <input type="time" name="jam_realisasi_shift2" class="form-control" placeholder="Jam Realisasi">
                    </div>
                  </div><br>
                  <div class="row">
                    <div class="col-md-6">
                      Set<br>
                      <input type="number" name="set_shift2" class="form-control" placeholder="Jumlah Set">
                    </div>
                    <div class="col-md-6">
                      Druk<br>
                      <input type="number" name="druk_shift2" class="form-control" placeholder="Jumlah Druk">
                    </div>
                  </div><br><hr><br>
                  <div class="row" align="right">
                    <div class="col">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                      <button type="submit" class="btn btn-success" name="add">Publish</button>
                    </div>
                  </div>
                </div>
            </div>
          </div>
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