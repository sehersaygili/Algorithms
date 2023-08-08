<?php 

//My music taste is like this :)
$musicCollection = [
    "Bubblegum Bitch" => "MARINA",
    "Washing Machine Heart" => "Mitski",
    "Fuck Me In Shibuya" => "Ashnikko"
];

//add new songs in the collection
$musicCollection['The Less I Know The Better'] = "Tame Impala";
$musicCollection['All That She Wants'] = "Ace Of Base";

//get a singer 
$find = $musicCollection['Bubblegum Bitch'];

//Delete a song from list
unset($musicCollection["All That She Wants"]);

//list all of the music collection
foreach ($musicCollection as $song => $artist) {
    echo "Song: " . $song . ", Artist: " . $artist . "\n" ;
}

?>