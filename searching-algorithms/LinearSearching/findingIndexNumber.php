<?php
$arr = [2, 4, 6, 8, 10];
$x = 8;

function linearSearch($arr, $n, $x) {
    for($i = 0; $i <= $n; $i++) {
        if($arr[$i] == $x) {
            return $i;
        }
    }
    return -1;
}

$result = linearSearch($arr, sizeof($arr), $x);

if($result == -1) {
    echo "Element is not present in array";
} else {
    echo "Element is present in array";

}
?>