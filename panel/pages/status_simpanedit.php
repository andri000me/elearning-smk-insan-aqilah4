<?php ob_start();
include "../../config/server.php";
$tokenujian = $_POST['tokenujian'];
$statustoken = $_POST['statustoken'];

$query=mysql_query("update cbt_ujian set XStatusToken='$statustoken' where XTokenUjian='$tokenujian'");
header('location:index.php');
?>
