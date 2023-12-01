<?php
    class Solution {
        //x girilen karakter
        public function isValid($x) {
            $stack = [];
            $array = [
                ')' => '(',
                '}' => '{',
                ']' => '['
            ];

            for($i = 0; $i < strlen($x); $i++) {
                $char = $x[$i]; // stringin o an ki karakteri

                if(array_key_exists($char, $array)) {
                    $topElement = empty($stack) ?'#' : array_pop($stack);
                    if($array[$char] != $topElement) {
                        return false;
                    } else {
                        array_push($stack, $char);
                    }
                }
                return empty($stack);
            }
         }
    }

?>