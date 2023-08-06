<?php

// Kitap veritabanı (ISBN numarası sırasına göre sıralı)
$books = array(
    array('ISBN' => '12345678903423', 'title' => 'Sample Book 1', 'author' => 'John Doe'),
    array('ISBN' => '23456782343901', 'title' => 'Sample Book 2', 'author' => 'Jane Smith'),
    array('ISBN' => '23456782323901', 'title' => 'Sample Book 3', 'author' => 'Jenny River'),
);

function binarySearchByISBN($books, $targetISBN) {
    $low = 0;
    $high = count($books) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($books[$mid]['ISBN'] == $targetISBN) {
            return $mid; 
        } elseif ($books[$mid]['ISBN'] < $targetISBN) {
            $low = $mid + 1; 
        } else {
            $high = $mid - 1;
        }
    }
    return -1;
}

$userInputISBN = '1234567890';

$bookIndex = binarySearchByISBN($books, $userInputISBN);

if ($bookIndex != -1) {
    echo "Kitap bulundu: " . $books[$bookIndex]['title'] . " - " . $books[$bookIndex]['author'];
} else {
    echo "Kitap bulunamadı.";
}

?>