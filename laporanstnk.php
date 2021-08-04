<?php
include 'koneksi.php';
if (isset($_GET['hapus'])) {
  hapus($con, 'tbl_stnk', 'id_stnk', $_GET['hapus']);
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
    <section style="background-color: white;"class="content">
      <div class="row">
       <div class="col-xs-12">
          <div class="box box-primary">
            <div style="background-color: lightblue;" class="box-header with-border">
              <!-- <a href='?page=tambahsiswa'><button class="breadcrumb btn btn-flat btn-success btn-xs">Tambah</button></a> -->
            </div>
            <style>
              @media print{ 
                      .
                }
            </style>

<body onload="window.print ()">


<tr><td colspan=8 color="#FFF000"><center> <strong>POLSEK</strong></center></td></tr>
<tr><td colspan=8 ><center><strong>LAPORAN DATA SKCK POLSEK</strong></center></td></tr>
<tr><td colspan=8 ><center><strong>Jl. D.I Panjaitan No. 46 Sabak Auh</strong></center></td></tr>
<tr><td colspan=8 ><center><strong>=========================================================================</strong></center></td></tr>
            <table id="terdaftar" class="table table-bordered table-striped">
              <thead style="background-color: #4c8ffc;"">
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

              </thead>
              <?php

              $adit = showdata($con, "SELECT * FROM tbl_stnk");
              foreach ($adit as $row) :
              ?>
                <tr>
                  <?php foreach ($row as $value) : ?>
                    <td><?= $value; ?></td>
            <?php endforeach;?>
            <?php endforeach ?>
            </table>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>