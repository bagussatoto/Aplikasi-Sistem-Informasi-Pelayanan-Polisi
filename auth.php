<?php
include "koneksi.php";

$user = $_POST["username"];
$pass = sha1($_POST["password"]);


$qry = mysqli_query($con, "SELECT * from user where username ='$user' and password='$pass'");
 $ada = mysqli_num_rows($qry);
 $data = mysqli_fetch_array($qry);
 $id = $data['id'];

 echo $data['id'];

 if ($ada > 0){
 	session_start ();
 	$_SESSION ['id'] = $id;
 	header ("location: media.php?page=dashboard");
 }else {
 	echo"Login Gagal";


 }




?>