<?php
    class Solution {
        //x girilen karakter
        public function isValid($x) {
            // dönen çift değilse false döndürülmesi gerek
            if(strlen($x) % 2 !== 0){
                return false;
            } 

            //yığın oluştur
            $stack = [];

            //karakterleri ayırmak gerek
            $x_arr = str_split($x);
            
        }

    }
    $solution = new Solution();
    echo $solution->isValid("{}") ? "true" : "false";
    
?>