<?php
include "koneksi.php";
$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$angkatan=$_POST["angkatan"];

$sql="UPDATE mahasiswa SET nim='$nim',nama='$nama',prodi='$prodi',angkatan='$angkatan' WHERE nim='$nim'";

$hasil=mysqli_query($kon,$sql);
?>