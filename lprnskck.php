        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <style>
                                @media print{
                                    .kebangsaan, .ktp, .riwayat_sekolah, .masa {
                                        display: none;
                                    }
                                }
                            </style>

<!-- <body onload="window.print ()">
 -->

<tr><td colspan=8 color="#FFF000"><center>Polsekta Samarinda Utara</center></td></tr>
<tr><td colspan=8 ><center>LAPORAN DATA SKCK POLSEKTA SAMARINDA UTARA</center></td></tr>
<tr><td colspan=8 ><center>Jl. D.I Panjaitan No. 46 Samarinda Utara</center></td></tr>
<tr><td colspan=8 ><center>=======================================================</center></td></tr>

<table id="myTable"  width="100%" border="1" cellpadding="8" cellspacing="0">
    <thead style="background-color: salmon;">   

<th>No</th> 
<th>Nama</th>
<th>Jenis Kelamin</th>
<th class="kebangsaan">Kebangsaan </th>
<th>Agama</th>
<th>Tempat/ Tanggal Lahir</th>
<th>Alamat</th>
<th>Pekerjaan</th>
<th class="ktp">No KTP</th>
<th>Keperluan</th>
<th class="riwayat_sekolah">Riwayat Sekolah</th>
<th>Keterangan</th>
<th class="masa">Masa Berlaku</th>
</thead>
<tbody> 
<?php
include"koneksi.php";
$sql = mysql_query("SELECT * FROM tbl_skck ORDER BY id_skck");
$no=1;
?>
<tr bgcolor='#FFF'>
<td align='center'> <?php echo $no; ?> </td>
<td align='left'> <?php echo $row['nama']; ?></td>
<td align='left'> <?php echo $row['jenis_kelamin']; ?> </td>
<td class="kebangsaan" align='left'> <?php echo $row['kebangsaan']; ?> </td>
<td align='left'> <?php echo $row['agama']; ?> </td>
<td align='left'><?php echo $row['tmp_lahir']; ?>/ <?php echo TanggalIndo($row['tgl_lahir']);?> </td>
<td align='left'> <?php echo $row['alamat']; ?>  </td>
<td align='left'> <?php echo $row['pekerjaan']; ?>  </td>
<td class="ktp" align='center'> <?php echo $row['no_ktp']; ?>  </td>
<td align='center'> <?php echo $row['keperluan']; ?>  </td>
<td class="riwayat_sekolah" align='center'> <?php echo $row['riwayat_sekolah']; ?>  </td>

<td class="masa" align='left'> <?php echo TanggalIndo($row['masa']);?>  </td>
</tr>
<?php
$no++;

?>
</tbody>
</table>
<br>
<br>
<table>
<td>
<tr>Samarinda Utara,<?php echo date('d - M - Y'); ?></tr><br>
<tr>        Ttd         </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>                    </tr><br>
<tr>      Ervin Suryatna, M.Si     </tr>
</td>
</table>

</div>
</div>
</div>
</div>