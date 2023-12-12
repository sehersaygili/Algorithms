<?php

$registeredUser = ["Alice", "Peter", "Seher"];
$usernameToCheck = "Seher";

function linearSearch($array, $target) {
    for ($i = 0; $i < count($array); $i++) {
        if($array[$i] == $target) {
            return true;
        }
    }
    return false;
}

if(linearSearch($registeredUser, $usernameToCheck)){
    echo "Username is verified : $usernameToCheck";
} else {
    echo "Username is not verified";
}

//Second Option
// $registeredUser = ["Alice", "Peter", "Seher"];
// $usernameToCheck = "Seher";

// function linearSearch($arr, $n, $usernameToCheck) {
//     for($i = 0; $i <= $n; $i++) {
//         if($arr[$i] == $usernameToCheck) {
//             return $arr[$i];
//         }
//     }
// }

// $result = linearSearch($registeredUser, count($registeredUser),$usernameToCheck);
// if($result == true) {
//     echo "Username is verified : $usernameToCheck";
// } else {
//     echo "Username is not defined";
// }
?>