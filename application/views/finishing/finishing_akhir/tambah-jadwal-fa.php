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
  <div class="card">
    <div class="card-header">
      <div class="card-title">
        <h3>Mesin (disesuaikan)</h3>
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
            Surat Order<br>
            <input type="text" class="form-control" name="so" required>
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
            Tanggal Pelaksanaan<br>
            <input type="date" class="form-control" name="tanggal_pelaksanaan_mesin_binding" placeholder="Tanggal Pelaksanaan" required>
          </div>
        </div><br>
        <hr><br>

        <div class="row">
          <div class="col-md-6">
            Hasil Berhasil<br>
            <input type="number" class="form-control" name="hasil_berhasil_mesin_binding" placeholder="Masukan Jumlah Lembar" required>
          </div>
          <div class="col-md-6">
            Hasil Rejek<br>
            <input type="number" class="form-control" name="hasil_rejek_mesin_binding" placeholder="Masukan Jumlah Lembar" required>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-6">
            Keterangan<br>
            <input type="text" class="form-control" name="keterangan_mesin_binding" required>
          </div>
        </div><br>
        <hr><br>

        <div class="row">
          <div class="col-md-6">
            Nama Operator - 1<br>
            <input type="text" class="form-control" name="operator1_binding">
          </div>
          <div class="col-md-6">
            Tanggal Input - 1<br>
            <input type="date" class="form-control" name="tanggal_input1_binding">
          </div>
        </div><br>

        <div class="row">
          <div class="col" align="right">
            <button type="reset" class="btn btn-default">Kembali</button>
            <button type="submit" name="simpan" class="btn btn-success">Publish</button>
          </div>
        </div>

      </div>
    </div>
  </div>  
  <!-- /.card -->
</section>
<!-- /.content -->
   