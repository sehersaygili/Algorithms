<?php 

$watchlist = [];

function displayWatchlist($watchlist, $filmName) {
    if(isset($watchlist[$filmName])) {
        $film = $watchlist[$filmName];
        echo "Yönetmen: " . $film['director'] . "\n";
        echo "Tür: " . $film['genre'] . "\n";
        echo "İzleme Durumu: " . ($film['watched'] ? "İzlendi" : "İzlemek İsteniyor") . "\n";
    } else {
        echo "Film bulunamadı.\n";
    }
}

function addFilms(&$watchlist, $filmName, $director, $genre, $watched = false) {
    $film = [
        'director' => $director,
        'genre' => $genre,
        'watched' => $watched
    ];
    $watchlist[$filmName] = $film;
}

function markFilmAsWatched($watchlist, $filmName) {
    if(isset($watchlist[$filmName])) {
        $watchlist[$filmName]['watched'] = true;
    }
}

$filmName ="Inception";

displayWatchlist($watchlist,$filmName);

addFilms($watchlist, 'Inception', 'Christopher Nolan', 'Science Fiction');
displayWatchlist($watchlist,$filmName);

markFilmAsWatched($watchlist, 'Inception');
displayWatchlist($watchlist,$filmName);

?>