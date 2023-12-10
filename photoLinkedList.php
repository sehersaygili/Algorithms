<?php

class PhotoNode {
    public $photo;
    public $next;

    public function __construct($photo) {
        $this->photo = $photo;
        $this->next = null;
    }
}


class PhotoLinkedList {
    private $head;
    private $current;

    public function __construct() {
        $this->head = null;
        $this->current = null;
    }

    public function addPhoto($photo) {
        $newNode = new PhotoNode($photo); // Yeni bir düğüm oluşturuluyor. Bu düğüm, gönderilen fotoğrafı içeriyor.
        if ($this->head === null) { // Eğer linked list boşsa (yani head düğümü yoksa)
            $this->head = $newNode; // Oluşturulan yeni düğüm, listenin başı (head) olur.
            $this->current = $newNode; // Aynı zamanda, bu düğüm şu anki (current) düğüm olarak da ayarlanır.
        } else {
            $this->current->next = $newNode; // Mevcut son düğümün 'next' bağlantısını yeni düğüme ayarlar.
            $this->current = $newNode; // Yeni eklenen düğümü, şu anki (current) düğüm olarak günceller.
        }
    }

    public function showCurrentPhoto() {
        if ($this->current !== null) {
            echo "Current Photo: " . $this->current->photo . "\n";
        } else {
            echo "No photos in the list.\n";
        }
    }

}

$photoList = new PhotoLinkedList();
$photoList->addPhoto("photo1.jpg");
$photoList->addPhoto("photo2.jpg");
$photoList->addPhoto("photo3.jpg");

$photoList->showCurrentPhoto();

?>