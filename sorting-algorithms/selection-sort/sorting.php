<?php

//küçükten büyüğe sıralama

function selectionSort(&$arr) {
    $n = count($arr);
    for($i=0;$i<$n-1; $i++) {
        $minIndex = $i; //dizinin ilk indexi en küçük alınacak
        for($j=$i+1; $j<$n;$j++) {
            if($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] =$temp;
    }
}

$dizi = [3, 17, 86, 9, 7];
selectionSort($dizi);
print_r($dizi);
?>