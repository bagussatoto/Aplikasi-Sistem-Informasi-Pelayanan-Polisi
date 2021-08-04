<?php
include 'koneksi.php';
if (isset($_GET['hapus'])) {
  hapus($con, 'tbl_perizinan', 'id_perizinan', $_GET['hapus']);
}
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center"><strong>
        PERIZINAN</strong>
        <small></small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row" style="overflow-x: scroll;">
       <div class="col-xs-12">
          <div class="box box-primary">     
            <div style="background-color: #4c8ffc;" class="box-header with-border">
              <a href='?page=tambahperizinan'><button class="breadcrumb btn btn-flat btn-success btn-xs">Tambah</button></a>
              <a href="" class="breadcrumb btn btn-xs"><span class="glyphicon glyphicon-refresh"></span></a>
              <a class="pull-right" href='print_perizinan.php' target="_blank"><button class="breadcrumb btn btn-flat btn-success btn-xs">Cetak</button></a>
            </div>
            <table id="myTable" class="table table-bordered table-striped">
              <thead style="background-color: lightgreen;">
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Kegiatan</th>
                <th>Tempat</th>
                <th>Pemohon</th>
                <th>Aksi</th>

              </thead>
              <tbody>
              <?php

              $adit = showdata($con, "SELECT * FROM tbl_perizinan");
              foreach ($adit as $row) :
              ?>
                <tr>
                  <?php foreach ($row as $value) : ?>
                    <td><?= $value; ?></td>
            <?php endforeach;?>
            <td><a href='?page=editperizinan&id=<?=$row['id_perizinan']; ?> '><button class="glyphicon glyphicon-pencil"></button></a>
            <a href='?page=perizinan&hapus=<?=$row['id_perizinan']; ?> '><button class="glyphicon glyphicon-trash" onclick="return confirm('yakin menghapus data ini?')"></button></a>
            <a href="cetak_perizinan.php?id=<?php echo $row['id_perizinan']; ?>" target="_blank"><button class="glyphicon glyphicon-print"></button></a></td>
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