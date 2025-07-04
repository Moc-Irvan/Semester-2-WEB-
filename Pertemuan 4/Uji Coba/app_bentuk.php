<?php
require_once 'lingkaran.php';

$lingkaran1 = new Lingkaran(8.4);
$lingkaran2 = new Lingkaran(10);
echo "jari-jari lingkaran 1 = ".$lingkaran1->jari;
echo "<br>Nilai PHI " . Lingkaran::PHI;
echo "<br>Luasnya ".$lingkaran1->getluas();
echo "<br>kelilingnya ".$lingkaran1->getkeliling();
echo "<hr>";
$lingkaran1->cetak();
echo "<hr>";
$lingkaran2->cetak();

?>