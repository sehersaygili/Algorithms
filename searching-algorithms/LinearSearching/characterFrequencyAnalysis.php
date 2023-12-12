<?php

$text = "These examples are about linear searching";
$searchLetter = "e";

function linearSearch($text, $searchLetter) {
    $frequence = 0;
    
    for($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] === $searchLetter) {
            $frequence++;
        }
    }
    return $frequence;
}

$result = linearSearch($text, $searchLetter);
echo "Metinde '{$searchLetter}' harfi {$result} kez geçiyor.";

?>