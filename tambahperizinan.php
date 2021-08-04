<?php 
include 'koneksi.php';
 ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PERIZINAN
        <small>(Tambah)</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if (isset($_POST) && isset($_POST['submit_perizinan'])) :
        if(!tambahperizinan($con, $_POST)) :
        ?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            query gagal
        </div>
        <?php else : ?>
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-info"></i> Info!</h4>
          query berhasil
        </div>
      <?php endif; ?>
    <?php endif; ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <form class="form-horizontal" method="POST" action="">  
              <div class="box-body">
                
                 <div class="form-group">
                  <label for="no_surat" class="col-sm-2 control-label">No Surat</label>
                  <div class="col-sm-10">
                    <input type="number" id="no_surat" name="no_surat" class="form-control" placeholder="No Surat" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="waktu" class="col-sm-2 control-label">Waktu</label>
                  <div class="col-sm-10">
                    <input type="text" id="waktu" name="waktu" class="form-control" placeholder="Waktu" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="kegiatan" class="col-sm-2 control-label">Kegiatan</label>
                  <div class="col-sm-10">
                    <input type="text" id="kegiatan" name="kegiatan" class="form-control" placeholder="kegiatan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Tempat" class="col-sm-2 control-label">Tempat</label>
                  <div class="col-sm-10">
                    <input type="text" id="tempat" name="tempat" class="form-control" placeholder="Tempat" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="pemohon" class="col-sm-2 control-label">Pemohon</label>
                  <div class="col-sm-10">
                    <input type="text" id="pemohon" name="pemohon" class="form-control" placeholder="Pemohon" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-2">
                    <input type="submit" name="submit_perizinan" class="btn btn-primary" value="submit">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>