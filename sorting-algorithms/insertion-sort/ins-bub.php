<?php

//küçükten büyüğe sıralama denemeleri
function bubblesort(&$arr){
    $n = count($arr);
    $swapped = true;

    while($swapped){
        $swapped = false;
        for($i=0; $i<$n-1; $i++) {
            if($arr[$i] > $arr[$i+1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i+1];
                $arr[$i+1] = $temp;

                $swapped = true;
            }
        }
    }
    return $arr;
}

function insertionSort(&$arr){ 
    $n = count($arr);
    for($i=0; $i<$n; $i++) {
        $key = $arr[$i];
        $j = $i- 1;

        while($j >= 0 && $arr[$j] > $key) {
            $arr[$j+1] = $arr[$j]; 
            $j = $j-1;
        }
        $arr[$j+1] = $key;
    }
}


$arr = array(12,10,5,2);
insertionSort($arr);
//bubbleSort($arr);
print_r ($arr);
?>