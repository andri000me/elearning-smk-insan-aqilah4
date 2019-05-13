<?php ob_start();
 include "../../config/server.php";
 mysql_query("delete from cbt_ujian where Urut='$_GET[urut]'");
 header('location:index.php');
?>