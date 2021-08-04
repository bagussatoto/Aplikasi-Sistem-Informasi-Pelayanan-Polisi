<?php
include 'koneksi.php';
$_GET['id'] = htmlspecialchars($_GET['id']);
if(!is_numeric($_GET['id'])) {
  header('location:?page=tilang');
}
$row = showdata($con, "SELECT id_tilang, no_registrasi, nama, alamat FROM tbl_tilang WHERE id_tilang = '".$_GET['id']."'");
$data = $row[0];
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tilang
        <small>(Edit)</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if (isset($_POST) && isset($_POST['edit_tilang'])) :
        if(!edittilang($con, $_POST)) :
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
                  <label for="id_tilang" class="col-sm-2 control-label">No</label>
                  <div class="col-sm-10">
                    <input type="number" id="id_tilang" name="id_tilang" class="form-control" value="<?= $data['id_tilang']; ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="no_registrasi" class="col-sm-2 control-label">No Regis</label>
                  <div class="col-sm-10">
                    <input type="number" id="no_registrasi" name="no_registrasi" class="form-control" value="<?= $data['no_registrasi']; ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" id="alamat" name="alamat" class="form-control" value="<?= $data['alamat']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-2">
                    <input type="submit" name="edit_tilang" class="btn btn-primary" value="submit">
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