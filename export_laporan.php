<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data_HargaPokokProduksi.xls");
	?>
	<h3>Data Bahan Baku</h3>    
	<table border="1" cellpadding="5"> 
	<tr>    
	<th>No </th>
    <th>Nama Bahan Baku</th>
    <th>Tanggal</th>    
    <th>Jumlah</th> 
    <th>Total</th> 
	</tr>  
	<?php  
	// Load file koneksi.php  
	include "koneksi.php";    
	// Buat query untuk menampilkan semua data siswa 
$query = mysqli_query($koneksi, "SELECT * FROM bahanbaku ");
	// Untuk penomoran tabel, di awal set dengan 1 
	while($data = mysqli_fetch_array($query)){ 
	// Ambil semua data dari hasil eksekusi $sql 
	echo "<tr>";    
	echo "<td>".$data['id_bahanbaku']."</td>";   
    echo "<td>".$data['nama_bahanbaku']."</td>";    
    echo "<td>".$data['tanggal']."</td>";  
    echo "<td>".$data['jumlah']."</td>";        
    echo "<td>".$data['total']."</td>";  
	echo "</tr>";        
	}  ?></table>
	<br>
	<br>
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
    <br>
	<br>
    <h3>Data Biaya Operasional</h3>    
	<table border="1" cellpadding="5"> 
	<tr>    
	<th>No</th>
    <th>Nama Biaya Operasional</th>
    <th>Tanggal</th>    
	<th>Jumlah</th> 
	</tr>  
	<?php  
	// Load file koneksi.php  
	include "koneksi.php";    
	// Buat query untuk menampilkan semua data siswa 
$query = mysqli_query($koneksi, "SELECT * FROM biayaoperasional");
	// Untuk penomoran tabel, di awal set dengan 1 
	while($data = mysqli_fetch_array($query)){ 
	// Ambil semua data dari hasil eksekusi $sql 
	echo "<tr>";    
	echo "<td>".$data['id_biayaoperasional']."</td>";   
	echo "<td>".$data['nama_biaya']."</td>";    
	echo "<td>".$data['tanggal']."</td>";    
	echo "<td>".$data['jumlah']."</td>";      
	echo "</tr>";        
	}  ?></table>