<?php 
$koneksi = mysqli_connect("localhost","root","","e_surat");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>