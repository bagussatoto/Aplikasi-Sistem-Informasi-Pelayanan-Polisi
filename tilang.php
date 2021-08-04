<?php
include 'koneksi.php';
if (isset($_GET['hapus'])) {
  hapus($con, 'tbl_tilang', 'id_tilang', $_GET['hapus']);
}
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        DATA TILANG
        <small></small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row" style="overflow-x: scroll;">
       <div class="col-xs-12">
          <div class="box box-primary">
            <div style="background-color: #4c8ffc;" class="box-header with-border">
              <a href='?page=tambahtilang'><button class="breadcrumb btn btn-flat btn-success btn-xs">Tambah</button></a>
              <a href="" class="breadcrumb btn btn-xs"><span class="glyphicon glyphicon-refresh"></span></a>
               <a class="pull-right" href='print_tilang.php' target="_blank" ><button target="_blank" class="breadcrumb btn btn-flat btn-success btn-xs">Cetak</button></a>
            </div>
            <table id="myTable" class="table table-bordered table-striped">
              <thead style="background-color: lightgreen;">
                <th>No</th>
                <th>No. Registrasi</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>

              </thead>
              <tbody>
              <?php

              $adit = showdata($con, "SELECT * FROM tbl_tilang");
              foreach ($adit as $row) :
              ?>
                <tr>
                  <?php foreach ($row as $value) : ?>
                    <td><?= $value; ?></td>
            <?php endforeach;?>
            <td><a href='?page=edittilang&id=<?=$row['id_tilang']; ?> '><button class="glyphicon glyphicon-pencil"></button></a>
            <a href='?page=tilang&hapus=<?=$row['id_tilang']; ?> '><button class="glyphicon glyphicon-trash" onclick="return confirm('yakin menghapus data ini?')"></button></a>
            <a href="cetak_tilang.php?id=<?php echo $row['id_tilang']; ?>" target="_blank"><button class="glyphicon glyphicon-print"></button></a></td>
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