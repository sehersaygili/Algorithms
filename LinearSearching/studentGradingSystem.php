<?php


$students = [
    ["name" => "Mete", "grade" => "30"],
    ["name" => "Selin", "grade" => "90"],
    ["name" => "Furkan", "grade" => "80"],
    ["name" => "Ayça", "grade" => "10"]
];
//ilk yol
$aranankisi = "Ayça";

// function linearSearch($array, $n, $searchKey){
//     foreach($array as $index => $item) {
//         if($item[$n] === $searchKey) {
//             return $index;
//         }
//     }
//     return -1;
// }

// $resultIndex = linearSearch($students,"name",$aranankisi);
// $student = $students[$resultIndex];

// echo $student["name"] . " " .$student["grade"];
$search_name = "Furkan";

function linearSearch($students, $target_name) {
    foreach($students as $student) {
        if ($student["name"] === $target_name) {
            return $student["grade"];
        }
    }
    return -1;
}

$found_grade = linearSearch($students, $search_name);

if($found_grade != -1) {
    echo "{$search_name} adlı öğrencinin notu {$found_grade}";
}
else {
    echo "{$search_name} adlı öğrenci bulunamadı";
}
?>