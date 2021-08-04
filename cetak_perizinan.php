<style type="text/css">
  @media print{
    input.wkwk{display: none;}
  }
  @page{
    size: auto;
    margin: 0mm;
  }
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title class="wkwk">Print Data Surat Tugas</title>
<body onLoad="window.print()">
	
<?php
error_reporting(0);
session_start();
include "koneksi.php"; 
include "tglindo.php"; 
$id_perizinan=$_GET['id'];
            $data=mysqli_query($con, "SELECT * FROM tbl_perizinan WHERE id_perizinan='$id_perizinan'");
            $data=mysqli_fetch_array($data);
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img src='img/polri.png' width='85px'></td>
</tr> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>POLRI DAERAH RIAU<br>
         RESOR SIAK <br> SEKTOR SABAK AUH </h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. Lintas Siak - Pakning Belading, 28664 </p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>SURAT KETERANGAN PERIZINAN </h3></td>
</tr> 
<tr>
    <td align="center"><p>Nomor : 00<?php echo "$data[id_perizinan]"; ?>/198/TRANTIB/309.07/VIII/2019</p></td>
</tr> 
</table>

<br>


<table width='50%' align="center">
<tr>
<td width="5%">1</td>
<td width="30%">Nama Lengkap</td>
<td width="65%">: <?php echo "$data[no_surat]";?></td>
</tr>

<tr>
<td>2</td>
<td>Tanggal</td>
<td>:<?php echo TanggalIndo($data['tanggal']);?></td>
</tr>
<tr>
<td>3</td>
<td>Waktu </td>
<td>: <?php echo "$data[waktu]";?></td>
</tr>
<tr>
<td>4</td>
<td>Kegiatan</td>
<td>: <?php echo "$data[kegiatan]";?></td>
</tr>
<tr>
<td>5</td>
<td>Tempat</td>
<td>: <?php echo "$data[tempat]";?></td>
</tr>
<tr>
<td>6</td>
<td>Pemohon</td>
<td>: <?php echo "$data[pemohon]";?></td>
</tr>
<tr>
</table>


<table width=100%>
  <tr>
    <td width="30%">
    </td>

    <td width="30%">

    </td>

    <td >
       
        <table>
            
            <tr>
              <td>Sabak Auh,</td>
              <td> <?php echo date("d M Y"); ?></td></tr>
        </table><br>
        <center>
          KEPALA KEPOLISIAN SABAK AUH<br>KAPOLSEK<br><br><br>

          <u>ISWANDI, SH</u><br>
         
          IPTU NRP 73010539
        </center>
    </td>
  </tr>
</table> 
</body>