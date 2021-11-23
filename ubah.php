<?php
include "koneksi.php";
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$email=$_POST["email"];
$nomor=$_POST["nomor"];

$sql="UPDATE mahasiswa SET nim='$nim',nama='$nama',prodi='$prodi',email='$email',nomor='$nomor' WHERE nim='$nim'";

$hasil=mysqli_query($kon,$sql);
?>