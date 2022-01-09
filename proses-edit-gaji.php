<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_pengeluaran'];
$tgl = $_GET['tgl_pengeluaran'];
$jumlah = $_GET['jumlah'];

//query update
$query = mysqli_query($koneksi,"UPDATE gaji SET tgl_pengeluaran='$tgl' , jumlah='$jumlah' WHERE id_pengeluaran='$id' ");

if ($query) {
 # credirect ke page index
 header("location:gaji.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>