<?php
//include('dbconnected.php');
include('koneksi.php');

$nama = $_GET['nama_bahanbaku'];
$tanggal=$_GET['tanggal'];
$jumlah = $_GET['jumlah'];
$total = $_GET['total'];

//query update
$query = mysqli_query($koneksi,"INSERT INTO `bahanbaku` (`nama_bahanbaku`, `jumlah`, `total`, `tanggal`) VALUES ('$nama_bahanbaku', '$jumlah' , '$total','$tanggal')");

if ($query) {
 # credirect ke page index
 header("location:bahanbaku.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>