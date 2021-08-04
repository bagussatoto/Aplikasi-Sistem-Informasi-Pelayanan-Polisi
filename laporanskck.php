<?php
include 'koneksi.php';
if (isset($_GET['hapus'])) {
  hapus($con, 'tbl_skck', 'id_skck', $_GET['hapus']);
}
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        DATA SKCK
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

<body onload="window.print ()">


<tr><td colspan=8 color="#FFF000"><center> <strong>POLSEK</strong></center></td></tr>
<tr><td colspan=8 ><center><strong>LAPORAN DATA SKCK POLSEK</strong></center></td></tr>
<tr><td colspan=8 ><center><strong>Jl. D.I Panjaitan No. 46 Sabak Auh</strong></center></td></tr>
<tr><td colspan=8 ><center><strong>=========================================================================</strong></center></td></tr>
            <table id="myTable" id="terdaftar" class="table table-bordered table-striped">
              <thead style="background-color: #4c8ffc;">
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Kebangsaan</th>
                <th>Agama</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>No KTP</th>
                <th>Keperluan</th>
                <th>Riwayat Sekolah</th>
                <th>Keterangan</th>
                <th>Masa</th>

              </thead>
              <?php

              $adit = showdata($con, "SELECT * FROM tbl_skck");
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
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script
  src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"
  integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>


<script src="../src/datatable.js"></script>
<script type="text/javascript" src="../src/datatable2.js"></script>
<script type="text/javascript" src="../src/datatable3.js"></script>
<script type="text/javascript" src="../src/datatable4.js"></script>
<script type="text/javascript" src="../src/datatable5.js"></script>
<script type="text/javascript" src="../src/datatable6.js"></script>
<script type="text/javascript" src="../src/datatable7.js"></script>
<script type="text/javascript" src="../src/datatable8.js"></script>

<script type="text/javascript">
    //   $(document).ready( function () {
    //     $('#myTable').DataTable();
    // } ); 

      $(document).ready(function() {
          $('#myTable').DataTable( {
            "ordering" : true,
            "info" : false,
            "dom": 'Bfrtip',
            "buttons": [
                {
                    extend: 'excel',
                    download: 'open'
                },
                {
                    extend: 'pdfHtml5',
                    download: 'open'
                },
                {
                    extend: 'print',
                    download: 'open'
                }
            ]
               
          } );
      } );

    </script>