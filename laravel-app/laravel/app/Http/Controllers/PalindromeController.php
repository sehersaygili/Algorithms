<?php

namespace App\Http\Controllers;

class PalindromeController extends Controller
{
    public function checkPalindrome($number) {
        // 121 - 121
        if (!is_numeric($number)) {
            return response()->json(['error' => 'Geçersiz giriş'], 400);
        }
        $originalNumber = $number;
        $reversedNumber = 0;
        while ($number > 0) {
            $reversedNumber = $reversedNumber * 10 + $number % 10;
            $number = intval($number / 10);
        }
        $isPalindrome = $originalNumber == $reversedNumber;

        return response()->json($isPalindrome);
    }
}
