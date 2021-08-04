<?php 
include 'koneksi.php';
 ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SURAT KELUAR
        <small>(Tambah)</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if (isset($_POST) && isset($_POST['submit_keluar'])) :
        if(!tambahkeluar($con, $_POST)) :
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
                  <label for="perihal" class="col-sm-2 control-label">Perihal</label>
                  <div class="col-sm-10">
                    <input type="text" id="perihal" name="perihal" class="form-control" placeholder="Perihal" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tujuan_surat" class="col-sm-2 control-label">Tujuan Surat</label>
                  <div class="col-sm-10">
                    <input type="text" id="tujuan_surat" name="tujuan_surat" class="form-control" placeholder="Tujuan " required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="lampiran" class="col-sm-2 control-label">Lampiran</label>
                  <div class="col-sm-10">
                    <input type="number" id="lampiran" name="lampiran" class="form-control" placeholder="Lampiran" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-2">
                    <input type="submit" name="submit_keluar" class="btn btn-primary" value="submit">
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