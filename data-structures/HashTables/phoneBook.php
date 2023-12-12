<?php

$phones = array(
    "Ahmet" => "555-1234",
    "Mehmet" => "555-5678",
    "Ayşe" => "555-9876"
);

// add new person
$phones["ece"] ='434-2342';

// get a number
$find = $phones['ece'];

// delete someone 
unset($phones["mehmet"]);

// list people
foreach($phones as $index => $phone) {
    echo $index . ' ' . $phone . "\n";
}

// controls
if(isset($phones['Ayşe'])) {
    echo "hey Ayşe is here!";
} else {
    echo "where is Ayşe ?";
}

?>
