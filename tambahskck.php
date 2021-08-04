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
      if (isset($_POST) && isset($_POST['submit_skck'])) :
        if(!tambahskck($con, $_POST)) :
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
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <td><select name="jenis_kelamin" placeholder="Jenis Kelamin" class="form-control">
                      <option value="pilih">Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tmp_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control" placeholder="Tempat lahir" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal lahir" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="agama" class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <td><select name="agama" placeholder="Agama" class="form-control">
                      <option value="pilih">Agama</option>
                      <option value="islam">Islam</option>
                      <option value="budha">Budha</option>
                      <option value="katholik">Khatolik</option>
                      <option value="protestan">Protestan</option>
                      <option value="hindu">Hindu</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="keperluan" class="col-sm-2 control-label">Keperluan</label>
                  <div class="col-sm-10">
                    <input type="text" id="keperluan" name="keperluan" class="form-control" placeholder="Keperluan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="riwayat_sekolah" class="col-sm-2 control-label">Riwayat Sekolah</label>
                  <div class="col-sm-10">
                    <input type="text" id="riwayat_sekolah" name="riwayat_sekolah" class="form-control" placeholder="Riwayat Sekolah" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" required>
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-sm-2">
                    <input type="submit" name="submit_skck" class="btn btn-primary" value="submit">
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