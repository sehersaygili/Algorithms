<?php
class Solution {

function removeElement(&$nums, $val) {
    $k = 0;
    foreach ($nums as $num) {
        if ($num != $val) {
            $nums[$k] = $num;
            $k++;
        }
    }
    return $k;
    }
}
?>