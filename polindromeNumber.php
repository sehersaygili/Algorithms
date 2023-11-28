<?php
/*
 * @param int $x kontrol edilecek sayı
 * @return Boolean eğer x polindrome ise true döner
*/

function isPolindrome($x) {
    $strNumber = strval($x); //x stringe çevrilecek
    $reversedNumber = strrev($strNumber); 

    return $strNumber === $reversedNumber;
}

function polindrome($number) {
    //0 hariç 10 un katları ve negatif sayıları polindrome olamaz..
    if($number < 0 || ($number %10 == 0 && $number != 0)) {
        return false;
    }
    $reversedNumber = 0;
    while($number > $reversedNumber) {
        //bir sayının birler basamağını bulmak için number % 10 alınır.
        $reversedNumber = $reversedNumber * 10 + $number % 10; 
        $number = intval($number / 10);
    }
    return $number == $reversedNumber || $number == intval($reversedNumber / 10);
}
?>