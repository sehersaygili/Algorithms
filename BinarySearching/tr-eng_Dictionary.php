<?php

$dictionary = [
    "apple" => "elma",
    "banana" => "muz",
    "cat" => "kedi",
    "dog" => "köpek",
    "elephant" => "fil" 
];

ksort($dictionary); //alfabetik sıralama

function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr)-1;

    while($left <= $right) {
        $mid = floor(($left + $right) / 2);
        $midWord = array_keys($arr)[$mid];
        if ($midWord === $target) {
            return $arr[$midWord]; 
        } elseif ($midWord < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
}

$searchKey = 'apple';

$translation = binarySearch($dictionary, $searchKey);
echo "İngilizce kelime: " . $searchKey . "\n";
echo "Türkçe anlamı: " . $translation;


?>