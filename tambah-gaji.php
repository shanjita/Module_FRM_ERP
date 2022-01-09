<?php
//include('dbconnected.php');
include('koneksi.php');

$tgl_pengeluaran = $_GET['tgl_pengeluaran'];
$jumlah = $_GET['jumlah'];

//query update
$query = mysqli_query($koneksi,"INSERT INTO `gaji` (`tgl_pengeluaran`, `jumlah`) VALUES ('$tgl_pengeluaran', '$jumlah')");

if ($query) {
 # credirect ke page index
 header("location:gaji.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>