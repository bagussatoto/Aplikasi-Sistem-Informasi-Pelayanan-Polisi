<?php
session_start();
function timer(){
	$time=9350;
	$_SESSION['timeout']=time()+$time;
}
function auth(){
	$timeout=$_SESSION[timeout];
	if(time()<$timeout){
		timer();
		return true;
	}else{
		unset($_SESSION[timeout]);
		return false;
	}
}
?>
