<?php
//random sayı üret diziye ata
function generateRandomArray($boyut = 10, $maxdeger = 100) {
    $array = [];
    for($i = 0; $i< $boyut; $i++ ) {
        $array[] = rand(1, $maxdeger);
    }
    return $array;
}

//diziye atanan değerleri bubble sort ile sırala
function bubble($arr) {
    $n = count($arr);
    $swappped =true;

    while($swappped) {
        for($i=0; $i<$n-1; $i++) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$i+1];
            $arr[$i+1] =$temp;

            $swappped = false;
        }
    }
    echo "Adım " . ($i + 1) . ": " . implode(', ', $arr) . "<br>";

    return $arr;
    

}

$dizi = generateRandomArray();
bubble($dizi);
?>