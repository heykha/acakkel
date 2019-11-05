<?php
function garis($jum) {
	for ($i=0; $i<= $jum; $i++) {
		echo "=";
		}
}
echo '####################################';
echo "\r\n";
echo '\r# Copyright : @systkha - Abdul Khafid#';
echo "\r\n";
echo '####################################';
echo "\r\n";
echo '####################################';
echo " \n\t[x] PILIH DATA KELAS [x]\n\t 1. SI NON REGULER";
echo "\n [?] Masukkan Nomor Kelas : ";
$pilih = trim(fgets(STDIN)); 
echo '####################################';
echo "\nWait for load data...\n";
sleep(2);
garis(40);
echo "\nmasukkan jumlah anggota per kelompok : ";
$jumlah = trim(fgets(STDIN)); 
echo "\nprocessing data... \n";
sleep(3);
flush();
$totalkel = 36 / $jumlah; // 36 ganti dengan jumlah data / array kalian
$tot = $totalkel;
if(36 % $jumlah == 1 ) { // 36 ganti juga
	echo "\n anggota kelompok akan ada yang ganjil, sesuai kesepatakan yang ganjil akan ikut kelompok terakhir\n";
	}
	sleep(2);
garis(30);
echo "\ntotal kelompok = $tot\n";

$data = array("nama mahasiswa 1", "nama mahasiswa 2", "nama mahasiswa 3"); // sesuaikan dengan array kalian ( nama mahasiwa2 dikelas)
		
for ($i = 0; $i<$tot; $i++){
	garis(30);
	echo "\nkelompok ke $i\n";
	garis(30);
	for ( $ii = 0; $ii<$jumlah; $ii++) {
shuffle($data);
$hasil = array_shift($data);
sleep(1);
flush();
echo "\n$ii > $hasil\n";
}
}
?>
