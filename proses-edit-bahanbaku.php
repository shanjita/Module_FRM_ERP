<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_bahanbaku'];
$nama = $_GET['nama_bahanbaku'];
$tanggal = $_GET['tanggal'];
$jumlah = $_GET['jumlah'];
$total = $_GET['total'];

//query update
$query = mysqli_query($koneksi,"UPDATE bahanbaku SET nama_bahanbaku='$nama' , jumlah='$jumlah', total='$total', tanggal='$tanggal' WHERE id_bahanbaku='$id' ");

if ($query) {
 # credirect ke page index
 header("location:bahanbaku.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>
