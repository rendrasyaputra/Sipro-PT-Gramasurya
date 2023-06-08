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
        <div class="row">
          <div class="col-sm-6">
            <label>Tanggal Pelaksanaan</label><br>
            <input type="date" name="tanggal_pelaksanaan" class="form-control">
          </div>
        </div><br>
        <div class="row">
          <!-- COVER -->
          <div class="col-md-6">
            <!-- CARD HEADER -->
            <div class="row">
              <div class="col">
                <div class="card border bg-success">
                  <div class="card-header text-center">
                    COVER
                  </div>
                </div>
              </div>
            </div>
            <!-- CARD BODY IMPOSISI ISI 2 -->
            <div class="card-body p-3 mb-2 bg-light text-dark">
              <!-- Nama OPERATOR -->
              <div class="row">
                <div class="col-md-6">Nama Opertator</div>
                <div class="col-md-6" align="center"><b>dari db</b></div>
              </div><br>
              <!-- JAM KERJA -->
              <div class="row">
                <div class="col-md-6"><b>Jam Kerja</b></div>
                <div class="col-md-6"><input type="time" name="jam_kerja_cover" class="form-control"></div>
              </div><br>
              <!-- JAM REALISASI -->
              <div class="row">
                <div class="col-md-6"><b>Jam Realisasi</b></div>
                <div class="col-md-6"><input type="time" name="jam_realisasi_cover" class="form-control"></div>
              </div><br>
              <!-- JAM SET -->
              <div class="row">
                <div class="col-md-6"><b>Jam Set</b></div>
                <div class="col-md-6"><input type="time" name="jam_set_cover" class="form-control"></div>
              </div><br>
              <!-- JAM DRUG -->
              <div class="row">
                <div class="col-md-6"><b>Jam Drug</b></div>
                <div class="col-md-6"><input type="time" name="jam_drug_cover" class="form-control"></div>
              </div>
            </div>
          </div>

          <!-- ISI -->
          <div class="col-md-6">
            <!-- CARD HEADER -->
            <div class="row">
              <div class="col">
                <div class="card border bg-info">
                  <div class="card-header text-center">
                    ISI
                  </div>
                </div>
              </div>
            </div>
            <!-- CARD BODY IMPOSISI ISI 2 -->
            <div class="card-body p-3 mb-2 bg-light text-dark">
              <!-- Nama OPERATOR -->
              <div class="row">
                <div class="col-md-6">Nama Opertator</div>
                <div class="col-md-6" align="center"><b>dari db</b></div>
              </div><br>
              <!-- JAM KERJA -->
              <div class="row">
                <div class="col-md-6"><b>Jam Kerja</b></div>
                <div class="col-md-6"><input type="time" name="jam_kerja_isi" class="form-control"></div>
              </div><br>
              <!-- JAM REALISASI -->
              <div class="row">
                <div class="col-md-6"><b>Jam Realisasi</b></div>
                <div class="col-md-6"><input type="time" name="jam_realisasi_isi" class="form-control"></div>
              </div><br>
              <!-- JAM SET -->
              <div class="row">
                <div class="col-md-6"><b>Jam Set</b></div>
                <div class="col-md-6"><input type="time" name="jam_set_isi" class="form-control"></div>
              </div><br>
              <!-- JAM DRUG -->
              <div class="row">
                <div class="col-md-6"><b>Jam Drug</b></div>
                <div class="col-md-6"><input type="time" name="jam_drug_isi" class="form-control"></div>
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