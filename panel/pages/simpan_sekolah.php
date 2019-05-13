
<?php 
include "../../config/server.php";
if($_REQUEST['aksi']=="simpan1"){
$sqlcek = mysql_query("select * from server_sekolah where Urut = '$_REQUEST[Urut]'");
$sta = mysql_fetch_array($sqlcek);
$status= $sta['XStatus'];

if($status=="1"){ $ubah = "0"; } 
	elseif($status=="0"){ $ubah = "1"; } 
	
$sqlpasaif = mysql_query("update server_sekolah set XStatus = '$ubah' where Urut = '$_REQUEST[Urut]'");

	
	?>