<?php
include 'koneksi.php';
if (isset($_GET['hapus'])) {
  hapus($con, 'tbl_dumas', 'id_dumas', $_GET['hapus']);
}
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center"><strong>
        DATA DUMAS</strong>
        <small></small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row" style="overflow-x: scroll;">
       <div class="col-xs-12">
          <div class="box box-primary">     
            <div style="background-color: #4c8ffc;" class="box-header with-border">
              <a href='?page=tambahdumas'><button class="breadcrumb btn btn-flat btn-success btn-xs">Tambah</button></a>
              <a href="" class="breadcrumb btn btn-xs"><span class="glyphicon glyphicon-refresh"></span></a>
               <a class="pull-right" href='print_dumas.php' target="_blank"><button class="breadcrumb btn btn-flat btn-success btn-xs">Cetak</button></a>
            </div>
            <table id="myTable" class="table table-bordered table-striped">
              <thead style="background-color: lightgreen;">
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Pekerjaan</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>

              </thead>
              <tbody>
              <?php

              $adit = showdata($con, "SELECT * FROM tbl_dumas");
              foreach ($adit as $row) :
              ?>
                <tr>
                  <?php foreach ($row as $value) : ?>
                    <td><?= $value; ?></td>
            <?php endforeach;?>
            <td><a href='?page=editdumas&id=<?=$row['id_dumas']; ?> '><button class="glyphicon glyphicon-pencil"></button></a>
            <a href='?page=dumas&hapus=<?=$row['id_dumas']; ?> '><button class="glyphicon glyphicon-trash" onclick="return confirm('yakin menghapus data ini?')"></button></a><a href="cetak_dumas.php?id=<?php echo $row['id_dumas']; ?>" target="_blank"><button class="glyphicon glyphicon-print"></button></a></td>
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