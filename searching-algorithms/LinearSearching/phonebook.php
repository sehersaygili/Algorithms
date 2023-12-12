<?php
    $contacts =[ 
        ["name" => "Alice", "phone" => "555-224"],
        ["name" => "John", "phone" => "444-555"],
        ["name" =>"Peter", "phone" => "342-2342"]
    ];
    function linearSearch($array, $key, $searchKey){
        foreach ($array as $index => $item) {
            if ($item[$key] === $searchKey) {
                return $index;
            }
        }
        return -1;
    }
    $searchTerm = "Alice";
    $resultIndex = linearSearch($contacts,"name",$searchTerm);

    if($resultIndex !== -1) {
        $contact = $contacts[$resultIndex];
        echo "İsim: " . $contact["name"] . ", Telefon: " . $contact["phone"];
    } else {
        echo "numara veya kişi bulunamadı";
    }
?>