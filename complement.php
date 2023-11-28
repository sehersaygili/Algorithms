<?php
/*
Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].


* @param $nums, $target
* boş dizi oluşturma(dizi konumlarını ve indislerini saklamak için)
* dizi üzerinde döngü ( mevcut elemanın değeri $num, dizideki konumu $index )
* complement hesaplama (hedef-sayı)
* complement kontrolü
* sayıyı kaydetme
* sonuç

*/
class Solution {
    function twoSum($nums, $target) {
        $numIndices = array(); // indisleri array içinde tutuyoruz.
        foreach($nums as $index => $num) { //tüm diziyi dolaşıyoruz.
            $complement = $target - $num; //tümleyen = 9 - 2 = 7
            if(array_key_exists($complement, $numIndices)) {
                return array($numIndices[$complement],$index);
            }
            $numIndices[$num] = $index;
        }
        return array();
    }
}



?>