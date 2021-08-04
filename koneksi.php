<?php 
$serv = "localhost";
$user = "root";
$pass = "";
$db = "db_sispol"; 

$con = mysqli_connect($serv, $user, $pass); 
mysqli_select_db($con, $db);

if ($con) {
	echo " ";
}

function showdata($con, $sql) {
	$query = mysqli_query($con, $sql);
	$rows = array();
	while ($result = mysqli_fetch_assoc($query)) {
	$rows[] = $result; 
	}
	return $rows;
}

function tambahskck($con, $data) {
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);
	$data['keperluan'] = htmlspecialchars($data['keperluan']);
	$data['riwayat_sekolah'] = htmlspecialchars($data['riwayat_sekolah']);
	$data['keterangan'] = htmlspecialchars($data['keterangan']);

	$nama =& $data['nama'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$agama =& $data['agama'];
	$alamat =& $data['alamat'];
	$pekerjaan =& $data['pekerjaan'];
	$keperluan =& $data['keperluan'];
	$riwayat_sekolah =& $data['riwayat_sekolah'];
	$keterangan =& $data['keterangan'];

	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_skck (nama, jenis_kelamin, tmp_lahir, tgl_lahir, agama, alamat, pekerjaan, keperluan, riwayat_sekolah, keterangan)
	 			VALUES('$nama', '$jenis_kelamin', '$tmp_lahir', '$tgl_lahir', '$agama', '$alamat', '$pekerjaan', '$keperluan', '$riwayat_sekolah', '$keterangan')")) {
	return false;
	}
	return true;
}
function editskck($con, $data) {
	$data['id_skck'] = htmlspecialchars($data['id_skck']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);
	$data['keperluan'] = htmlspecialchars($data['keperluan']);
	$data['riwayat_sekolah'] = htmlspecialchars($data['riwayat_sekolah']);
	$data['keterangan'] = htmlspecialchars($data['keterangan']);

	$id_skck =& $data['id_skck'];
	$nama =& $data['nama'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$agama =& $data['agama'];
	$alamat =& $data['alamat'];
	$pekerjaan =& $data['pekerjaan'];
	$keperluan =& $data['keperluan'];
	$riwayat_sekolah =& $data['riwayat_sekolah'];
	$keterangan =& $data['keterangan'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_skck SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', agama = '$agama', alamat = '$alamat', pekerjaan = '$pekerjaan', keperluan = '$keperluan', riwayat_sekolah = '$riwayat_sekolah', keterangan = '$keterangan' WHERE id_skck = $id_skck")) {
	return false;
	}
	return true;
}
function tambahtilang($con, $data) {
	$data['no_registrasi'] = htmlspecialchars($data['no_registrasi']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$no_registrasi =& $data['no_registrasi'];
	$nama =& $data['nama'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_tilang (no_registrasi, nama, alamat)
	 			VALUES('$no_registrasi', '$nama', '$alamat')")) {
	return false;
	}
	return true;
}
function edittilang($con, $data) {
	$data['id_tilang'] = htmlspecialchars($data['id_tilang']);
	$data['no_registrasi'] = htmlspecialchars($data['no_registrasi']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$id_tilang =& $data['id_tilang'];
	$no_registrasi =& $data['no_registrasi'];
	$nama =& $data['nama'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_tilang SET no_registrasi = '$no_registrasi', nama = '$nama', alamat = '$alamat' WHERE id_tilang = $id_tilang")) {
	return false;
	}
	return true;
}
function tambahsuratkeluar($con, $data) {
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['tujuan_surat'] = htmlspecialchars($data['tujuan_surat']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$perihal =& $data['perihal'];
	$tujuan_surat =& $data['tujuan_surat'];
	$lampiran =& $data['lampiran'];

	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_suratkeluar (no_surat, tanggal, perihal, tujuan_surat, lampiran)
	 			VALUES('$no_surat', '$tanggal', '$perihal', '$tujuan_surat', '$lampiran')")) {
	return false;
	}
	return true;
}
function editsuratkeluar($con, $data) {
	$data['id_srtkeluar'] = htmlspecialchars($data['id_srtkeluar']);
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['tujuan_surat'] = htmlspecialchars($data['tujuan_surat']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$id_srtkeluar =& $data['id_srtkeluar'];
	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$perihal =& $data['perihal'];
	$tujuan_surat =& $data['tujuan_surat'];
	$lampiran =& $data['lampiran'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_suratkeluar SET no_surat = '$no_surat', tanggal = '$tanggal', perihal = '$perihal', tujuan_surat = '$tujuan_surat', lampiran = '$lampiran' WHERE id_srtkeluar = $id_srtkeluar")) {
	return false;
	}
	return true;
}

function tambahdumas($con, $data) {
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['umur'] = htmlspecialchars($data['umur']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$nama =& $data['nama'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$umur =& $data['umur'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$pekerjaan =& $data['pekerjaan'];
	$agama =& $data['agama'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_dumas (nama, tmp_lahir, tgl_lahir, umur, jenis_kelamin, pekerjaan, agama, alamat)
	 			VALUES('$nama', '$tmp_lahir', '$tgl_lahir', '$umur', '$jenis_kelamin', '$pekerjaan', '$agama', '$alamat')")) {
	return false;
	}
	return true;
}

function editdumas($con, $data) {
	$data['id_dumas'] = htmlspecialchars($data['id_dumas']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['umur'] = htmlspecialchars($data['umur']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$id_dumas =& $data['id_dumas'];
	$nama =& $data['nama'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$umur =& $data['umur'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$pekerjaan =& $data['pekerjaan'];
	$agama =& $data['agama'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_dumas SET nama = '$nama', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', umur = '$umur', jenis_kelamin = '$jenis_kelamin', pekerjaan = '$pekerjaan', agama = '$agama', alamat = '$alamat' WHERE id_dumas = $id_dumas")) {
	return false;
	}
	return true;
}

function tambahlprnkehilangan($con, $data) {
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['keterangan'] = htmlspecialchars($data['keterangan']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$nama =& $data['nama'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$pekerjaan =& $data['pekerjaan'];
	$agama =& $data['agama'];
	$keterangan =& $data['keterangan'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_lprnkehilangan (nama, jenis_kelamin, tmp_lahir, tgl_lahir, pekerjaan, agama, keterangan, alamat)
	 			VALUES('$nama', '$jenis_kelamin', '$tmp_lahir', '$tgl_lahir', '$pekerjaan', '$agama', '$keterangan', '$alamat')")) {
	return false;
	}
	return true;
}


function editlprnkehilangan($con, $data) {
	$data['id_lprnkehilangan'] = htmlspecialchars($data['id_lprnkehilangan']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['ttl'] = htmlspecialchars($data['ttl']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['keterangan'] = htmlspecialchars($data['keterangan']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$id_lprnkehilangan =& $data['id_lprnkehilangan'];
	$nama =& $data['nama'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$ttl =& $data['ttl'];
	$pekerjaan =& $data['pekerjaan'];
	$agama =& $data['agama'];
	$keterangan =& $data['keterangan'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_lprnkehilangan SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', tmp_lahir = '$tmp_lahir', ttl = '$ttl', pekerjaan = '$pekerjaan', agama = '$agama', keterangan = '$keterangan',   alamat = '$alamat' WHERE id_lprnkehilangan = $id_lprnkehilangan")) {
	return false;
	}
	return true;
}
function tambahperizinan($con, $data) {
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['waktu'] = htmlspecialchars($data['waktu']);
	$data['kegiatan'] = htmlspecialchars($data['kegiatan']);
	$data['tempat'] = htmlspecialchars($data['tempat']);
	$data['pemohon'] = htmlspecialchars($data['pemohon']);

	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$waktu =& $data['waktu'];
	$kegiatan =& $data['kegiatan'];
	$tempat =& $data['tempat'];
	$pemohon =& $data['pemohon'];
	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_perizinan (no_surat, tanggal, waktu, kegiatan, tempat, pemohon)
	 			VALUES('$no_surat', '$tanggal', '$waktu', '$kegiatan', '$tempat', '$pemohon')")) {
	return false;
	}
	return true;
}
function editperizinan($con, $data) {
	$data['id_perizinan'] = htmlspecialchars($data['id_perizinan']);
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['waktu'] = htmlspecialchars($data['waktu']);
	$data['kegiatan'] = htmlspecialchars($data['kegiatan']);
	$data['tempat'] = htmlspecialchars($data['tempat']);
	$data['pemohon'] = htmlspecialchars($data['pemohon']);

	$id_perizinan =& $data['id_perizinan'];
	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$waktu =& $data['waktu'];
	$kegiatan =& $data['kegiatan'];
	$tempat =& $data['tempat'];
	$pemohon =& $data['pemohon'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_perizinan SET no_surat = '$no_surat', tanggal = '$tanggal', waktu = '$waktu', kegiatan = '$kegiatan', tempat = '$tempat', pemohon = '$pemohon' WHERE id_perizinan = $id_perizinan")) {
	return false;
	}
	return true;
}
function tambahkehilangan($con, $data) {
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['keterangan'] = htmlspecialchars($data['keterangan']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$nama =& $data['nama'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$pekerjaan =& $data['pekerjaan'];
	$agama =& $data['agama'];
	$keterangan =& $data['keterangan'];
	$alamat =& $data['alamat'];
	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_kehilangan (nama, jenis_kelamin, tmp_lahir, tgl_lahir, pekerjaan, agama, keterangan, alamat)
	 			VALUES('$nama', '$jenis_kelamin', '$tmp_lahir', '$tgl_lahir', '$pekerjaan', '$agama', '$keterangan', '$alamat')")) {
	return false;
	}
	return true;
}
function editkehilangan($con, $data) {
	$data['id_kehlangan'] = htmlspecialchars($data['id_kehilangan']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['keterangan'] = htmlspecialchars($data['keterangan']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$id_kehilangan =& $data['id_kehilangan'];
	$nama =& $data['nama'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$pekerjaan =& $data['pekerjaan'];
	$agama =& $data['agama'];
	$keterangan =& $data['keterangan'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_kehilangan SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', pekerjaan = '$pekerjaan', agama = '$agama', keterangan = '$keterangan', alamat = '$alamat' WHERE id_kehilangan = $id_kehilangan")) {
	return false;
	}
	return true;
}
function tambahmasuk($con, $data) {
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['pengirim'] = htmlspecialchars($data['pengirim']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$pengirim =& $data['pengirim'];
	$perihal =& $data['perihal'];
	$lampiran =& $data['lampiran'];
	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_masuk (no_surat, tanggal, pengirim, perihal, lampiran)
	 			VALUES('$no_surat', '$tanggal', '$pengirim', '$perihal', '$lampiran')")) {
	return false;
	}
	return true;
}
function editmasuk($con, $data) {
	$data['id_masuk'] = htmlspecialchars($data['id_masuk']);
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['pengirim'] = htmlspecialchars($data['pengirim']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$id_masuk =& $data['id_masuk'];
	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$pengirim =& $data['pengirim'];
	$perihal =& $data['perihal'];
	$lampiran =& $data['lampiran'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_masuk SET no_surat = '$no_surat', tanggal = '$tanggal', pengirim = '$pengirim', perihal = '$perihal', lampiran = '$lampiran' WHERE id_masuk = $id_masuk")) {
	return false;
	}
	return true;
}
function tambahkeluar($con, $data) {
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['tujuan_surat'] = htmlspecialchars($data['tujuan_surat']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$perihal =& $data['perihal'];
	$tujuan_surat =& $data['tujuan_surat'];
	$lampiran =& $data['lampiran'];
	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_keluar (no_surat, tanggal, perihal, tujuan_surat, lampiran)
	 			VALUES('$no_surat', '$tanggal', '$perihal', '$tujuan_surat', '$lampiran')")) {
	return false;
	}
	return true;
}
function editkeluar($con, $data) {
	$data['id_keluar'] = htmlspecialchars($data['id_keluar']);
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['tujuan_surat'] = htmlspecialchars($data['tujuan_surat']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$id_keluar =& $data['id_keluar'];
	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$perihal =& $data['perihal'];
	$tujuan_surat =& $data['tujuan_surat'];
	$lampiran =& $data['lampiran'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_keluar SET no_surat = '$no_surat', tanggal = '$tanggal', perihal = '$perihal', tujuan_surat = '$tujuan_surat', lampiran = '$lampiran' WHERE id_keluar = $id_keluar")) {
	return false;
	}
	return true;
}

function hapus($con, $table, $row_id, $id) {
	if(!$query = mysqli_query($con, "DELETE FROM $table where `$row_id` = '$id'")) {
		return false;
	}
	return true;
}

