<?php
    /** 
     * @param string $s,
     * @return int
    */

    /**
     * her roma rakamını bir dizide sakla
     * input verilen değeri sondan başlayarak döngü içinde işler
     * her karakter için sayısal değeri alır ve bir öncekiyle karşılaştırır
     * işlem sonunda toplam sayısal değer döner
    */

    class Solution {

        /**
         * @param string $s
         * @return int
         */
       function romanToInt($s) {
        $romanValues = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
    
        $total = 0;
        $prevValue = 0;
    
        for ($i = strlen($s) - 1; $i >= 0; $i--) {
            $currentValue = $romanValues[$s[$i]];
            
            if ($currentValue < $prevValue) {
                $total -= $currentValue;
            } else {
                $total += $currentValue;
            }
    
            $prevValue = $currentValue;
        }
    
        return $total;
    }
    
    }

?>