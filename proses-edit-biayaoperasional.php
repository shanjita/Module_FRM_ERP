<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_biayaoperasional'];
$tgl = $_GET['tanggal'];
$nama = $_GET['nama_biaya'];
$jumlah = $_GET['jumlah'];

//query update
$query = mysqli_query($koneksi,"UPDATE biayaoperasional SET tanggal='$tgl' , jumlah='$jumlah' , nama_biaya='$nama' WHERE id_biayaoperasional='$id' ");

if ($query) {
 # credirect ke page index
 header("location:biayaoperasional.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>