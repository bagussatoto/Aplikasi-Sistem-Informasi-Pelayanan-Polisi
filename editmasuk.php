<?php
include 'koneksi.php';
$_GET['id'] = htmlspecialchars($_GET['id']);
if(!is_numeric($_GET['id'])) {
  header('location:?page=masuk');
}
$row = showdata($con, "SELECT id_masuk, no_surat, tanggal, pengirim, perihal, lampiran FROM tbl_masuk WHERE id_masuk = '".$_GET['id']."'");
$data = $row[0];
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SURAT MASUK
        <small>(Edit)</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if (isset($_POST) && isset($_POST['edit_masuk'])) :
        if(!editmasuk($con, $_POST)) :
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
                  <label for="id_masuk" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-10">
                    <input type="number" id="id_masuk" name="id_masuk" class="form-control" value="<?= $data['id_masuk']; ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="no_surat" class="col-sm-2 control-label">No Surat</label>
                  <div class="col-sm-10">
                    <input type="number" id="no_surat" name="no_surat" class="form-control" value="<?= $data['no_surat']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $data['tanggal']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="pengirim" class="col-sm-2 control-label">Pengirim</label>
                  <div class="col-sm-10">
                    <input type="text" id="pengirim" name="pengirim" class="form-control" value="<?= $data['pengirim']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="perihal" class="col-sm-2 control-label">Perihal</label>
                  <div class="col-sm-10">
                    <input type="text" id="perihal" name="perihal" class="form-control" value="<?= $data['perihal']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="lampiran" class="col-sm-2 control-label">Lampiran</label>
                  <div class="col-sm-10">
                    <input type="number" id="lampiran" name="lampiran" class="form-control" value="<?= $data['lampiran']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2">
                    <input type="submit" name="edit_masuk" class="btn btn-primary" value="submit">
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