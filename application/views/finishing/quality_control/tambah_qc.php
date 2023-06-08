<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>QUALITY CONTROL</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <div class="card-title">
        <h3>SO dari db</h3>
      </div>
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
            <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_binding" placeholder="Tanggal Pelaksanaan" required>
          </div>
          <div class="col-md-6">
            Status<br>
            <input type="text" class="form-control" name="status" required>
            </div>
          </div>  
        </div><br>
        <hr><br>

        <div class="row">
          <div class="col-md-6">
            Hasil QC<br>
            <input type="number" class="form-control" name="hasil_qc" placeholder="Masukan Jumlah Lembar" required>
          </div>
          <div class="col-md-6">
            Rejek QC<br>
            <input type="number" class="form-control" name="rejek_qc" placeholder="Masukan Jumlah Lembar" required>
          </div>
        </div><br>
        <hr><br>

        <h4>Keterangan</h4>
        <textarea name="keterangan_qc" class="form-control" placeholder="catatan" style="height: 240px;"></textarea><br>

        <div class="row">
          <div class="col" align="right">
            <button type="reset" class="btn btn-default">Kembali</button>
            <button type="submit" name="simpan" class="btn btn-success">Jadwal</button>
          </div>
        </div>

      </div>
    </div>
  </div>  
  <!-- /.card -->
</section>
<!-- /.content -->