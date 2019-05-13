<?php
	include "server.php";
	$sql = mysql_query("select * from cbt_server_pusat");
	$adm = mysql_fetch_array($sql);
	$username = $adm['XUserName'];
	$xpasswdr = substr($adm['XPassword'],0,-1);
	$xpasswdl = substr($xpasswdr,1);
	$passwd = base64_decode(base64_decode($xpasswdl));
	$dbms = $adm['XDatabase'];
	$hostname = $adm['XHostName'];
	$statusmode = $adm['XStatusMode'];
	$koneksi_ = $adm['XKoneksi'];
	if($koneksi_=="lan"){
	$koneksi="0";
	}elseif($koneksi_=="internet"){
	$koneksi="1";
	}
?>