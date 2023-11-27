<?php
    //2-4-3     +     5-6-4    =    7-0-8 
    //ters çevirip toplanacak - linked list kullanılacak

    class ListNode {
        public $val;
        public $next;

        function __construct($val = 0, $next = null) {
            $this->val = $val;
            $this->next = $next;
        }
    }

    class Solution {
        public function addTwoNumbers($l1, $l2) {
            $dummyHead = new ListNode(); //başlangıç düğüm
            $current = $dummyHead; //bulunan konum
            $carry = 0; //taşınan sayı

            while($l1 !== null || $l2 !== null) {  //sona ermemişse
                $x = ($l1 !== null) ? $l1->val : 0; // l1 bitiş düğümde değilse(null değilse) 
                $y = ($l2 !== null) ? $l2->val : 0; 
                $sum = $carry + $x + $y;
                $carry = intval($sum / 10);
                $current->next = new ListNode($sum % 10);
                $current = $current->next;

                if($l1 !== null) $l1 = $l1->next;
                if($l2 !== null) $l2 = $l2->next;
            }
            if($carry>0) {
                $current->next = new ListNode($carry);
            }
            return $dummyHead->next;
        }
    }
?>