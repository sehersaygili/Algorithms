<?php
    function generateRandomArray($size = 10, $max = 100) {
        $array = [];
        for($i=0; $i<=$size; $i++) {
            $array[] = rand(1, $max);
        }
        return $array;
    }

    function insertionSort(&$arr) {
        $n = count ($arr);
        for($i= 0; $i<$n; $i++) {
            $key = $arr[$i];
            $j = $i - 1;

            while($j >= 0 && $arr[$j] > $key) {
                $arr[$j+1] = $arr[$j];
                $j = $j - 1;
            }
            $arr[$j+1] = $key;
        }
    }
   

    $dizi = generateRandomArray();
    insertionSort($dizi);
    print_r($dizi);
?>