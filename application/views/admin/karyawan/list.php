<?php 

foreach ($karyawan as $karyawan) {
	echo $karyawan->id_karyawan;
	echo ' ';
	echo $karyawan->nama_karyawan;
	echo ' ';
	echo $karyawan->alamat_karyawan;
	echo ' ';
	echo $karyawan->telpon_karyawan;
	echo '<br>';

}

?>