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

$unique   = [];
/**
 * Selection for exist the same value in array
 * to make unique value in array
 */
foreach($input as $result){
    if(!in_array($result,$unique)){
        $unique[]     = $result;
    }
}

$array  = $unique;

for( $i=0; $i < count($array); $i++ ){
    for( $j=0; $j < $i; $j++){
        if( $array[$j] < $array[$i] ){
            $temp       =  $array[$i]; //swapping values
            $array[$i]  = $array[$j];
            $array[$j]  = $temp;
        }
    }
}
echo "-------------------------------------------------- \r\n";
echo "Array yang di masukkan : ".json_encode($input)."\r\n";
echo "Hasil terbeser ke 2 : ".((!isset($array[1])) ? $array[0] : $array[1])."\r\n";
echo "-------------------------------------------------- \r\n";

fclose($handle);
echo "\n"; 
echo "Terima Kasih\n";

