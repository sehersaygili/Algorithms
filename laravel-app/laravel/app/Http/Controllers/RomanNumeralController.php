<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RomanNumeralController extends Controller
{
    public function convertToInteger($number) {


        $romanValues = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];
    
        $total = 0;
        $prevValue = 0;
    
        for ($i = strlen($number) - 1; $i >= 0; $i--) {
            $currentValue = $romanValues[$number[$i]];
    
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