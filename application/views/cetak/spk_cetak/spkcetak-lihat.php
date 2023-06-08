 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-12">
            <h2><b>REKAPITULASI & LAPORAN PRODUKTIFITAS MESIN</b></h2>
            <b>UNIT : CETAK</b>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title coba">LAPORAN MESIN (disesuaikan)</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover" style="font-size: 12px;">
              <thead align="center">
                <tr bgcolor="#F7F8FB">
                  <td rowspan="2">Tanggal Pelaksanaan</td>
                  <td colspan="4">(Nama Operator Shift 1)</td>
                  <td colspan="4">(Nama Operator Shift 2)</td>
                </tr>
                <tr bgcolor="#F7F8FB">
                  <td>Jam Kerja</td>
                  <td>Jam Realisasi</td>
                  <td>Set</td>
                  <td>Druk</td>
                  <td>Jam Kerja</td>
                  <td>Jam Realisasi</td>
                  <td>Set</td>
                  <td>Druk</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>tanggal</td>
                  <td>Jam Kerja</td>
                  <td>Jam Realisasi</td>
                  <td>Set</td>
                  <td>Druk</td>
                  <td>Jam Kerja</td>
                  <td>Jam Realisasi</td>
                  <td>Set</td>
                  <td>Druk</td>
                </tr>
              </tbody>
              <!-- BARIS UNTUK JUMLAH -->
              <tr>
                <td align="center">Jumlah</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title coba">PRODUKTIFITAS MESIN</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover" style="font-size: 12px;">
              <thead align="center">
                <tr bgcolor="#F7F8FB">
                  <td rowspan="3"><br><br><br>Mesin Cetak</td>
                  <td rowspan="3"><br><br>Terpasang<br>Perjam</td>
                  <td colspan="4">IDEALITA</td>
                  <td colspan="2">22 Hari</td>
                  <td rowspan="2"><br>Over<br>Lembur</td>
                  <td rowspan="3"></td>
                  <td colspan="5">22 Hari</td>
                  <td colspan="2">22 Hari</td>
                </tr>
                <tr bgcolor="#F7F8FB">
                  <td>Jam</td>
                  <td>Perhari</td>
                  <td colspan="4">Perbulan</td>
                  <td colspan="2">Perhari</td>
                  <td colspan="3">Perbulan</td>
                  <td colspan="2">%</td>
                </tr>
                <tr bgcolor="#F7F8FB">
                  <td>65%</td>
                  <td>13</td>
                  <td colspan="2">Jam</td>
                  <td>Set</td>
                  <td>Drug</td>
                  <td>Jam</td>
                  <td>Jam</td>
                  <td>Drug</td>
                  <td>Jam</td>
                  <td>Set</td>
                  <td>Drug</td>
                  <td>Set</td>
                  <td>Drug</td>
                </tr>
              </thead>
              <tr>
                <td>dari db</td>
                <td>dari db</td>
                <td>dari db</td>
                <td>dari db</td>
                <td>dari db</td>
                <td>dari db</td>
                <td>dari db</td>
                <td>dari db</td>
                <td>dari db</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
        <!-- <div class="card-footer">
          Footer
        </div> -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

      <div class="card-body">
        <div class="row">
          <div class="col"><b>Dibuat Tanggal : (dari db)</b></div>
        </div><br>
        <div class="row" align="center">
          <div class="col-md-4"><b>PELAKSANA<br>KASI. CETAK</b></div>
          <div class="col-md-4"><b>ATASAN<br>MANAJER PRODUKSI</b></div>
          <div class="col-md-4"><b>PIMPINAN<br>DIREKTUR OPERASIONAL</b></div>
        </div>
        <div class="row" align="center" style="margin-top: 100px;">
          <div class="col-md-4"><b>(IHSANUDIN)</b></div>
          <div class="col-md-4"><b>(GUNAWAN)</b></div>
          <div class="col-md-4"><b>(A. LATIEF BAEDHOWI)</b></div>
        </div>
      </div><br>
      <div class="row" align="right">
        <div class="col">
          <a href="<?=site_url()?>cetak/Spk" class="btn btn-default">Kembali</a>
          <button type="submit" name="add" class="btn btn-success">Print</button>
        </div>
      </div><br>
    </section>
    <!-- /.content -->