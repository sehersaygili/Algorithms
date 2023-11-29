<?php

function longestCommonPrefix($strs) {
    // eğer bir ön ek yoksa veya sayı yoksa "" gelecek
    if(count($strs) == 0)return "";
    
    $prefix = $strs[0]; //kelimenin ilk ön eki $prefix
    for($i = 1; $i<=count($strs); $i++) { //kelime harfleri sayısı kadar döndür
        while(strpos($strs[$i],$prefix) !== 0) { //
            $prefix = substr($prefix, 0, -1);
            if(empty($prefix)) return "";
        }
    }
}

?>