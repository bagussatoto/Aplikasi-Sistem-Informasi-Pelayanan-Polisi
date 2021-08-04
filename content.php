<?php
if(!empty($_GET['page'])) {
	if($_GET['page']=="dashboard"){
		include 'dashboard.php';
	}elseif($_GET['page']=="skck"){
		include 'skck.php';
		}elseif($_GET['page']=="tambahskck"){
		include 'tambahskck.php';
		}elseif($_GET['page']=="editskck"){
		include 'editskck.php';
		}elseif($_GET['page']=="stnk"){
		include 'stnk.php';
		}elseif($_GET['page']=="tambahstnk"){
		include 'tambahstnk.php';
		}elseif($_GET['page']=="editstnk"){
		include 'editstnk.php';
		}elseif($_GET['page']=="laporanskck"){
		include 'laporanskck.php';
		}elseif($_GET['page']=="laporanstnk"){
		include 'laporanstnk.php';
		}elseif($_GET['page']=="lprnskck"){
		include 'lprnskck.php';
		}elseif($_GET['page']=="tilang"){
		include 'tilang.php';
		}elseif($_GET['page']=="tambahtilang"){
		include 'tambahtilang.php';
		}elseif($_GET['page']=="edittilang"){
		include 'edittilang.php';
		}elseif($_GET['page']=="keluar"){
		include 'keluar.php';
		}elseif($_GET['page']=="tambahkeluar"){
		include 'tambahkeluar.php';
		}elseif($_GET['page']=="editkeluar"){
		include 'editkeluar.php';
		}elseif($_GET['page']=="dumas"){
		include 'dumas.php';
		}elseif($_GET['page']=="tambahdumas"){
		include 'tambahdumas.php';
		}elseif($_GET['page']=="editdumas"){
		include 'editdumas.php';
		}elseif($_GET['page']=="kehilangan"){
		include 'kehilangan.php';
		}elseif($_GET['page']=="tambahkehilangan"){
		include 'tambahkehilangan.php';
		}elseif($_GET['page']=="editkehilangan"){
		include 'editkehilangan.php';
		}elseif($_GET['page']=="masuk"){
		include 'masuk.php';
		}elseif($_GET['page']=="editmasuk"){
		include 'editmasuk.php';
		}elseif($_GET['page']=="tambahmasuk"){
		include 'tambahmasuk.php';
		}elseif($_GET['page']=="perizinan"){
		include 'perizinan.php';
		}elseif($_GET['page']=="tambahperizinan"){
		include 'tambahperizinan.php';
		}elseif($_GET['page']=="editperizinan"){
		include 'editperizinan.php';
		}elseif($_GET['page']=="cetak_skck"){
		include 'cetak_skck.php';
		}elseif($_GET['page']=="tglindo"){
		include 'tglindo.php';
		}elseif($_GET['page']=="print_tilang"){
		include 'print_tilang.php';
	}
}elseif(empty($_GET['page'])) {
	include 'eror.php';	
}
?>