<?php
include 'koneksi.php';
$_GET['id'] = htmlspecialchars($_GET['id']);
if(!is_numeric($_GET['id'])) {
  header('location:?page=apd_dump_regular_resources()');
}
$row = showdata($con, "SELECT id_dumas, nama, tmp_lahir, tgl_lahir, umur, jenis_kelamin, pekerjaan, agama, alamat  FROM tbl_dumas WHERE id_dumas = '".$_GET['id']."'");
$data = $row[0];
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data DUMAS
        <small>(Edit)</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if (isset($_POST) && isset($_POST['edit_dumas'])) :
        if(!editdumas($con, $_POST)) :
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
                  <label for="id_dumas" class="col-sm-2 control-label">NO</label>
                  <div class="col-sm-10">
                    <input type="number" id="id_dumas" name="id_dumas" class="form-control" value="<?= $data['id_dumas']; ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tmp_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control" value="<?= $data['tmp_lahir']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?= $data['tgl_lahir']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="umur" class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-10">
                    <input type="text" id="umur" name="umur" class="form-control" value="<?= $data['umur']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" value="<?= $data['jenis_kelamin']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" value="<?= $data['pekerjaan']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="agama" class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <input type="text" id="agama" name="agama" class="form-control" value="<?= $data['agama']; ?>" required>
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
                    <input type="submit" name="edit_dumas" class="btn btn-primary" value="submit">
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