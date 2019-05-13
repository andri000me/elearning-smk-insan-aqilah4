<?php
include "../../config/server.php";
$passlama = $_POST['passlama'];
$passbaru = $_POST['passbaru'];
$konfirmasi = $_POST['konfirmasi'];
$username = $_POST['username'];
$cekuser = "select * from cbt_siswa where XNomerUjian = '$username' and XPassword = '$passlama' and '$konfirmasi' = '$passbaru'";
$querycekuser = mysql_query($cekuser);
$password=$querycekuser['XPassword'];
$count = mysql_num_rows($querycekuser);
if ($count > 0){
$updatepassword = "update cbt_siswa set XPassword = '$passbaru' where XNomerUjian = '$username'";
$updatequery = mysql_query($updatepassword);
if($updatequery)
{
echo "Password telah diganti menjadi <b>$passbaru</b>";
}}else{echo "Variable tidak Sama Perubahan <b>Tidak Berhasil</b>";}


?>