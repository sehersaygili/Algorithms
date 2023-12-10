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
        $newNode = new PhotoNode($photo);
        if ($this->head === null) {
            $this->head = $newNode;
            $this->current = $newNode;
        } else {
            $this->current->next = $newNode;
            $this->current = $newNode;
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