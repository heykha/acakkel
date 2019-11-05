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
echo "total data mahasiswa = 36 \n";
garis(40);
echo "\nmasukkan jumlah anggota per kelompok : ";
$jumlah = trim(fgets(STDIN)); 
echo "\nprocessing data... \n";
sleep(3);
flush();
$totalkel = 36 / $jumlah;
$tot = $totalkel;
if(36 % $jumlah == 1 ) {
	echo "\n anggota kelompok akan ada yang ganjil, sesuai kesepatakan yang ganjil akan ikut kelompok terakhir\n";
	}
	sleep(2);
garis(30);
echo "\ntotal kelompok = $tot\n";

$data = array("201853010 AHMAD SOFIAN",
"201853054 MUHAMMAD ABDUL KHAFID",
"201853126 SISKA MAY LANI",
"201853006 MARIO ERVAN ARIYANTO",
"201853140 TYHAN TASI'UL CHAKIM",
"201853007 GITALITA PUTRANTI FAHDLI",
"201853101 ARDIAN KARISFIANTO",
"201853096 AINUN RIZQIYAA SABIILAA",
"201853037 Yudi Santoso",
"201853162 ARDIAN ANGGA PRATAMA",
"201853087 PUNGKI PUJIYANTO",
"201853082 KHIRDA LA'ALIYA FIRDAUS",
"201853168 MUHAMMAD AGUS RIYANTO",
"201853027 KHOIRUL UMAM",
"201853080 AGUNG MIFDARYADI",
"201853088 ABDULLAH IBNU HASAN",
"201853001 MOHAMMAD ALAIKA FAUZI",
"201853005 RAHDILLA FAIRUZ SAUFIKA",
"201853002 DEVI PUSPITA SARI",
"201853063 AJI SAKTI PUMANDALA",
"201853158 AJI KURNIAWAN",
"201853008 ANAS BURHANUDDIN",
"201853056 INDAH YUNI RETNONINGTYAS",
"201853070 AGUS RIYANTO",
"201853020 SYARIF HIDAYAT",
"201853105 NUR HASAN ANWAS DANIAL",
"201853067 ABDILLAH KARTIKO",
"201853048 DWI FEBRI ZULFA",
"201853103 ALFIN NUR MUBAROK",
"201853069 WINDA TRIYASNIKA",
"201853139 Yogi  Prasetyo",
"201853157 ADI SULISTIYONO",
"201853161 MUHAMMAD ARIF FAISAL",
"201853055 BRENDAN ANDIKA PRANANDA",
"201853024 KUSDIYANA NURUL MURDIYATI",
"201853013 MUHAMMAD ADIB IQBAL HAQ");
		
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




















