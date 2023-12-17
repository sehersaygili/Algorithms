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
    public $head;

    public function __construct() {
        $this->head = null;
    }

    public function addNode($data) {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    public function bubbleSort() {
        if ($this->head === null) {
            return;
        }

        $swapped = true;
        while ($swapped) {
            $swapped = false;
            $current = $this->head;
            while ($current->next !== null) {
                if ($current->data > $current->next->data) {
                    // Swap the data of current and next nodes
                    $temp = $current->data;
                    $current->data = $current->next->data;
                    $current->next->data = $temp;
                    $swapped = true;
                }
                $current = $current->next;
            }
        }
    }

    public function displayList() {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " ";
            $current = $current->next;
        }
        echo "\n";
    }
}

// Bağlı liste oluştur
$linkedList = new LinkedList();
$linkedList->addNode(15);
$linkedList->addNode(2);
$linkedList->addNode(9);
$linkedList->addNode(1);
$linkedList->addNode(5);

echo "Bağlı liste sıralanmadan önce: ";
$linkedList->displayList();

// Bubble Sort kullanarak bağlı listeyi sırala
$linkedList->bubbleSort();

echo "Bağlı liste Bubble Sort ile sıralandı: ";
$linkedList->displayList();
?>
