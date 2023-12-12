<?php

class ListNode {
    public $note;
    public $next;

    public function __construct($note) {
        $this->note = $note;
        $this->next = null;
    }
}

class LinkedList {
    private $firstNode;

    public function __construct() {
        $this->firstNode = null;
    }

    public function insert($note) {
        $newNode = new ListNode($note);
        if ($this->firstNode === null) {
            $this->firstNode = $newNode;
        } else {
            $newNode->next = $this->firstNode;
            $this->firstNode = $newNode;
        }
    }

    public function display() {
        $current = $this->firstNode;
        while ($current !== null) {
            echo $current->note . PHP_EOL;
            $current = $current->next;
        }
    }

    public function delete($note) {
        if ($this->firstNode !== null) {
            if ($this->firstNode->note === $note) {
                $this->firstNode = $this->firstNode->next;
            } else {
                $current = $this->firstNode;
                while ($current->next !== null) {
                    if ($current->next->note === $note) {
                        $current->next = $current->next->next;
                        break;
                    }
                    $current = $current->next;
                }
            }
        }
    }
}

$list = new LinkedList();
$list->insert("Alışveriş yap");
$list->insert("E-postaları kontrol et");
$list->insert("Proje raporunu yaz");

$list->display(); // Listeyi görüntüler

$list->delete("E-postaları kontrol et"); // Bir öğe siler

$list->display(); // Güncellenmiş listeyi görüntüler
?>
