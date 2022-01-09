<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_biayaoperasional'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `biayaoperasional` WHERE id_biayaoperasional = '$id'");

if ($query) {
 # credirect ke page index
 header("location:biayaoperasional.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>