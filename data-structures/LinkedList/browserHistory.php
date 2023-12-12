<?php
class HistoryNode {
    public $url;
    public $timestamp;
    public $next;

    public function __construct($url) {
        $this->url = $url;
        $this->timestamp = time();
        $this->next = null;
    }
}

class BrowserHistory {
    public $head;

    public function __construct() {
        $this->head = null;
    }

    /* Algoritması
        1. 1.elemanı 2. elaman yap nexti -> null olmuş oluyor
        2. eklenecek eleman için düğüm oluşturulur.
        3. yeni düğümün next değeri start elemanına atanır
        4. yeni düğüm start elemanı olarak güncellenir
    */

    //Head başa eleman ekleme
    public function addPage($url) {
        
        $newNode = new HistoryNode($url);

        if($this->head !== null) {
            $newNode->next = $this->head;
            $this->head = $newNode;
        } else {
            $this->head = $newNode;
        }
    }

    /* Algoritması
        1. Önce son düğümü bul 
        2. son düğümün next değerine yeni düğümü ekle
        3. yeni düğümün pointer değişkenine null ata 
    */

    public function addPageToEnd($url){
        $newNode = new HistoryNode($url);
        if($this->head === null) {
            $this->head = $newNode;
        }else {
            $current = $this->head;
            //son düğümü bulmak için traverse etmek yani dolaşmak gerekiyor.
            while($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $newNode;
        }
    }

    public function insertAfter($prev, $url) {
        $newNode = new HistoryNode($url);
        $current = $this->head;
       
        if($current->next === $newNode){
            $this->head = $prev;
        }
    }
}

?>