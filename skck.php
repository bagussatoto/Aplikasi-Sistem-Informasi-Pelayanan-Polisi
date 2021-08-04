<?php
include 'koneksi.php';
if (isset($_GET['hapus'])) {
  hapus($con, 'tbl_skck', 'id_skck', $_GET['hapus']);
}
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center"><strong>
        DATA SKCK</strong>
        <small></small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row" style="overflow-x: scroll;">
       <div class="col-xs-12">
          <div class="box box-primary">     
            <div style="background-color: #4c8ffc;" class="box-header with-border">

              <a href='?page=tambahskck'><button class="breadcrumb btn btn-flat btn-success btn-xs">Tambah</button></a>
              <a href="" class="breadcrumb btn btn-xs"><span class="glyphicon glyphicon-refresh"></span></a>
              <a class="pull-right" href='print_skck.php' target="_blank"><button class="breadcrumb btn btn-flat btn-success btn-xs">Cetak</button></a>
            </div>
            <table id="myTable" class="table table-bordered table-striped">
              <thead style="background-color: lightgreen;">
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Keperluan</th>
                <th>Riwayat Sekolah</th>
                <th>Keterangan</th>
                <th>Aksi</th>

              </thead>
              <tbody>
              <?php

              $adit = showdata($con, "SELECT * FROM tbl_skck");
              foreach ($adit as $row) :
              ?>
                <tr>
                  <?php foreach ($row as $value) : ?>
                    <td><?= $value; ?></td>
            <?php endforeach;?>
            <td><a href='?page=editskck&id=<?=$row['id_skck']; ?> '><button class="glyphicon glyphicon-pencil"></button></a>
            <a href='?page=skck&hapus=<?=$row['id_skck']; ?> '><button class="glyphicon glyphicon-trash" onclick="return confirm('yakin menghapus data ini?')"></button></a><a href="cetak_skck.php?id=<?php echo $row['id_skck']; ?>" target="_blank"><button class="glyphicon glyphicon-print"></button></a></td>
                </tr>
            <?php endforeach ?>
            </tbody>
            </table>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>