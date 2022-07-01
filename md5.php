<?php

echo ">==================================<\n";
echo "<          TOOLS MD5               >\n";
echo "<       [1] ENCRYPT MD5            >\n";
echo "<       [2] DECRYPT MD5            >\n";
echo ">==================================<\n";
echo "Muhammad Rafli";
echo "\n";
echo "Pilih [1] or [2] : ";
$pilihan = trim(fgets(STDIN));
if ($pilihan == '1') {
	echo "Tulis Disini : ";
	$hash = trim(fgets(STDIN));
	echo "Hasilnya : [ ".md5($hash)." ]\n";
}if ($pilihan == '2') {
	echo "Paste Text Encryptnya : ";
	$pass = trim(fgets(STDIN));
	$hasil = file_get_contents("http://www.nitrxgen.net/md5db/".$pass);
	echo "RESULT : [ ".$hasil." ]\n";
}

?>
