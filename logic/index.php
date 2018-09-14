<?php 
echo "| ---------------------------------------------- | \r\n";
echo "| Technical Test Backend Enginer - DOT Indonesia | \r\n";
echo "| Struktur data & Logic                          | \r\n";
echo "| ---------------------------------------------- | \r\n";
echo "\r\n";
echo "Masukkan nilai array contoh '1,4,5,2,3' separated by comma : \r\n";
$handle = fopen ("php://stdin","r");
$line   = fgets($handle);

$input  = (!trim($line)) ? [ 2, 1, 6, 9, 9, 4, 3] : explode(',',trim($line));
$array  = array_unique($input);
rsort($array);
echo "-------------------------------------------------- \r\n";
echo "Array yang di masukkan : ".json_encode($input)."\r\n";
echo "Hasil terbeser ke 2 : ".((!isset($array[1])) ? $array[0] : $array[1])."\r\n";
echo "-------------------------------------------------- \r\n";

fclose($handle);
echo "\n"; 
echo "Terima Kasih\n";