<?php
include "../../config/server.php";
if(!isset($_COOKIE['beeuser'])){
header("Location: login.php");}

//Membuat DATABASE//
if (!$db_selected) {$sql = 'CREATE DATABASE'.' '. $db;	 if (mysql_query($sql, $sqlconn)) { } else { }}
$filename = '../../config/'.$teks3.'.sql';
$mysql_database = $db;
mysql_select_db($mysql_database) or die('Error selecting MySQL database: ' . mysql_error());
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysql_query($templine);// or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
header('location:../pages/login.php');
 //echo "Tables imported successfully";
?>