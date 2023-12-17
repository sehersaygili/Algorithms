<?php

//to do not ekleme - çıkarma uygulaması

class todoNode {
    public $data;
    public $next;

    public function __construct($data, $next=null) {
        $this->data = $data;
    }
}

class todoLinkedList {
    public $head;
    //listenin başına not eklemek istiyorum
    public function addNote($data) {
        $newNode = new todoNode($data);
        if($this->head !== null) {
            $newNode->next = $this->head;
            $this->head = $newNode;
        } else {
            $this->head = $newNode;
        }
    }

    //notlarımı görüntülemek istiyorum
    public function displayMyNotes() {
        while($this->head !== null) {
            echo $this->head->data . PHP_EOL;
            $this->head = $this->head ->next;
        }
    }

    //parametre olarak gönderdiğim notumu silmek istiyorum
    public function deleteMyNote($data) {
        if ($this->head === null) {
            return; // Liste boşsa işlem yapma
        }
        if($this->head !== null) { // first node boşsa silinecek bir şey de yok
            if($this->head->data === $data) {
                $this->head = $this->head->next;
                return;
            } else {
                while($this->head->next != null) {
                    if($this->head->next->data === $data) {
                        $this->head->next = $this->head->next->next;
                        return;
                    }
                    $this->head = $this->head->next;
                }
            }
        }
    }
}

$list = new todoLinkedList();
$list->addNote("Alışveriş yap");
$list->addNote("E-postaları kontrol et");
$list->addNote("deneme");

$list->deleteMyNote("E-postaları kontrol et"); // Bir öğe siler

$list->displayMyNotes(); // Güncellenmiş listeyi görüntüler


?>