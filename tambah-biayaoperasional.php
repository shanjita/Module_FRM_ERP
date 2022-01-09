<?php
//include('dbconnected.php');
include('koneksi.php');

$nama_biaya = $_GET['nama_biaya'];
$tanggal=$_GET['tanggal'];
$jumlah = $_GET['jumlah'];

//query update
$query = mysqli_query($koneksi,"INSERT INTO `biayaoperasional` (`nama_biaya`, `jumlah`, `tanggal`) VALUES ('$nama_biaya', '$jumlah' ,'$tanggal')");

if ($query) {
 # credirect ke page index
 header("location:biayaoperasional.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>