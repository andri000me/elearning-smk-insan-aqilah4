<?php
include "../../config/server.php";
$pass=$_POST['passbaru'];
$passlama = md5($_POST['passlama']);
$passbaru = md5($_POST['passbaru']);
$konfirmasi = $_POST['konfirmasi'];
$username = $_POST['username'];
$cekuser = "select * from cbt_user where Username = '$username' and Password = '$passlama' and '$konfirmasi' = '$pass'";
$querycekuser = mysql_query($cekuser);
$password=$querycekuser['Password'];
$count = mysql_num_rows($querycekuser);
if ($count > 0){
$updatepassword = "update cbt_user set Password = '$passbaru' where Username = '$username'";
$updatequery = mysql_query($updatepassword);
if($updatequery)
{
echo "Password telah diganti menjadi <b>$pass</b>";
}}else{echo "Variable tidak Sama Perubahan <b>Tidak Berhasil</b>";}


?>