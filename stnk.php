<?php
include 'koneksi.php';
if (isset($_GET['hapus'])) {
  hapus($con, 'tbl_stnk', 'id_stnkk', $_GET['hapus']);
}
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        DATA STNK
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row" style="overflow-x: scroll;">
       <div class="col-xs-12">
          <div class="box box-primary">
            <div style="background-color: #4c8ffc;" class="box-header with-border">
              <a href='?page=tambahstnk'><button class="breadcrumb btn btn-flat btn-success btn-xs">Tambah</button></a>
            </div>
            <table id="stnk" class="table table-bordered table-striped">
              <thead style="background-color: lightgreen;"">
                <th>No</th>
                <th>No Regis</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Merk</th>
                <th>Type</th>
                <th>Jenis</th>
                <th>Model</th>
                <th>Tahun</th>
                <th>Isi Silinder</th>
                <th>Warna</th>
                <th>Keterangan</th>
                <th>Masa</th>
                <th>Aksi</th>

              </thead>
              <?php

              $adit = showdata($con, "SELECT * FROM tbl_stnk");
              foreach ($adit as $row) :
              ?>
                <tr>
                  <?php foreach ($row as $value) : ?>
                    <td><?= $value; ?></td>
            <?php endforeach;?>
            <td><a href='?page=editstnk&id=<?=$row['id_stnk']; ?> '><button class="breadcrumb btn btn-flat btn-primary btn-xs">Edit</button></a>
            <a href='?page=stnk&hapus=<?=$row['id_stnk']; ?> '><button class="breadcrumb btn btn-flat btn-danger btn-xs" onclick="return confirm('yakin menghapus data ini?')">Hapus</button></a></td>
                </tr>
            <?php endforeach ?>
            </table>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>