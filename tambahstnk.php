<?php 
include 'koneksi.php';
 ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SKCK
        <small>(Tambah)</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if (isset($_POST) && isset($_POST['submit_stnk'])) :
        if(!tambahstnk($con, $_POST)) :
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
                  <label for="no_registrasi" class="col-sm-2 control-label">No Regis</label>
                  <div class="col-sm-10">
                    <input type="text" id="no_registrasi" name="no_registrasi" class="form-control" placeholder="No Regis" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="nama" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" id="alamat" name="alamat" class="form-control" placeholder="alamat" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="merk" class="col-sm-2 control-label">Merk</label>
                  <div class="col-sm-10">
                    <input type="text" id="merk" name="merk" class="form-control" placeholder="merk" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="type" class="col-sm-2 control-label">Type</label>
                  <div class="col-sm-10">
                    <input type="text" id="type" name="type" class="form-control" placeholder="Type" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis" class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-10">
                    <input type="text" id="jenis" name="jenis" class="form-control" placeholder="Jenis" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="model" class="col-sm-2 control-label">Model</label>
                  <div class="col-sm-10">
                    <input type="text" id="model" name="model" class="form-control" placeholder="model" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tahun" class="col-sm-2 control-label">Tahun</label>
                  <div class="col-sm-10">
                    <input type="number" id="tahun" name="tahun" class="form-control" placeholder="Tahun" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="isi_silinder" class="col-sm-2 control-label">Isi Silinder</label>
                  <div class="col-sm-10">
                    <input type="text" id="isi_silinder" name="isi_silinder" class="form-control" placeholder="Isi Silinder" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="warna" class="col-sm-2 control-label">Warna</label>
                  <div class="col-sm-10">
                    <input type="text" id="warna" name="warna" class="form-control" placeholder="Warna" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="masa" class="col-sm-2 control-label">Masa</label>
                  <div class="col-sm-10">
                    <input type="text" id="masa" name="masa" class="form-control" placeholder="Masa" required>
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-sm-2">
                    <input type="submit" name="submit_stnk" class="btn btn-primary" value="submit">
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