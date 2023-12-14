<?php

class MovieNode{
    public $movie;
    public $next;

    public function __construct($movie, $next = null) {
        $this->movie = $movie;
    }
}

class movieLinkedList {
    public $head;
    public function __construct($head){
        $this->head = $head;
    }

    //liste başına film ekleme
    public function addMovie($movie) {
        $newNode = new MovieNode($movie);
        if($this->head !== null) {
            $newNode->next = $this->head;
            $this->head = $newNode;
        } else {
            $this->head = $newNode;
        }
    }
    //liste sonuna film ekleme
    public function addToEnd($movie) {
        $newNode = new MovieNode($movie);
        if($this->head !== null) {
            $this->head = $newNode;
        } else {
            //son node için traverse yap
            while($this->head->next !== null) {
                $this->head = $this->head->next;
            }
            $this->head->next = $newNode;
        }
    }
}

?>