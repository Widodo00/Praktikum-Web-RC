<?php
include "koneksi.php";
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$email=$_POST["email"];
$nomor=$_POST["nomor"];

$sql="insert into mahasiswa (nim,nama,prodi,email,nomor) values('$nim','$nama','$prodi','$email','$nomor')";

$hasil=mysqli_query($kon,$sql);
?>