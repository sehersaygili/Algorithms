<?php 

//string kelimeleri alfabetik sırala
function sortingBubble($arr) {
    $n = count($arr); // dizideki toplam eleman sayısı
    $swapped = true;

    while( $swapped =true) {
        for($i = 0; $i < $n-1; $i++){
            if($arr[$i] > $arr[$i+1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i+1];
                $arr[$i + 1] = $temp;
            }
            $swapped = false;
        }
    }
    return $arr;
}

$sortedArray = ["deneme", "seher", "kalem"];
echo "Sıralanmış Dizi: " . implode(", ", $sortedArray) . "\n";


?>