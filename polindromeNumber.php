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
    function isPalindrome($number) {
        if ($number < 0 || ($number % 10 == 0 && $number != 0)) {
            return false;
        }
    
        $originalNumber = $number;  // Orijinal sayıyı sakla
        $reversedNumber = 0;
    
        while ($number > 0) {
            $reversedNumber = $reversedNumber * 10 + $number % 10;
            $number = intval($number / 10);
        }
    
        return $originalNumber === $reversedNumber;
    }


?>