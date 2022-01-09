<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_Gaji.xls");
	?>
	<h3>Data Gaji</h3>    
	<table border="1" cellpadding="5"> 
	<tr>    
	<th>No </th>
    <th>Tanggal Pembayaran</th>
    <th>Jumlah</th>    
	</tr>  
	<?php  
	// Load file koneksi.php  
	include "koneksi.php";    
	// Buat query untuk menampilkan semua data siswa 
$query = mysqli_query($koneksi, "SELECT * FROM gaji");
	// Untuk penomoran tabel, di awal set dengan 1 
	while($data = mysqli_fetch_array($query)){ 
	// Ambil semua data dari hasil eksekusi $sql 
	echo "<tr>";    
	echo "<td>".$data['id_pengeluaran']."</td>";   
	echo "<td>".$data['tgl_pengeluaran']."</td>";    
	echo "<td>".$data['jumlah']."</td>";        
	echo "</tr>";        
	}  ?></table>