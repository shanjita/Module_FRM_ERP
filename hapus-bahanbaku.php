<?php
//include('dbconnected.php');
include('koneksi.php');

$id = $_GET['id_bahanbaku'];

//query update
$query = mysqli_query($koneksi,"DELETE FROM `bahanbaku` WHERE id_bahanbaku = '$id'");

if ($query) {
 # credirect ke page index
 header("location:bahanbaku.php"); 
}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($koneksi);
}

//mysql_close($host);
?>