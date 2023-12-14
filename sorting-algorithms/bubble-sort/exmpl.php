<?php

function bubbleSort($arr) {
    $n = count($arr); //array elemanları sayısı
    $swapped = true; //swapped : takas etmek

    while($swapped) {
        $swapped = false;
        for( $i = 0; $i < $n-1; $i++ ) { //tüm diziyi dolaşıyoruz
            if($arr[$i]> $arr[$i+1]) {
                //elemanları yer değiştir
                $temp = $arr[$i];
                $arr[$i] = $arr[$i+1];  
                $arr[$i+1] = $temp;

                $swapped = true; 
            }
        }
    }
    return $arr;



}
$myArray = [2,9,12,3,6,20];
echo " Dizi: " . implode(", ", $myArray) . "\n";

$sortedArray = bubbleSort($myArray);
echo "Sıralanmış Dizi: " . implode(", ", $sortedArray) . "\n";


?>