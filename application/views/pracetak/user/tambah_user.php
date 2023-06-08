<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TAMBAH USER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="<?=site_url('pracetak/User/index')?>"  class="btn btn-success btn-lg">
                  <i class="fa fa-undo"></i> KEMBALI
                </a>
              </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title coba">Data User</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
            <form action="<?=site_url('pracetak/User/tambah_user')?>" method="post">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="<?=set_value('nama')?>" class="form-control">
                    <?=form_error('nama')?>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?=set_value('email')?>" class="form-control">
                    <?=form_error('email')?>
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="level" value="<?=set_value('level')?>" class="form-control">
                        <option>Pilih</option>
                        <option value="1">Pracetak</option>
                        <option value="2">Cetak</option>
                        <option value="3">Finishing</option>
                        <option value="4">Admin Imposisi</option>
                        <option value="5">Admin CTCP</option>
                        <option value="6">Super Admin</option>
                        <option value="7">Operator</option>
                        <option value="8">Direksi</option>
                    </select>
                    <?=form_error('level')?>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?=set_value('username')?>" class="form-control">
                    <?=form_error('username')?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                    <?=form_error('password')?>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="passconf" class="form-control">
                    <?=form_error('passconf')?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-flat">Save</button>
                </div>
            </form>
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