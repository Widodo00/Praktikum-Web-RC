<?php
$host="localhost";
$user="root";
$password="";
$db="prak7";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
    die("Koneksi gagal:".mysql_connect_error());
}
?>