<?php

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class LinkedList {
    private $head;

    public function __construct() {
        $this->head = null;
    }

    public function insert($data) {
        $newNode = new Node($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function insertionSort() {
        if ($this->head == null || $this->head->next == null) {
            return;
        }

        $sorted = null;
        $current = $this->head;
        while ($current != null) {
            $next = $current->next;
            $sorted = $this->sortedInsert($sorted, $current);
            $current = $next;
        }
        $this->head = $sorted;
    }

    private function sortedInsert($sorted, $newNode) {
        if ($sorted == null || $sorted->data >= $newNode->data) {
            $newNode->next = $sorted;
            return $newNode;
        } else {
            $current = $sorted;
            while ($current->next != null && $current->next->data < $newNode->data) {
                $current = $current->next;
            }
            $newNode->next = $current->next;
            $current->next = $newNode;
            return $sorted;
        }
    }

    public function printList() {
        $current = $this->head;
        while ($current != null) {
            echo $current->data . " ";
            $current = $current->next;
        }
        echo "\n";
    }
}

// Test
$ll = new LinkedList();
$ll->insert(4);
$ll->insert(3);
$ll->insert(2);
$ll->insert(1);

echo "Orijinal Liste: ";
$ll->printList();

$ll->insertionSort();

echo "Sıralanmış Liste: ";
$ll->printList();
?>
